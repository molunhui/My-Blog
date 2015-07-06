<?php
namespace Home\Controller;

use Home\Model\ArticleModel;
use Home\Model\CategoryModel;
use Think\Controller;

class IndexController extends Controller {
  public function index() {
    /*sidebar -->*/
    $cateModel = new CategoryModel();
    $category = $cateModel->getTree();
    $this->assign("navigation" , $category);
    $articleModel = new ArticleModel();
    $lastArticle = $articleModel->getArticle();
    $this->assign('lastArticle',$lastArticle);
    /*end sidebar*/
    $this->display();
  }

  function articleList($id){
    $this->redirect('articleList/articleList ? id = $id');
  }
}