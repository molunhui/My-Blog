<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>文章管理</title>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/font-awesome.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/uploadify.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/reset.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/utils.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/common.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/style.css"/>

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
  <div class="main all-article">
    <h3 class="title "><strong>文章管理</strong></h3>

    <div class="content">
      <table class="table">
        <thead>
        <tr class="row">
          <th class="col-md-4">标题</th>
          <th class="col-md-2">所属栏目</th>
          <th class="col-md-2">发表时间</th>
          <th class="col-md-4">操作</th>
        </tr>
        </thead>
        <tbody class="table-condensed">
        <tr class="row">
          <td class="col-md-4">01</td>
          <td class="col-md-2">02</td>
          <td class="col-md-2">03</td>
          <td class="col-md-4">04</td>
        </tr>
        <tr class="row">
          <td class="col-md-4">01</td>
          <td class="col-md-2">02</td>
          <td class="col-md-2">03</td>
          <td class="col-md-4">04</td>
        </tr>
        <tr class="row">
          <td class="col-md-4">01</td>
          <td class="col-md-2">02</td>
          <td class="col-md-2">03</td>
          <td class="col-md-4">04</td>
        </tr>
        </tbody>
      </table>
      <ul>
        <li><a href="">上一页</a>
        </li>
        <li><a href="">1</a>
        </li>
        <li><a href="">2</a>
        </li>
        <li><a href="">3</a>
        </li>
        <li><a href="">4</a>
        </li>
        <li><a href="">5</a>
        </li>
        <li><a href="">下一页</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</body>

</html>