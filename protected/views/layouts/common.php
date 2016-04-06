<!DOCTYPE html>
<?php $config = Config::model()->find(); ?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="dns-prefetch" href="//res.wx.qq.com">
    <link rel="dns-prefetch" href="//mmbiz.qpic.cn">
    <link rel="shortcut icon" type="image/x-icon" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/favicon22c41b.ico">
    <title>
      <?php echo $this->title;?>
    </title>
    <link rel="stylesheet" type="text/css" href="/assets/css/page_mp_article_improve2c9cd6.css">
    <style>
    </style>
    <!--[if lt IE 9]>
      <link rel="stylesheet" type="text/css" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/page_mp_article_improve_pc2c9cd6.css">
    <![endif]-->
  </head>
  
  <body id="activity-detail" class="zh_CN mm_appmsg" ontouchstart="">
    <div id="js_article" class="rich_media">
      <div id="js_top_ad_area" class="top_banner">
      </div>
      <div class="rich_media_inner">
        <div id="page-content">
          <div id="img-content" class="rich_media_area_primary">
            <h2 class="rich_media_title" id="activity-name">
              <?php 
                if($this->title)
                  echo $this->title;
                else 
                  echo '当前页面不存在...'
              ?>
            </h2>
            <div class="rich_media_meta_list">
              <em id="post-date" class="rich_media_meta rich_media_meta_text">
                <?php echo $this->addtime;?>
              </em>
              <a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname"
              href="javascript:void(0);" id="post-user">
                <?php echo $config->title;?>
              </a>
            </div>
            <div class="rich_media_content " id="js_content">
              <?php echo $content;?>
            </div>
            <link rel="stylesheet" type="text/css" href="/assets/css/page_mp_article_improve_combo2c9cd6.css">
          </div>
          <div class="rich_media_area_primary sougou" id="sg_tj" style="display:none">
          </div>
          <div class="rich_media_area_extra">
            <div class="mpda_bottom_container" id="js_bottom_ad_area">
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>