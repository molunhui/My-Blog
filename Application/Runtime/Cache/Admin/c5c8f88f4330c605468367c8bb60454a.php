<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>编辑管理员</title>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/font-awesome.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/uploadify.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/reset.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/utils.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/common.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/style.css"/>
</head>

<body>
<div class="header">
  <span class="logo">ohana</span>

  <div class="user" id="user-menu">
    <a href="jsvascript:;"><?php echo($current_user["name"]); ?></a>
    <ul class="user-sub-menu">
      <li><a href="<?php echo U('user/edit', null, ''); ?>/id/<?php echo($current_user["id"]); ?>"><i
            class="fa fa-pencil"></i>编辑个人资料</a></li>
      <li><a href="<?php echo U('login/unset_session'); ?>"><i class="fa fa-sign-out"></i>退出</a></li>
    </ul>
  </div>

</div>
<div class="container">
  <div class="sidebar" id="sidebar">
    <ul>
      <li class="cur">
        <a href="<?php echo U('index/index'); ?>"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
      <li>
        <a href="javascript:;"><i class="fa fa-book"></i>文章管理</a>
        <ul class="sub-menu">
          <li><a href="<?php echo U('article/add'); ?>">新建文章</a></li>
          <li><a href="<?php echo U('article/articleList'); ?>">文章管理</a></li>
        </ul>
      </li>
      <li><a href="<?php echo U('category/cateList'); ?>"><i class="fa fa-bars"></i>栏目管理</a></li>
      <!--<li><a href="<?php echo U('category/cateList'); ?>"><i class="fa fa-file"></i>文件管理</a></li>-->
      <li>
        <a href="javascript:;"><i class="fa fa-book"></i>管理员</a>
        <ul class="sub-menu">
          <li><a href="<?php echo U('user/user_list'); ?>">管理员列表</a></li>
          <li><a href="<?php echo U('user/add'); ?>">添加管理员</a></li>
        </ul>
      </li>
      <li><a href="<?php echo U('site/edit'); ?>"><i class="fa fa-gear"></i>网站设置</a></li>
      <li><a href="<?php echo U('user/edit', null, ''); ?>/id/<?php echo($current_user["id"]); ?>"><i
            class="fa fa-bars"></i>账号设置</a></li>
      <li><a href="<?php echo U('guestBook/guestBook'); ?>"><i class="fa fa-envelope-o"></i>留言板</a></li>
    </ul>
  </div>
  <div class="main add-user">
    <div class="title"><strong>编辑管理员</strong>
    </div>
    <div class="content">
      <form id="form" class="form-horizontal" role="form" action="<?php echo U('edit_post'); ?>" method="post">
        <div class="form-group">
          <input name='id' type="hidden" value="<?php echo($user["id"]); ?>"/>
          <input id="cur_name" type="hidden" value="<?php echo($user["name"]); ?>"/>
          <label class="col-md-2 control-label"><span class="star">*</span>用户名：</label>

          <div class="col-md-4">
            <input id="user_name" name="user_name" type="text" class="required form-control "
                   title="Please input a username" value="<?php echo($user["name"]); ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">邮箱：</label>

          <div class="col-md-4">
            <input type="email" name="email" class="form-control" value="<?php echo($user["email"]); ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-primary" value="保存">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="footer">power by Phlen 2014-08-03 ：2014-08-17</div>
</body>
<script src="/Test/ohana-php/Public/js/lib/jquery-1.11.0.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.validate.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.md5.js"></script>
<script src="/Test/ohana-php/Public/js/lib/bootstrap.js"></script>
<script src="/Test/ohana-php/Public/js/config.js"></script>
<script src="/Test/ohana-php/Public/js/common.js"></script>
<script src="/Test/ohana-php/Public/js/add_user.js"></script>
</html>