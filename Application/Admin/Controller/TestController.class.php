<?php

namespace Admin\Controller;


use Admin\Model\ArticleModel;
use Think\Controller;

class TestController extends Controller {


  function form() {
    $this->display();
  }

  function add() {
    header("Content-Type: text/html; charset=UTF-8");
    dump($_POST);
  }

  function time() {
    dump(time());
  }

  function count() {
    $model = new ArticleModel();

    p($model->getTotal());
  }

  function articleList() {
    $model = new ArticleModel();
    p($model->getList());
    echo $model->getLastSql();
  }

}