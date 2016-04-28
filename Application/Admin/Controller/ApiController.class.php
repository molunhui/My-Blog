<?php
namespace Admin\Controller;

use Admin\Common\BaseController;
use Admin\Common\Util;
use Admin\Model\CategoryModel;
use Think\Controller;
use Admin\Model\UserModel;

class ApiController extends BaseController {


  /*
   * 检查用户名是否已存在
   * true: 已存在
   * */

  function check_name_exist($user_name) {
    $userModel = new UserModel();
    $isExist = $userModel->checkUserNameExist($user_name);
    $this->ajaxReturn(array('isExist' =>$isExist));
  }


  function del_user($id) {
    $user = new UserModel();
    if($user->deleteByid($id)){
      $this->ajaxReturn(array('status' => 'ok'));
    }else{
      $this->ajaxReturn(array('status' => 'false'));
    }
  }

  // function edit_user($id) {
  //   $user = new UserModel();
  //   $data = $user->getUserById($id);
  //   if($data !='') {
  //     dump('hello');
  //     $this->assign('user', $data);
  //     $this->display('edit');
  //   }else {
  //     $this->ajaxReturn(array('status' => 'false'));
  //   }
  // }

  function del_cate($id) {
    $cate = new CategoryModel();
    if($cate->deleteByid($id)){
      $this->ajaxReturn(array('status' => 'ok'));
    }else{
      $this->ajaxReturn(array('status' => 'false'));
    }
  }

}