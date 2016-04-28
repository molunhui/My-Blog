<?php

namespace Admin\Controller;
use Admin\Common\BaseController;
use Admin\Model\ArticleModel;
use Admin\Model\CategoryModel;


class ArticleController extends BaseController {

  function add() {
    $categoryModel = new CategoryModel();
    $categories = $categoryModel->getTree();
    $this->assign('categories',$categories);
    $this->display('new_article');
  }

  function articleList($page = 1, $page_size = 5) {
    $articleModel = new ArticleModel();
    $list = $articleModel->getList($page, $page_size);

    $total_count = $articleModel->getTotal();

    $pageMeta = array(
      'page' => $page,
      'page_size' => $page_size,
      'page_count' => ceil($total_count / $page_size),
      'total_count' => $total_count,
    );

    $this->assign('articles', $list);
    $this->assign('page', $pageMeta);

    $this->display('articleList');
  }

  function edit($id) {
    $articleModel = new ArticleModel();
    $categoryModel = new CategoryModel();

    $article = $articleModel->getArticleById($id);
    $categories = $categoryModel->getTree();
    $this->assign('categories',$categories);

    if($article) {
      $this->assign('article', $article);
      $this->display('new_article');
    }
  }


  function runAdd() {
    $articleModel = new ArticleModel();
    $data['content'] = $_POST['content'];
   /* dump($data);*/
    if($articleModel->create() && $articleModel->add_article()){
      $this->redirect('articleList');
    }else{
      $this->error("添加失败");
    }
  }

  function runDelete() {
    $articleModel = new ArticleModel();
    $id = $_POST['id'];
    if($articleModel->delete_article($id)) {
      $this->redirect('articleList');
    }else {
      $this->error('删除失败');
    }
  }

  function runEdit() {
    $articleModel = new ArticleModel();
    if($articleModel->create() && $articleModel->edit_article()){
      $this->redirect('articleList');
    }else{
      $this->error('修改失败');
    }
  }
}
