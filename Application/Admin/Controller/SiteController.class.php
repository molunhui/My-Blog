<?php
namespace Admin\Controller;

use Admin\Common\BaseController;
use Admin\Model\SiteModel;

class SiteController extends BaseController {

  function edit() {
    $siteModel = new SiteModel();
    $this->assign('site', $siteModel->get());
    $this->display('website');
  }

  function runEdit() {
    $siteModel = new SiteModel();
    $siteModel->create();
    $siteModel->save();
    $this->redirect('edit');
  }

  function uploadLogo() {
    // Define a destination
    $targetFolder = PUBLIC_PATH.'upload/img/'; // Relative to the root
    // Validate the file type
    $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
    $fileParts = pathinfo($_FILES['Filedata']['name']);

    if (!empty($_FILES)) {
      $tempFile = $_FILES['Filedata']['tmp_name'];
      $fileName = mt_rand(1,1000).ceil(microtime(true)).'.'.$fileParts['extension'];
      $targetFile = $targetFolder.''.$fileName;

      if (in_array($fileParts['extension'],$fileTypes)) {
        move_uploaded_file($tempFile,$targetFile);
        $data = array(
          "status" => 'ok',
          "data" => $fileName
        );
      } else {
        $data = array(
          "status" => 'error'
        );
      }

      $this->ajaxReturn($data);
    }
  }
}