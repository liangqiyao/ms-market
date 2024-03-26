@php

@endphp
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>账号明细</title>
  <link rel="stylesheet" href="./layui/css/layui.css" charset="utf-8">
  <link rel="stylesheet" href="./layui/css/global.css" charset="utf-8">
</head>
<body>

<div class="layui-container">
 
<div class="layui-row">
    <!-- 账号信息简介 -->
    <div class="layui-col-md12">
        <div class="fly-extend-list layui-card">
            <div class="fly-extend-list-header">
                <h2 class="fly-extend-title layui-elip">R1 男 阿黛尔  280  40t
                    <div class="layui-badge layui-bg-green layui-hide-xs">1888元</div>
                    <!-- 点击获取 -->
                    <div class="layui-badge layui-bg-blue layui-hide-xs">联系方式：QQ123456787</div>
                </h2>
            </div>
            <div>
                <div class="layui-badge layui-bg-red layui-hide-xs">漆黑7set</div>
                <div class="layui-badge layui-bg-red layui-hide-xs">全身22X</div>
                <div class="layui-badge layui-bg-red layui-hide-xs">怪卡95BD</div>
                <div class="layui-badge layui-bg-red layui-hide-xs">全身真三级以上</div>
                <div class="layui-badge layui-bg-red layui-hide-xs">4CD头</div>
                <div class="layui-badge layui-bg-red layui-hide-xs">有OG</div>
                <div class="layui-badge layui-bg-orange layui-hide-xs">无OG</div>
            </div>
        </div>
      </div>
    </div>


    <!-- 装备情况 -->

    <div class="layui-col-md12">
      <div class="layui-row grid-demo grid-demo-bg1">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
            <legend>主号信息</legend>
        </fieldset>
        
        <div class="layui-bg-gray" style="padding: 30px;">

<div class="layui-tab  layui-tab-brief">
<ul class="layui-tab-title">
<li class="layui-this">装备</li>
<li>怪卡</li>
<li>6转</li>
<li>暖暖</li>
</ul>
<div class="layui-tab-content">
<div class="layui-tab-item layui-show">
    <table class="layui-table" lay-skin="line">
    <colgroup>
        <col width="150">
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
        <tr>
            <th>名称</th>
            <th>星星</th>
            <th>潜能</th>
            <th>火花</th>
        </tr> 
    </thead>
    <tbody>
        @foreach($data['equip'] as $k=>$v)
        <tr>
            <td>{{$v['name']}}</td>
            <td>{{$v['star']}}</td>
            <td>{{$v['stat']}}%</td>
            <td>{{$v['blame']}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>    

</div>
<div class="layui-tab-item">
    <!--怪卡  bd => red     -->
    @foreach($data['guaika'] as $k=>$v)
    <span class="layui-badge layui-bg-red">{{$v}}</span>
    @endforeach
</div>
<div class="layui-tab-item">
    <!-- 6转 -->
    <table class="layui-table" lay-skin="line">
    <colgroup>
        <col width="150">
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
        <tr>
            <th>名称</th>
            <th>等级</th>
            <th>距离满级还差</th>
            <th>预计多少瓶</th>
        </tr> 
    </thead>
    <tbody>
        @foreach($data['hexa'] as $k=>$v)
        <tr>
            <td>{{$k}}</td>
            <td>{{$v}}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
    </table>    
</div>
<div class="layui-tab-item">
    <!-- 暖暖 -->
    <blockquote class="layui-elem-quote layui-quote-nm">

    {{$data['nuannuan']}}

    </blockquote>
</div>
</div>
</div>

      </div>
    </div>
    </div>
  <!-- 蛋号信息 -->
  
  <div class="layui-col-md12">
      <div class="layui-row grid-demo grid-demo-bg1">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
            <legend>蛋号信息</legend>
        </fieldset>
      </div>
      <div class="layui-bg-gray" style="padding: 30px;">  
<table class="layui-table" lay-skin="line">
  <colgroup>
    <col width="150">
    <col width="100">
    <col width="100">
    <col width="100">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>职业</th>
      <th>等级</th>
      <th>战力</th>
      <th>搬到<i class="layui-icon layui-icon-help" id='tips-bd'></i>  </th>
      <th>描述</th>
    </tr> 
  </thead>
  <tbody>
   @foreach($data['eggs'] as $k=>$v)
        <tr>
            <td>{{$v['job']}}</td>
            <td>{{$v['level']}}</td>
            <td>{{$v['power']}}M</td>
            <td>{{$v['fw']}}</td>
            <td>{{$v['desc']}}</td>
        </tr>
   @endforeach()
  </tbody>
</table>
      </div>

    </div>
          <!-- 留言 -->
  
  <div class="layui-col-md12">
    <div class="layui-row grid-demo grid-demo-bg1">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
            <legend>留言</legend>
        </fieldset>
    </div>


<script src="./layui/layui.js"></script>
<script>
layui.use(['layer', 'form', 'jquery'], function(){
    var form = layui.form
  ,$ = layui.jquery;
  $('#tips-bd').on('mouseenter', function(){
        var tipsText = '一个家族30分钟搬到哪';
        layer.tips(tipsText, this, {
            tipsMore: true
        });
  });

});
</script> 
</body>
</html>