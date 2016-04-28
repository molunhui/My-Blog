<?php

namespace Home\Controller;
use Home\Model\ArticleModel;
use Home\Model\CategoryModel;
use Home\Model\IndexModel;
use Think\Controller;


class ArticleController extends Controller {

  function Index($id) {
    $this->redirect('index/index');
  }

  function  getArticleByName($name) {
    $articleModel = new ArticleModel();
    $article = $articleModel->getArticleByName($name);
    $this->assign("article" , $article);
    $this->display('article');
  }
  function article($id) {

    /*blog info-->*/
    $indexModel = new IndexModel();
    $info = $indexModel -> getInfo();
    $this->assign('info',$info);
    /*end blog info*/
    
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

  function lists($id,$page = 1, $page_size = 2) {

    /*blog info-->*/
    $indexModel = new IndexModel();
    $info = $indexModel -> getInfo();
    $this->assign('info',$info);
    /*end blog info*/
    
    /*sidebar -->*/
    $cateModel = new CategoryModel();
    $category = $cateModel->getTree();
    $this->assign("navigation" , $category);
    $articleModel = new ArticleModel();
    $lastArticle = $articleModel->getArticle();
    $this->assign('lastArticle',$lastArticle);
    /*end sidebar*/
    /*title-->*/
    $categoryTitle = $cateModel->getCategoryTitleById($id);
    $this->assign("title" , $categoryTitle);
    /*end title*/
    /*articleList-->*/
    $listModel = new ArticleModel();
    $articleList = $listModel->getArticleListByCid($id , $page , $page_size);
    $total_count = $articleModel->getTotalByCid($id);
    // dump($articleList);
    $pageMeta = array(
      'page' => $page,
      'page_size' => $page_size,
      'page_count' => ceil($total_count / $page_size),
      'total_count' => $total_count,
    );

    $this->assign('articleList', $articleList);
    $this->assign('page', $pageMeta);

    $this->display('Article/list');
  }

}
