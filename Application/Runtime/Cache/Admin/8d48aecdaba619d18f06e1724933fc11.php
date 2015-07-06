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
  <title>留言板</title>
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
    <li><a href="<?php echo U('guestBook/guestBook');?>"><i class="fa fa-envelope-o"></i>留言板</a></li>
  </ul>
</div>
  <div class="main guestBook">
    <p class="style1">留言板</p>
    <p class="style2">主人寄语</p>
    <div class="authorInfo">
      <p>欢迎留言！</p>
    </div>
    <div class="box">
      <p class="list-title">留言列表</p>
      <ul class="list">
        <li>
          <div class="box-guestBook">
            <img src="/Test/ohana-php/Public/Home-images/guest.jpg" width="50px" height="50px">
            <div class="header-guestBook">
              <p>莫俊文</p>
            </div>
            <div class="cont-guestBook">
              <div class="info">
                <p>shkadjsakjdlaskjdlaskdlsaa</p>
              </div>
            </div>
            <div class="footer-guestBook">
              <p class="post_time">2015-01-09</p><a href="javascript:;" class="answer" data-role="answer">回复</a>
            </div>

            <form role="form" id="form" action="" method="post">
              <div class="replay" id="replay">
                <textarea data-role="editor_id" name="replay" style="width:600px;height:200px;">
                  <?php echo ($article["replay"]); ?>
                </textarea>
              </div>
              <input type="submit" class="submit" value="提交">
            </form>
          </div>
          <ul class="child-list">
            <li>
              <div class="box-guestBook">
                <img src="/Test/ohana-php/Public/Home-images/guest.jpg" width="50px" height="50px">
                <div class="header-guestBook">
                  <p>莫俊文</p>
                </div>
                <div class="cont-guestBook">
                  <div class="info">
                    <p>shkadjsakjdlaskjdlaskdlsaa</p>
                  </div>
                </div>
                <!-- <div class="footer-guestBook">-->
                <p class="time">2015-01-09</p>
                <!--</div>-->
              </div>
            </li>
          </ul>
        </li>
       <!-- <li></li>
        <li></li>-->
      </ul>
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
<script charset="utf-8" src="/Test/ohana-php/Public/editor/kindeditor.js"></script>
<script charset="utf-8" src="/Test/ohana-php/Public/editor/lang/zh_CN.js"></script>
<script src="/Test/ohana-php/Public/js/replay.js"></script>
<script>
  KindEditor.ready(function(K) {
    var editor = K.create('textarea[name="replay"]');
  });
</script>
</html>