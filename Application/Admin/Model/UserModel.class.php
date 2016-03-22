<?php

namespace Admin\Model;
use Think\Model;

class UserModel extends Model {
  protected $tableName = "user";

  protected $_map = array(
    'user_name' => 'name'
  );

  protected $_validate = array(
    array('name', ',' , '账号已经存在',0,'unique',1),
    array('confirm_password','fake_password','确认密码错误',0,'confirm'),
    array('email',',','邮箱已经存在',0,'unique',1)
  );

  // 添加一个管理员
  function addUser() {
   return $this->add();
  }


  /*function addUser() {
    return $this->add();
  }*/

  // 检查用户名是否已经存在
  function checkUserNameExist($user_name) {
    $user = $this->where(array('name' => $user_name))->select();
    return $user>0 ;
  }

  /*function checkUserNameExist($user_name) {
    $condition = array(
      'name' => $user_name
    );

    $users = $this->where($condition)->select();

    return $users > 0;    //return $users>0 ? true : false
  }*/

  //
  function getUserById($id) {
    $condition = array(
      'id' => intval($id)
    );
    $user_data = $this->where($condition)->find();
    return $user_data;
  }

  function edit($id, $data) {
    return $this->where(array('id' => $id))->save($data);
  }

  /*function deleteById($id) {              //$id 为javascript $.post传递过来的参数。
    $result = $this->where(array('id' => $id))->delete();
    return $result;           //若失败return =>false 若成功，return一个非false数据。
  }*/

  function deleteByid($id) {
    $result = $this->where(array('id' => $id))->delete();
    return $result;
  }

 /*
  *
  * 用户提交登陆后，选择数据库与用户输进来的用户明匹配的数据返回一个是否存在这么一个用户名与用户输进来的用户名一致。
  */
  function userLogin($user_name) {
    $user = $this->where(array('name' => $user_name))->select();
    return $user > 0;
  }
/*
 *
 * 通过用户名获取该用户的所有数据，获取的数据是一个二位数组（仅有一个对象的数据），所以取$suer[0]，即可获取其所有数据
 */
  function getUserByUserName($user_name) {
    $user = $this->where(array('name' => $user_name))->select();
    return $user[0];
  }

  function searchUser($user_name, $password) {
    $user = $this->field('id')->where(array(
      'name' => $user_name,
      'password' => $password
    ))->find();
    return $user['id'];
  }

}