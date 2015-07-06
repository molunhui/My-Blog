<?php
namespace Admin\Common;


use Admin\Model\UserModel;
use Think\Controller;

class BaseController extends Controller {
  public function __construct() {

    parent::__construct();
    $user_id =  $_SESSION['user_id'];

    if(!$user_id) {
 /*     $this->error('请登录');*/
     $this->redirect('login/login');
    }

    $userModel = new UserModel();
    $user = $userModel->getUserById($user_id);
    $this->assign('current_user', $user);
  }

}