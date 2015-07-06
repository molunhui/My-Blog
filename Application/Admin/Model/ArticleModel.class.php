<?php

namespace Admin\Model;


use Think\Model;

class ArticleModel extends Model {

  function add_article() {
    $this->data['post_time'] = time();
    $this->data['author'] = $_SESSION['user_id'];
    return $this->add();
  }

  function getList($page = 1, $page_size = 10) {
    return $this->alias('a')
                ->join('__CATEGORY__ c ON a.cid = c.id')
                ->field('a.id, a.title, a.content, a.post_time, a.cid, c.name as category')
                ->page($page, $page_size)
                ->order('a.post_time DESC')
                ->select();
  }

  function getTotal() {
    return $this->field('count(id) as total_count')->find()['total_count'];
  }

  function delete_article($id) {
    return $this->where(array('id' => $id))->delete();
  }

  function getArticleById($id) {
    return $this->where(array('id' => $id))->find();
  }

}
