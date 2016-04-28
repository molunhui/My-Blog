<?php

namespace Home\Model;
use Think\Model;

class IndexModel extends Model {
	protected $tableName = "site";
	function getInfo() {
		return $this->select()[0];
	}
}
