<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/test/ohana-php/Public/editor/themes/default/default.css"/>
  <title>文章管理</title>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/bootstrap/css/font-awesome.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/uploadify.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/reset.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/utils.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/common.css"/>
  <link rel="stylesheet" href="/test/ohana-php/Public/css/style.css"/>
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
        <a href="<?php echo U('user/index'); ?>"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
      <li>
        <a href="javascript:;"><i class="fa fa-book"></i>文章管理</a>
        <ul class="sub-menu">
          <li><a href="<?php echo U('category/new_article'); ?>">新建文章</a>
          </li>
          <li><a href="all-article.html">文章管理</a>
          </li>
        </ul>
      </li>
      <li><a href="<?php echo U('category/cateList'); ?>"><i class="fa fa-bars"></i>栏目管理</a>
      </li>
      <li><a href="<?php echo U('category/cateList'); ?>"><i class="fa fa-file"></i>文件管理</a>
      </li>
      <li>
        <a href="javascript:;"><i class="fa fa-book"></i>管理员</a>
        <ul class="sub-menu">
          <li><a href="<?php echo U('user/user_list'); ?>">管理员列表</a>
          </li>
          <li><a href="<?php echo U('user/add'); ?>">添加管理员</a>
          </li>
        </ul>
      </li>
      <li><a href="website.html"><i class="fa fa-gear"></i>网站设置</a>
      </li>
      <li><a href="add.html"><i class="fa fa-bars"></i>账号设置</a>
      </li>
    </ul>
  </div>
  <div class="main new-article">
    <h3 class="title "><strong>新建文章</strong></h3>

    <div class="content">
      <form class="form-horizontal" role="form" action="<?php echo U('runAddCate'); ?>">
        <div class="form-group group1">
          <label class="col-md-2 control-label">文章标题:</label>

          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">栏目:</label>

          <div class="col-md-3">
            <select class=" form-control">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">文章正文:</label>

          <div class="col-md-6">
            <textarea id="editor_id" name="content" style="width:700px;height:300px;">

            </textarea>
          </div>
        </div>
        <div class="col-md-offset-2">
          <input type="submit" class="btn btn-primary" value="保存添加">
        </div>
      </form>
    </div>
  </div>
</div>
<script src="/test/ohana-php/Public/js/lib/jquery-1.11.0.js"></script>
<script src="/test/ohana-php/Public/js/lib/jquery.validate.js"></script>
<script src="/test/ohana-php/Public/js/lib/jquery.md5.js"></script>
<script src="/test/ohana-php/Public/js/lib/bootstrap.js"></script>
<script src="/test/ohana-php/Public/js/config.js"></script>
<script src="/test/ohana-php/Public/js/common.js"></script>
<script charset="utf-8" src="/test/ohana-php/Public/editor/kindeditor.js"></script>
<script charset="utf-8" src="/test/ohana-php/Public/editor/lang/zh_CN.js"></script>
<script>
  KindEditor.ready(function (K) {
    var editor = K.create('textarea[name="content"]');
  });
</script>
</body>

</html>