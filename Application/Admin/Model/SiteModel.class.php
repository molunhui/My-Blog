<?php
namespace Admin\Model;


use Think\Model;

class SiteModel extends Model {

  function get() {
    return $this->select()[0];
  }
}