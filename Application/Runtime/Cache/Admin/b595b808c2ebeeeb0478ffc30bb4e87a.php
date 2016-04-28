<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/font-awesome.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/uploadify.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/reset.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/utils.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/common.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/style.css" />
  <title>仪表盘</title>
</head>
<body>
<div class="header">
  <span class="logo">ohana</span>
  <div class="user" id="user-menu">
    <a href="jsvascript:;"><?php echo ($current_user["name"]); ?></a>
    <input type="hidden" id="cur_user" value="<?php echo ($current_user["super_admin"]); ?>">
    <input type="hidden" id="cur_id" value="<?php echo ($current_user["id"]); ?>">
    <ul class="user-sub-menu">
      <li><a href="<?php echo U('user/edit', null, '');?>/id/<?php echo ($current_user["id"]); ?>"><i class="fa fa-pencil"></i>编辑个人资料</a></li>
      <li><a href="<?php echo U('login/unset_session');?>"><i class="fa fa-sign-out"></i>退出</a></li>
    </ul>
  </div>

</div>
<div class="container">
  <div class="sidebar" id="sidebar">
  <ul>
    <li class="cur">
      <a href="<?php echo U('index/index');?>"><i class="fa fa-dashboard"></i>仪表盘</a>
    </li>
    <li>
      <a href="javascript:;"><i class="fa fa-book"></i>文章管理</a>
      <ul class="sub-menu">
        <li><a href="<?php echo U('article/add');?>">新建文章</a></li>
        <li><a href="<?php echo U('article/articleList');?>">文章管理</a></li>
      </ul>
    </li>
    <li><a href="<?php echo U('category/cateList');?>"><i class="fa fa-bars"></i>栏目管理</a></li>
    <!--<li><a href="<?php echo U('category/cateList');?>"><i class="fa fa-file"></i>文件管理</a></li>-->
    <li>
      <a href="javascript:;"><i class="fa fa-book"></i>管理员</a>
      <ul class="sub-menu">
        <li><a href="<?php echo U('user/user_list');?>">管理员列表</a></li>
        <li><a href="<?php echo U('user/add');?>">添加管理员</a></li>
      </ul>
    </li>
    <li><a href="<?php echo U('site/edit');?>"><i class="fa fa-gear"></i>网站设置</a></li>
    <li><a href="<?php echo U('user/edit', null, '');?>/id/<?php echo ($current_user["id"]); ?>"><i class="fa fa-bars"></i>账号设置</a></li>

  </ul>
</div>
  <div class="main dashboard">
    <h3 class="title "><strong>仪表盘</strong></h3>
    <div class="content">
      <div>
        <h3>欢迎使用ohana</h3>
        <h4 class="sm-title">从这里开始：</h4>
        <br/>
      </div>
      <div class="row">
        <div class="col-md-4">
          <p class="h4">基本信息</p>
          <div class="message">
            <img src="/Test/ohana-php/Public/upload/img/<?php echo ($site["logo"]); ?>" alt="LOGO" />
            <div class="site-name"><?php echo ($site["name"]); ?></div>
          </div>
          <a href="<?php echo U('site/edit');?>" class="btn btn-primary">设置网站信息</a>
        </div>
        <div class="col-md-4 next">
          <p class="h4">接下来</p>
          <a href="<?php echo U('category/cateList');?>">添加一个栏目</a>
          <br/>
          <a href="<?php echo U('article/add');?>">新建一篇文章</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">power by Allen.mo</div>
</body>
<script src="/Test/ohana-php/Public/js/lib/jquery-1.11.0.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.validate.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.md5.js"></script>
<script src="/Test/ohana-php/Public/js/lib/bootstrap.js"></script>
<script src="/Test/ohana-php/Public/js/config.js"></script>
<script src="/Test/ohana-php/Public/js/common.js"></script>
</html>