<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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
            <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><tr class="row">
                <td class="col-md-4"><?php echo ($article["title"]); ?></td>
                <td class="col-md-2"><?php echo ($article["category"]); ?></td>
                <td class="col-md-2"><?php echo (date("Y-m-d H:i", $article["post_time"])); ?></td>
                <td class="col-md-4">
                  <a href="<?php echo U('edit', '', '');?>/id/<?php echo ($article["id"]); ?>">编辑</a>
                  <form action="<?php echo U('runDelete');?>" method="post">
                    <input type="hidden" value="<?php echo ($article["id"]); ?>" name="id"/>
                    <button type="submit">删除</button>
                  </form>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
        <div class="text-center">
          <ul class="pagination">
            <li>
              <?php if($page['page'] == 1): ?><span>上一页</span>
                <?php else: ?>
                <a href="<?php echo U('articleList', '', '');?>/page/<?php echo ($page['page'] - 1); ?>">上一页</a><?php endif; ?>
            </li>
            <?php $__FOR_START_27115__=1;$__FOR_END_27115__=$page['page_count'] + 1;for($i=$__FOR_START_27115__;$i < $__FOR_END_27115__;$i+=1){ ?><li>
                <?php if($i == $page['page']): ?><span><?php echo ($page["page"]); ?></span>
                  <?php else: ?>
                  <a href="<?php echo U('articleList', '', '');?>/page/<?php echo ($i); ?>"><?php echo ($i); ?></a><?php endif; ?>
              </li><?php } ?>
            <li>
              <?php if($page['page'] >= $page['page_count']): ?><span>下一页</span>
                <?php else: ?>
                <a href="<?php echo U('articleList', '', '');?>/page/<?php echo ($page['page'] + 1); ?>">下一页</a><?php endif; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<div class="footer">power by Phlen 2014-08-03 ：2014-08-17</div>
<script src="/Test/ohana-php/Public/js/lib/jquery-1.11.0.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.validate.js"></script>
<script src="/Test/ohana-php/Public/js/lib/jquery.md5.js"></script>
<script src="/Test/ohana-php/Public/js/lib/bootstrap.js"></script>
<script src="/Test/ohana-php/Public/js/config.js"></script>
<script src="/Test/ohana-php/Public/js/common.js"></script>
</body>

</html>