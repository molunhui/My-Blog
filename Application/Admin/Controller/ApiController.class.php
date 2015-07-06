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

  /*function check_user_name_exist($user_name) {
    $user = new UserModel();

    $isExist = $user->checkUserNameExist($user_name);
    $this->ajaxReturn(array('isExist' => $isExist));

  }*/


  // 删除一个用户
  /*function del_user($id) {     //$id参数为javascript传递过来的对象。
    $user = new UserModel();

    if($user->deleteById($id)) {                 //调用UserModel下的deleteByid方法（数据处理在model中完成。）
                                                // 该方法执行delete程序，若成功，return一个非false数据，若失败，return一个false
      $this->ajaxReturn(array('status' => 'ok'));
    } else {
      $this->ajaxReturn(array('status' => 'error'));
    }

  }*/

  function del_user($id) {
    $user = new UserModel();
    if($user->deleteByid($id)){
      $this->ajaxReturn(array('status' => 'ok'));
    }else{
      $this->ajaxReturn(array('status' => 'false'));
    }
  }

  function del_cate($id) {
    $cate = new CategoryModel();
    if($cate->deleteByid($id)){
      $this->ajaxReturn(array('status' => 'ok'));
    }else{
      $this->ajaxReturn(array('status' => 'false'));
    }
  }

}