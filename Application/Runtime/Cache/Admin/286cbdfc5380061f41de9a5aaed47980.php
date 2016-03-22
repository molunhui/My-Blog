<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>栏目管理</title>
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
    <div class="main category">
      <div class="title"><strong>栏目管理</strong>
      </div>
      <div class="content">
        <form class="form-inline" role="form" action="<?php echo U('runAddCate');?>" method="post">
          <div class="form-group">
          <label for="name" class="control-label">栏目名称:</label>
          <input type="hidden" name="id" value="<?php echo ($category["id"]); ?>">
          <input type="text" id="name" name="name" class="form-control" value="<?php echo ($category["name"]); ?>">
        </div>
         <!-- <div class="form-group">
            <label for="name" class="control-label">链接地址:</label>
            <input type="text" id="link" name="link" class="form-control" value="<?php echo ($category["link"]); ?>">
          </div>-->
          <div class="form-group">
            <label for="select" class="control-label">父栏目:</label>
            <select class="form-control" id="select" name="pid">
              <option value="0">请选择</option>
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if($category['pid'] == $data['id']): ?><option value="<?php echo ($data["id"]); ?>" selected> <?php echo ($data['html']); ?> <?php echo ($data['name']); ?> </option>
                <?php elseif($category['id'] != $data['id']): ?>
                  <option value="<?php echo ($data["id"]); ?>"> <?php echo ($data['html']); ?> <?php echo ($data['name']); ?> </option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="select" class="control-label">排序ID:</label>
            <input type="text" id="sort_id" name="sort_id" class="form-control sort-id" value="<?php echo ($category["sort_id"]); ?>">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="添加栏目">
          </div>
        </form>
        <div class="table">
          <ul class="table-list">
            <li class="row">
              <div class="col-md-5">名称</div>
              <div class="col-md-1">排序id</div>
              <div class="col-md-2">文章数</div>
              <div class="col-md-4">操作</div>
            </li>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="row">
                <div class="col-md-5"><a href="javascript:;"><?php echo ($vo['html']); ?> <?php echo ($vo["name"]); ?></a>
                </div>
                <div class="col-md-1"><?php echo ($vo["sort_id"]); ?></div>
                <div class="col-md-2">100</div>
                <div class="col-md-4 ">
                  <a href="<?php echo U('cateList', array(), '');?>/id/<?php echo ($vo["id"]); ?>"> 编辑</a>
                  <a href="javascript:;" data-id="<?php echo ($vo["id"]); ?>" class="del">删除</a>
                </div>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>

        </div>
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
<script src="/Test/ohana-php/Public/js/del_cate.js"></script>
</html>