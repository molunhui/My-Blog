<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo($title["name"]); ?></title>
  <link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/reset.css">
  <link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/common.css">
  <link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/style.css">
  <link rel="stylesheet" href="/Test/ohana-php/Public/Home-css/article.css">
  <!-- <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="/Test/ohana-php/Public/css/bootstrap/css/bootstrap-theme.css" />-->
</head>
<body>
<div class="header">
  <h1><a href="javascript:;">江南烟雨陌上客</a></h1>
  <a href="javascript" class="word">去留无意，看庭前花开花落；宠辱不惊，望天上云卷云舒.....</a>
</div>
<div class="nav-swf">
  <object id="customMenu" data="/Test/ohana-php/Public/Home-images/nav.swf" width="528" height="70"
          type="application/x-shockwave-flash">
    <param name="allowScriptAccess" value="always">
    <param name="allownetworking" value="all">
    <param name="allowFullScreen" value="true">
    <param name="wmode" value="transparent">
    <param name="menu" value="false">
    <param name="scale" value="noScale">
    <param name="salign" value="1">
  </object>
  <div class="nav" id="nav">
    <ul>
      <li><a href="<?php echo U('index/index'); ?>">首页</a></li>
      <?php if (is_array($navigation)): $i = 0;
        $__LIST__ = $navigation;
        if (count($__LIST__) == 0) : echo "";
        else: foreach ($__LIST__ as $key => $nav): $mod = ($i % 2);
          ++$i;
          if ($nav["pid"] == 0): ?>
            <li>
            <a
              href="<?php echo U('articleList/articleList', array(), ''); ?>/id/<?php echo($nav["id"]); ?>"><?php echo($nav["name"]); ?></a>
            </li><?php endif; endforeach; endif;
      else: echo "";endif; ?>
      <li><a href="<?php echo U('guestBook/guestBook'); ?>" title="留言版">留言版</a></li>
    </ul>
  </div>
</div>
<div class="container">
  <div class="main" id="main">
    <?php if (is_array($articleList)): $i = 0;
      $__LIST__ = $articleList;
      if (count($__LIST__) == 0) : echo "";
      else: foreach ($__LIST__ as $key => $list): $mod = ($i % 2);
        ++$i; ?>
        <div class="articleStyle">
        <p class="post_time">发布于：<?php echo(date("Y-m-d H:i", $list["post_time"])); ?></p>

        <h2><a href="<?php echo U('article/article', array(), ''); ?>/id/<?php echo($list["id"]); ?>"
               title="点击阅读全文"><?php echo($list["title"]); ?></a></h2>

        <p><?php echo($list["abstract"]); ?></p>
        <!--<figure><img src="/Test/ohana-php/Public/Home-images/shi.jpg" width="450px" height="300px"></figure>-->
        <p class="article-more-link">
          <a href="<?php echo U('article/article', array(), ''); ?>/id/<?php echo($list["id"]); ?>">阅读全文</a>
        </p>
        </div><?php endforeach; endif;
    else: echo "";endif; ?>

    <div class="text-center">
      <ul class="pagination">
        <li>
          <?php if ($page['page'] == 1): ?><span>上一页</span>
          <?php else: ?>
          <a
            href="<?php echo U('articleList', '', ''); ?>/page/<?php echo($page['page'] - 1); ?>/id/<?php echo($list["cid"]); ?>">
              上一页</a><?php endif; ?>
        </li>
        <?php $__FOR_START_27085__ = 1;
        $__FOR_END_27085__ = $page['page_count'] + 1;
        for ($i = $__FOR_START_27085__; $i < $__FOR_END_27085__; $i += 1) { ?>
          <li>
          <?php if ($i == $page['page']): ?><span><?php echo($page["page"]); ?></span>
          <?php else: ?>
            <a
            href="<?php echo U('articleList', '', ''); ?>/page/<?php echo($i); ?>/id/<?php echo($list["cid"]); ?>"><?php echo($i); ?></a><?php endif; ?>
          </li><?php } ?>
        <li>
          <?php if ($page['page'] >= $page['page_count']): ?><span>下一页</span>
          <?php else: ?>
          <a
            href="<?php echo U('articleList', '', ''); ?>/page/<?php echo($page['page'] + 1); ?>/id/<?php echo($list["cid"]); ?>">
              下一页</a><?php endif; ?>
        </li>
      </ul>
    </div>

  </div>
  <div class="sidebar" id="sidebar">
    <div class="frame">
      <h2 class="h2"><p>个人档案</p></h2>
      <div class="personal-file">
        <figure><img src="/Test/ohana-php/Public/Home-images/me.png" width="200px" height="150px"></figure>
        <p>姓名：莫伦辉</p>

        <p>网名：莫俊文</p>

        <p>主页：<a href="index.html">www.Allen.com</a></p>

        <p>现居：肇庆市-肇庆学院</p>

        <p>职业：学生</p>

        <p>爱好：足球、动漫</p>
      </div>
    </div>

    <div class="frame">
      <h2 class="h2"><p>博客分类</p></h2>
      <ul class="list list-s1" data-role="accordion">
        <?php if (is_array($navigation)): foreach ($navigation as $k => $nav): ?>
          <li>
          <i class="arrow_carrot-2right" data-role="click-it"></i><a
            href="<?php echo U('articleList/articleList', array(''), ''); ?>/id/<?php echo($nav["id"]); ?>"><?php echo($nav["name"]); ?>
            (<?php echo(count($nav['children:'])) ?>)</a>
          <ul class="child-list">
            <?php $__FOR_START_4964__ = 0;
            $__FOR_END_4964__ = count($nav['children:']);
            for ($i = $__FOR_START_4964__; $i < $__FOR_END_4964__; $i += 1) { ?>
              <li><a
                href="<?php echo U('articleList/articleList', array(), ''); ?>/id/<?php echo($nav['children:'][$i]['id']); ?>"><?php echo($nav['children:'][$i]['name']); ?>
                (<?php echo(count($nav['children:'][$i]['children:'])) ?>)</a> </li><?php } ?>
          </ul>
          </li><?php endforeach; endif; ?>
      </ul>
    </div>

    <div class="frame">
      <h2 class="h2"><p>近期文章</p></h2>
      <ul class="list list-s2">
        <?php if (is_array($lastArticle)): $i = 0;
          $__LIST__ = $lastArticle;
          if (count($__LIST__) == 0) : echo "";
          else: foreach ($__LIST__ as $key => $art): $mod = ($i % 2);
            ++$i; ?>
            <li><a
              href="<?php echo U('article/article', array(), ''); ?>/id/<?php echo($art["id"]); ?>"><?php echo($art["title"]); ?></a>
            </li><?php endforeach; endif;
        else: echo "";endif; ?>
      </ul>
    </div>

    <div class="frame">
      <h2 class="h2"><p>友情链接</p></h2>
      <ul class="list list-s2">
        <li><a href="http://weibo.com/u/2853059680/home?wvr=5&sudaref=www.hao123.com" target="_blank">我的微博</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="footer"><p>design by Allen 2014-12-30</p></div>
</body>
<script src="/Test/ohana-php/Public/Home-js/jquery-1.11.0.js"></script>
<script src="/Test/ohana-php/Public/Home-js/lte-ie7.js"></script>
<script src="/Test/ohana-php/Public/Home-js/base.js"></script>
</html>