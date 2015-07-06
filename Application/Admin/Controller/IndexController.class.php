<?php
namespace Admin\Controller;

use Admin\Common\BaseController;
use Admin\Model\SiteModel;
use Think\Controller;
use Admin\Model\UserModel;

class IndexController extends BaseController {
  function index(){
    $siteModel = new SiteModel();
    $site = $siteModel->get();
    $this->assign('site', $site);
    $this->display();
  }

}