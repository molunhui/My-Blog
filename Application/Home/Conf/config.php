<?php
return array(
	//'配置项'=>'配置值'
  PUBLIC_PATH => '/test/ohana-php/Home/Public',

  URL_ROUTER_ON => true,

  URL_ROUTE_RULES => array(
    'index' =>'index/index',
    'article/:id\d' => 'Article/article',
    'article2/:name\S' => 'Article/getArticleByName',
    'article/list/:id\d/[:page\d]/[:page_size\d]' => 'Article/lists',
    'guestBook' => 'GuestBook/guestBook',
  ),

);