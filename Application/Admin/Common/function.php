<?php

function p($array){
  dump($array , 1 ,'<pre>' ,0);
}

function tree(&$categories, $pid = 0, $level = 0, $html = "&nbsp; -- &nbsp;") {
  $_tree = array();

  foreach($categories as $category) {
    if($category['pid'] == $pid) {
      $category['html'] = str_repeat($html,$level);
      $_tree[] = $category;
      $_tree = array_merge($_tree, tree($categories, $category['id'], $level + 1));
    }
  }
  return $_tree;
}

