<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/Test/ohana-php/Public/editor/themes/default/default.css"/>
  <title>文章管理</title>
  <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/font-awesome.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/uploadify.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/reset.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/utils.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/common.css" />
<link rel="stylesheet" href="/Test/ohana-php/Public/css/style.css" />
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
    <div class="main new-article">
      <h3 class="title "><strong>新建文章</strong></h3>

      <div class="content">
        <?php if(isset($article)): ?><form class="form-horizontal" role="form" action="<?php echo U('runEdit');?> " method="post">
            <input type="hidden" name="id" value="<?php echo ($article["id"]); ?>"/>
        <?php else: ?>
            <form class="form-horizontal" role="form" action="<?php echo U('runAdd');?> " method="post"><?php endif; ?>
          <div class="form-group group1">
            <label class="col-md-2 control-label">文章标题:</label>

            <div class="col-sm-6">
              <input type="text" class="form-control" name="title" value="<?php echo ($article["title"]); ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">栏目:</label>

            <div class="col-md-3">
              <select class="form-control" id="select" name="cid">
                <option value="0">请选择</option>
                <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if($article['cid'] == $data['id']): ?><option value="<?php echo ($data["id"]); ?>" selected> <?php echo ($data['html']); ?> <?php echo ($data['name']); ?> </option>
                  <?php else: ?>
                    <option value="<?php echo ($data["id"]); ?>"> <?php echo ($data['html']); ?> <?php echo ($data['name']); ?> </option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </div>
          </div>
        <div class="form-group">
          <label class="col-md-2 control-label">文章摘要:</label>

          <div class="col-md-6">
            <textarea data-role="editor_id" name="abstract" style="width:700px;height:300px;">
              <?php echo ($article["abstract"]); ?>
            </textarea>
          </div>
        </div>
          <div class="form-group">
            <label class="col-md-2 control-label">文章正文:</label>

            <div class="col-md-6">
              <textarea data-role="editor_id" name="content" style="width:700px;height:300px;">
                <?php echo ($article["content"]); ?>
              </textarea>
            </div>
          </div>
       <!-- <div class="form-group">
          <label class="control-label col-md-4">上传图片：</label>
          <div class="col-md-8">
            <?php if(!empty($site['logo'])): ?><img id="logo_img" src="/Test/ohana-php/Public/upload/img/<?php echo ($site["logo"]); ?>" alt="LOGO" /><?php endif; ?>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4"></label>
          <div class="col-md-8">
            <input id="file1" type="file" />
          </div>-->
        <!--</div>-->
          <div class="col-md-offset-2">
            <input type="submit" class="btn btn-primary" value="保存添加">
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
<script charset="utf-8" src="/Test/ohana-php/Public/editor/kindeditor.js"></script>
<script charset="utf-8" src="/Test/ohana-php/Public/editor/lang/zh_CN.js"></script>
<!--<script src="/Test/ohana-php/Public/js/lib/uploadify/jquery.uploadify.js"></script>
<script src="/Test/ohana-php/Public/js/upload.js"></script>-->
<script>
  KindEditor.ready(function(K) {
    var editor = K.create('textarea[name="abstract,content"]');
  });
</script>
</html>