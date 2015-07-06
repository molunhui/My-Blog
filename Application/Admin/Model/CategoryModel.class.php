<?php

namespace Admin\Model;

use Think\Model;

class CategoryModel extends Model {
  protected $tableName = 'category';

  function add_cate() {
  $this->data['cre_time'] = time();
  return $this->add();
  }

  function deleteByid($id) {
    $result = $this->where(array('id' => $id))->delete();
    return $result;
  }

  function getCategoryById($id) {
    return $this->where(array(
      'id' => $id
    ))->find();
  }

  function update_cate() {
    return $this->save();
  }

  function getTree() {
    $list = $this->order('sort_id ASC')->select();
    return tree($list);
  }
 /* function getCateById($id) {
    $cate = $this->where(array('id' => $id))->field('id')->find();
    return $cate;
  }*/

}