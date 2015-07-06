<?php

class Category {
  static function unlimitedForLevel($list , $html = '--' ,$pid = 0, $level = 0) {
    $arr = array();
    foreach ($list as $v) {
      if($v['pid'] == $pid) {
        $v['html'] = str_repeat($html,$level);

        $arr = $v;

        $arr = array_merge($arr , self::unlimitedForLevel($list , $html , $v['id']));
      }
    }

    return $arr;
  }
}