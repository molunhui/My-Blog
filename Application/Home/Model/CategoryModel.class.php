<?php
namespace Home\Model;
use Think\Model;

class CategoryModel extends Model {
  protected $tableName = 'category';

  function getCategory() {
    return $this->select();
  }

  function getCategoryTitleById($id){
    return $this->where(array("id" => $id))->find();
  }
  function getTree(){
    $list = $this->order(' cre_time desc')->select();
    return tree($list);
  }
}