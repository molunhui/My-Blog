<?php

namespace Home\Controller;
use Home\Model\ArticleModel;
use Home\Model\CategoryModel;
use Think\Controller;

class ArticleController extends Controller {

  function Index() {
    $this->redirect('index/index');
  }

  function article($id) {
    /*sidebar -->*/
    $cateModel = new CategoryModel();
    $category = $cateModel->getTree();
    $this->assign("navigation" , $category);
    $articleModel = new ArticleModel();
    $lastArticleList = $articleModel->getArticle();
    $this->assign('lastArticle', $lastArticleList);
    /*end sidebar*/

    /*getArticleById -->*/
    $article = $articleModel->getArticleById($id);
    $this->assign("article" , $article);
    /*end getArticleById*/

    $this->display();
  }

}