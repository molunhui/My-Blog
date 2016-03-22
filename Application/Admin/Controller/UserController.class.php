<?php
namespace Admin\Controller;

use Admin\Common\BaseController;
use Think\Controller;
use Admin\Model\UserModel;

class UserController extends BaseController {

  /*
   *
   * 首页
   */

  function index() {
   $this->display('Index/index');
  }

  /*
   *
   * 管理员列表视图
   */
  function user_list() {

    $user = new UserModel();
    $list = $user->select();
    $this->assign('list', $list);
    $this->display('list');
  }


  /*
   *
   * 添加管理员
   */
  function add() {

    $userModel = new UserModel();
    $this->display('add');
  }

  function insert() {
    $userModel = new UserModel();

    if($userModel->create() && $userModel->addUser()){
      $this->redirect('user/user_list');
    } else {
      $this->error($userModel->getError());
    }
  }


  /*function insert() {
    $userModel = new UserModel();

    if ($userModel->create() && $userModel->addUser()) {
      // 添加成功就跳到列表页
      $this->redirect('user/index');

    } else {
      $this->error($userModel->getError());
    }
  }*/


  /*
   *
   * 编辑管理员 --》
   */
  function edit($id) {

    $userModel = new UserModel();
    $data = $userModel->getUserById($id);     //$data获取getUserByIdreturn回来的数据即data[0]
    $this->assign('user', $data);
    $this->display('edit');
  }

  function edit_post() {
    $data['name'] = $_POST['user_name'];
    $data['email'] = $_POST['email'];
    $id = $_POST['id'];
    $userModel = new UserModel();
    if($userModel->edit($id, $data)){
      $this->redirect('user/user_list');
    }else{
      $this->error($userModel->getError());
    }
  }

  /*
   * 管理员<--
   */
}