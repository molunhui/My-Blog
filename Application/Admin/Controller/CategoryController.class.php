<?php
namespace Admin\Controller;


use Admin\Common\BaseController;
use Admin\Model\CategoryModel;
use Think\Controller;
use Think\Think;

class CategoryController extends BaseController {


  function cateList() {
    $cateModel = new CategoryModel();
    $id = $_GET['id'];

    if($id) {
      $category = $cateModel->getCategoryById($id);
      $this->assign('category', $category);
    }

    $this->assign('list', $cateModel->getTree());
    $this->display('category');
  }

  function runAddCate() {
    $cateModel = new CategoryModel();

    $id = $_POST['id'];
    if($id){
      // 更新的逻辑
      if($cateModel->create() && $cateModel->update_cate()){
        $this->redirect('cateList');
      }else{
        $this->error('修改失败');
      }

    } else {
      // 添加的逻辑
      if($cateModel->create() && $cateModel->add_cate()){
        $this->redirect('cateList');
      }else{
        $this->error('添加栏目失败');
      }
    }

  }



  /*
   *
   * 编辑栏目
   */
  function edit($id) {
    $cate = new CategoryModel();
    $data = $cate->getCateById($id);
    $this->assign('cate' , $data);
    $this->display('cate_edit');
  }

  function viewCategory() {
    $cateModel = new CategoryModel();
    $list = $cateModel->order('sort_id ASC')->select();
    // p($list);

    /*// 处理数据
    $data = tree($list);
    p($data);*/

  }

  // 二级分类使用情况。。。现在暂时不用
  private function getViewData($list, $pid=0) {
    $data = array();

    for($i = 0; $i < count($list); $i++) {
      $category = $list[$i];
      $category['childNode'] = array();

      if($category['pid'] != $pid) continue;

      for($j = 0; $j < count($list); $j++) {
        $category2 = $list[$j];
        if($category2['pid'] == $category['id']) {
          array_push($category['childNode'], $category2);
        }
      }

      array_push($data, $category);
    }

    return $data;
  }

}