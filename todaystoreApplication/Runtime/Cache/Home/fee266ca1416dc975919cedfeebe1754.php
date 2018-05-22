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
        <li class="selected_map_bc"><div class="selected_map"></div>用户管理</li>
        <li><a class="white" href="back_business.html">订单管理</a></li>
        <li><a class="white" href="back_goods.html">商品管理</a></li>
        <li><a class="white" href="back_fankui.html">反馈管理</a></li>
      </ul>
    </nav>
    <div class="right_goods">
        <div class="newscontent">
          <input type="" name="" class="search_inp" v-model="listdata">
          <span class="search_btn">搜索</span>
        </div>
        <div id="toggle_new" class="newscontent add_new"><a id="toggle_add"><img class="add_new_img" src="/today/todaystore/public/Home/images/back_add.png"><span class="add_new_span">添加新用户</span></a>
          <div class="addme_div hidden">
            <input type="text" class="addme" name="" v-model="clientname">
            <input type="text" class="addme" name="" v-model="clientphone">
            <input type="text" class="addme" name="" v-model="clientpassword">
            <select class="addme" v-model="clientplace">
          <option value="" disabled="disabled" selected>省份</option> 
          <option value="北京市">北京市</option>
          <option value="天津市">天津市</option>
          <option value="河北省">河北省</option>
          <option value="山西省">山西省</option>
          <option value="内蒙古自治区">内蒙古自治区</option>
          <option value="辽宁省">辽宁省</option>
          <option value="吉林省">吉林省</option>
          <option value="黑龙江省">黑龙江省</option>
          <option value="上海市">上海市</option>
          <option value="江苏省">江苏省</option>
          <option value="浙江省">浙江省</option>
          <option value="安徽省">安徽省</option>
          <option value="福建省">福建省</option>
          <option value="江西省">江西省</option>
          <option value="山东省">山东省</option>
          <option value="河南省">河南省</option>
          <option value="湖北省">湖北省</option>
          <option value="湖南省">湖南省</option>
          <option value="广东省">广东省</option>
          <option value="广西壮族自治区">广西壮族自治区</option>
          <option value="海南省">海南省</option>
          <option value="重庆市">重庆市</option>
          <option value="四川省">四川省</option>
          <option value="贵州省">贵州省</option>
          <option value="云南省">云南省</option>
          <option value="西藏自治区">西藏自治区</option>
          <option value="陕西省">陕西省</option>
          <option value="甘肃省">甘肃省</option>
          <option value="青海省">青海省</option>
          <option value="宁夏回族自治区">宁夏回族自治区</option>
          <option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
          <option value="其他">其他</option>
        </select>
            <input type="submit" class="sub_new" name="" v-on:click="sub_newclient">
          </div>
        </div>
        <div class="newscontent" v-for="(value,key) in searchData" :id="'client'+key">
            <div class="info_li">
            <span class="info_id">编号：{{value.clientid}}</span>
            <input class="info_id" type="text" name="" :value="value.clientname">
            <input class="info_id" type="text" name="" :value="value.clientphone">
            <input class="info_id" type="text" name="" :value="value.clientplace">
            <a class="info_up" v-on:click="save_client(key,value.clientid)"><img class="update_btn" src="/today/todaystore/public/Home/images/edit.png"></a>
            <a v-on:click="del_client(value.clientid)"><img class="update_btn" src="/today/todaystore/public/Home/images/delete.png"></a>
          </div>
         </div>
      </div>
 
  </section>
</div>
   <script type="text/javascript" src="/today/todaystore/public/Home/js/jiaohu_ren.js"></script>
</body>
</html>