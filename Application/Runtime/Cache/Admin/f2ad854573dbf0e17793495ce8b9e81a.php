<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>账号设置</title>
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
    <div class="main add-user">
      <div class="title"><strong>添加管理员</strong>
      </div>
      <div class="content">
        <form class="form-horizontal" role="form" action="<?php echo U('insert');?>" method="post" id="signup">
          <div class="form-group">
            <label  class="col-md-2 control-label"><span class="star">*</span>用户名：</label>
            <div class="col-md-4">
              <input type="text" name="user_name" class="required form-control " title="Please input a username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label"><span class="star">*</span>密码:</label>
            <div class="col-md-4">
              <input type="password" name="fake_password" class="form-control" id="fake_password">
              <input type="hidden" name="password" class="form-control" id="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label"><span class="star">*</span>确认密码:</label>
            <div class="col-md-4">
              <input type="password" name="confirm_password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">邮箱：</label>
            <div class="col-md-4">
              <input type="email" name="email" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" value="添加">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>