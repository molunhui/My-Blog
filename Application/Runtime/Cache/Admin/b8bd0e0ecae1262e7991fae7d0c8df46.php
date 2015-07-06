<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css" />
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/font-awesome.css" />
  <link rel="stylesheet" href="/test/ohana-php/Public/css/uploadify.css" />
  <link rel="stylesheet" href="/test/ohana-php/Public/css/reset.css" />
  <link rel="stylesheet" href="/test/ohana-php/Public/css/utils.css" />
  <link rel="stylesheet" href="/test/ohana-php/Public/css/common.css" />
  <link rel="stylesheet" href="/test/ohana-php/Public/css/style.css" />

  <script src="/test/ohana-php/Public/js/lib/jquery-1.11.0.js"></script>
  <script src="/test/ohana-php/Public/js/lib/jquery.validate.js"></script>
  <script src="/test/ohana-php/Public/js/lib/jquery.md5.js"></script>
  <script src="/test/ohana-php/Public/js/lib/bootstrap.js"></script>
  <script src="/test/ohana-php/Public/js/common.js"></script>
</head>

<body>

  <div class="header">
    <span class="logo">ohana</span>
    <div class="user" id="user-menu">
      <a href="javascript;">Allenice</a>
      <ul class="user-sub-menu">
        <li><a href=""><i class="fa fa-pencil"></i>编辑个人资料</a>
        </li>
        <li><a href=""><i class="fa fa-sign-out"></i>退出</a>
        </li>
      </ul>
    </div>

  </div>
  <div class="container">
    <div class="sidebar" id="sidebar">
      <ul>
        <li class="cur">
          <a href="index.html"><i class="fa fa-dashboard"></i>仪表盘</a>
        </li>
        <li>
          <a href="javascript:;"><i class="fa fa-book"></i>文章管理</a>
          <ul class="sub-menu">
            <li><a href="new-article.html">新建文章</a>
            </li>
            <li><a href="all-article.html">文章管理</a>
            </li>
          </ul>
        </li>
        <li><a href="category.html"><i class="fa fa-bars"></i>栏目管理</a>
        </li>
        <li><a href="category.html"><i class="fa fa-file"></i>文件管理</a>
        </li>
        <li>
          <a href="javascript:;"><i class="fa fa-book"></i>管理员</a>
          <ul class="sub-menu">
            <li><a href="admin.html">管理员列表</a>
            </li>
            <li><a href="user.html">添加管理员</a>
            </li>
          </ul>
        </li>
        <li><a href="website.html"><i class="fa fa-gear"></i>网站设置</a>
        </li>
        <li><a href="user.html"><i class="fa fa-bars"></i>账号设置</a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="title"><strong>管理员</strong>
      </div>
      <div class="content">
        <div class="table">
          <ul class="table-list">
            <li class="row">
              <span class="col-md-4">用户名</span>
              <span class="col-md-4">邮箱</span>
              <span class="col-md-4">操作</span>
            </li>
            <li class="row">
              <span class="col-md-4">Allenice</span>
              <span class="col-md-4">Allenice@163.com</span>
              <span class="col-md-4 ">
                <a href="javascript:;">编辑 </a>
                <a href="javascript:;">删除</a>
            </span>
            </li>
            <li class="row">
              <span class="col-md-4">Phlen</span>
              <span class="col-md-4">Phlen@163.com</span>
              <span class="col-md-4 ">
                <a href="javascript:;">编辑 </a>
                <a href="javascript:;">删除</a>
            </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>