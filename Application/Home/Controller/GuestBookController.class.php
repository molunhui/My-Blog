<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\CategoryModel;
use Home\Model\ArticleModel;

class GuestBookController extends Controller {

  function guestBook() {
    /*sidebar -->*/
    $cateModel = new CategoryModel();
    $category = $cateModel->getTree();
    /*dump($category);*/
    $this->assign("navigation" , $category);
    $articleModel = new ArticleModel();
    $lastArticle = $articleModel->getArticle();
    $this->assign('lastArticle',$lastArticle);
    /*end sidebar*/

    /*留言板显示-->*/
    $this->display();
  }

}