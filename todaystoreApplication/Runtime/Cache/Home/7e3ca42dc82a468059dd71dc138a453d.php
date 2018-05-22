<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>今天水果商店</title>
  <link href="/today/todaystore/public/Home/css/bccss.css" type="text/css" rel="stylesheet"/>
  <script type="text/javascript" src="/today/todaystore/public/Home/js/jquery-3.2.1.min.js"></script>  
  <script type="text/javascript" src="/today/todaystore/public/Home/js/tdjs.js"></script>
   <script type="text/javascript" src="/today/todaystore/public/Home/js/vue.min.js"></script>
  <script type="text/javascript" src='/today/todaystore/public/Home/js/vue-resource.min.js'></script>
</head>
<body>
  <div id="back">
  <header class="bc_header">
    <nav class="bc_nav">
      <div class="bc_navleft">
        <a href="#">
          今日管理系统
        </a>
      </div>

      <div class="bc_navright">
        <a id="" href="sign.html">退出</a>
      </div>
    </nav>
  </header>
  <section class="section_center" id="">
    <nav class="left_map">
      <ul class="left_map_ul">
         <li ><a class="white" href="back_index.html">首页</a></li>
        <li><a class="white" href="back_person.html">用户管理</a></li>
        <li><a class="white" href="back_business.html">订单管理</a></li>
        <li><a class="white" href="back_goods.html">商品管理</a></li>
        <li class="selected_map_bc"><div class="selected_map"></div>反馈管理</li>
      </ul>
    </nav>
    <div>
        <div class="newscontent" v-for="(value,key) in searchData">
            <div class="info_li" >
            <label class="infofan_id" v-if="value.fankuistatu==0">状态：已处理</label>
            <label class="infofan_id" v-else>状态：未处理</label>
            <label class="infofan_id">{{value.clientname}}</label>
            <label class="infofan_id">{{value.clientphone}}</label>
            <a class="info_up" v-if="value.fankuistatu!=0">请及时处理这条反馈</a>
            <button class="finish_fan" v-on:click="finish_fankui(value.fankuiid)" v-if="value.fankuistatu!=0">更改为已处理</button>
          </div>
          <p class="info_li contents" >{{value.clientcontent}}</p>
         </div>
    

    </div>
  </section>
</div>
   <script type="text/javascript" src="/today/todaystore/public/Home/js/jiaohu_fan.js"></script>
</body>
</html>