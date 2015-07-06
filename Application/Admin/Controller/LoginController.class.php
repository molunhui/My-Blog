<?php
namespace Admin\Controller;

use Admin\Model\UserModel;
use Think\Controller;
use Think\Image;

class LoginController extends Controller{
  function login() {
    $this->display('login');
  }

  function user_login() {
    $userModel = new UserModel();
    if(!$_POST) {
      $this->error('页面不存在');
      /* $this->redirect('login');*/
    }
    $user_name = $_POST['user_name'];       //获取数据。
    $user_password = $_POST['password'];

    /* $result = $userModel->userLogin($user_name);    //调用模板userLogin方法。
     $user = $userModel->getUserByuserName($user_name);//调用getUserByuserName方法以获取该用户的所有数据。
     $this->assign('user',$user);
     if(!$result || $user['password'] != $user_password){
       $this->error('账号或密码错误，请重新登陆');
       $this->display('login');
     }else{
       $this->display('Index/index');
     }*/
    /* p($_POST);*/

    $user_id = $userModel->searchUser($user_name, $user_password);

    if($user_id) {
      // 先写入 session, 再跳转到首页
      $_SESSION['user_id'] = $user_id;
      $this->redirect('index/index');
    } else {
      $this->error('账号或密码错误，请重新登陆');
    }
  }


  function unset_session() {
    unset($_SESSION['user_id']);
    $this->redirect('login');
  }
}