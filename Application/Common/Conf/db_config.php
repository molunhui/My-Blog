<?php
$dev = true;

if($dev) {
  return array(
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'ohana',      // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123',
    'DB_PREFIX'             =>  'ohana_'

  );
} else {
  return array(
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '100.54.54.1', // 服务器地址
    'DB_NAME'               =>  'guang-tang',      // 数据库名
    'DB_USER'               =>  'fskdjflk',      // 用户名
    'DB_PWD'                =>  'fsdfjkls',
    'DB_PREFIX'             =>  'ohana_'

  );
}

