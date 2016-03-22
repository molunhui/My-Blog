<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css"/>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/login.css"/>
  <title>登陆</title>
</head>
<body>
  <div class="header">
    <div class="logo">Ohana</div>
  </div>
  <div class="container">
    <div class="main">
      <form class="form-horizontal" name="form" action="<?php echo U('user_login');?>" method="post" id="form">
        <div class="form-group">
          <label for="text" class="col-md-offset-2 col-md-2 control-label">用户名：</label>
          <div class="col-md-4">
            <input type="text" id="user_name" name="user_name" class="required form-control " title="Please input a username">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-offset-2 col-md-2 control-label">密码:</label>
          <div class="col-md-4">
            <input type="password" name="fake_password" class="form-control" id="fake_password">
            <input type="hidden" name="password" class="form-control" id="password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-10">
            <input type="submit" class="btn btn-primary" value="登陆">
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="/Test/ohana-php/Public/js/lib/jquery-1.11.0.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.validate.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.md5.js"></script>
<script src="/Test/ohana-php/Public/js/lib/bootstrap.js"></script>
<script src="/Test/ohana-php/Public/js/config.js"></script>
<script src="/Test/ohana-php/Public/js/common.js"></script>
  <script src="/Test/ohana-php/Public/js/login.js"></script>
</body>

</html>