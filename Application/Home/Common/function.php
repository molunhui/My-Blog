<?php

function p($array){
  dump($array , 1 ,'<pre>' ,0);
}

/*function tree(&$categories, $pid = 0) {
  $_tree = array();
  foreach($categories as $category) {
    if($category['pid'] == $pid) {
      $_tree[] = $category;
      $_tree = array_merge($_tree, tree($categories, $category['id']));
    }
  }
  return $_tree;
}*/
function tree(&$categories, $pid = 'pid',$p_key='id',$child = 'children:') {
  $tree = array();
  if(is_array($categories)){
    //创建基于主键的数组引用
    $refer = array();
    foreach($categories as $key => $data){
     // 每次循环中，当前单元的值被赋给 $value 并且数组内部的指针向前移一步，此时，$key相当于键，data相当于值
      $refer[$data[$p_key]] = & $categories[$key]; //获取此时的键$key并传递给$data[$p_key]，即此时的id
    }

    foreach ($categories as $key => $data) {
      // 判断是否存在parent
      $parentId = $data[$pid];
      if ($parentId == 0) {
        $tree[] =& $categories[$key];
      }else{
        if (isset($refer[$parentId])) {
          $parent =& $refer[$parentId];
          $parent[$child][] =& $categories[$key];
        }
      }
    }
  }
  return $tree;
}
