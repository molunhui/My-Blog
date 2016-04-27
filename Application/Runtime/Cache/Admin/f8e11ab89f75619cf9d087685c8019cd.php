<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>网站设置</title>
  <link rel="stylesheet" href="/git/ohana-php/Public/css/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="/git/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css" />
<link rel="stylesheet" href="/git/ohana-php/Public/css/bootstrap/css/font-awesome.css" />
<link rel="stylesheet" href="/git/ohana-php/Public/css/uploadify.css" />
<link rel="stylesheet" href="/git/ohana-php/Public/css/reset.css" />
<link rel="stylesheet" href="/git/ohana-php/Public/css/utils.css" />
<link rel="stylesheet" href="/git/ohana-php/Public/css/common.css" />
<link rel="stylesheet" href="/git/ohana-php/Public/css/style.css" />

</head>

<body>

 <div class="header">
  <span class="logo">ohana</span>
  <div class="user" id="user-menu">
    <a href="jsvascript:;"><?php echo ($current_user["name"]); ?></a>
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
    <div class="main web">
      <div class="title"><strong>网站设置</strong>
      </div>
      <div class="content">
        <form class="form-horizontal" role="form" style="width: 365px;" action="<?php echo U(runEdit);?>" method="post">
          <div class="form-group">
            <label class="control-label col-md-4"><span class="star">*</span> 网站名称：</label>
            <div class="col-md-8">
              <input value="<?php echo ($site["name"]); ?>" class="form-control required" title="Please type a website name" type="text" name="name" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">网站 Logo：</label>
            <div class="col-md-8">
              <?php if(!empty($site['logo'])): ?><img id="logo_img" src="/git/ohana-php/Public/upload/img/<?php echo ($site["logo"]); ?>" alt="LOGO" /><?php endif; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4"></label>
            <div class="col-md-8">
              <input id="file1" type="file" />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4"></label>
            <div class="col-md-8">
              <input type="hidden" value="<?php echo ($site["id"]); ?>" name="id" />
              <input type="hidden" value="<?php echo ($site["logo"]); ?>" name="logo" />
              <input class="btn btn-primary" type="submit" value="保存" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<div class="footer">power by Phlen 2014-08-03 ：2014-08-17</div>
</body>
<script src="/git/ohana-php/Public/js/lib/jquery-1.11.0.js"></script>
<script src="/git/ohana-php/Public/js/lib/jquery.validate.js"></script>
<script src="/git/ohana-php/Public/js/lib/jquery.md5.js"></script>
<script src="/git/ohana-php/Public/js/lib/bootstrap.js"></script>
<script src="/git/ohana-php/Public/js/config.js"></script>
<script src="/git/ohana-php/Public/js/common.js"></script>
<script src="/git/ohana-php/Public/js/lib/uploadify/jquery.uploadify.js"></script>
<script>
  $(function() {
    $("#file1").uploadify({
      width: 80,
      height: 30,
      swf: '/git/ohana-php/Public/js/lib/uploadify/uploadify.swf',
      uploader: "<?php echo U('uploadLogo');?>",
      buttonText: "上传图片",
      onUploadSuccess: function(file, data, respone) {
        var jsonData = JSON.parse(data);
        if(jsonData.status === 'ok') {
          $("input[name=logo]").val(jsonData.data);
          $("#logo_img").attr('src', '/git/ohana-php/Public/upload/img/' + jsonData.data);
        } else {
          alert('上传失败!');
        }
      }
    });
  });
</script>
</html>