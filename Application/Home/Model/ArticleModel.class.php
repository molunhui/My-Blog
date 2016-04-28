<?php

namespace Home\Model;
use Think\Model;

class ArticleModel extends Model {
  protected $tableName = "article";
  function getArticle() {
    return $this->order('post_time DESC')->limit(6)->select();
  }

  /*function getArticleListByCid($id) {
    return $this->where(array('cid' =>$id))->order('post_time DESC')->select();
  }*/

  function getArticleById($id) {
    return $this->where(array("id" =>$id))->select();
  }

  function getArticleByName($name) {
    return $this->where(array("title" =>$name))->select();
  }
  function allArticle() {
    return $this->select();
  }

  function getArticleListByCid($id,$page = 1, $page_size = 2) {
    return $this
      ->where(array("cid" =>$id))
      ->page($page, $page_size)
      ->order('post_time DESC')
      ->select();
  }

  function getTotalByCid($id) {
    return $this->where(array("cid" => $id))->field('count(id) as total_count')->find()['total_count'];
  }
}