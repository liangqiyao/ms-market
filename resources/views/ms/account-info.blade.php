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
            <div class="layui-collapse" lay-accordion="">
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">装备</h2>
                    <div class="layui-colla-content">
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
                                <tr>
                                <td>超贝</td>
                                <td>30</td>
                                <td>30%</td>
                                <td>22</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="layui-collapse" lay-accordion="">
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">怪卡</h2>
                    <div class="layui-colla-content">
                        <p>伟大的科学家</p>
                    </div>
                </div>
            </div>
            <div class="layui-collapse" lay-accordion="">
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">6转技能</h2>
                    <div class="layui-colla-content">
                        <p>伟大的科学家</p>
                    </div>
                </div>
            </div>

            <div class="layui-collapse" lay-accordion="">
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">暖暖</h2>
                    <div class="layui-colla-content">
                        <p>伟大的科学家</p>
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
    <col width="150">
    <col width="200">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>职业</th>
      <th>等级</th>
      <th>战力</th>
      <th>搬到</th>
      <th>描述</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
      <td>刀飞</td>
      <td>260</td>
      <td>60M</td>
      <td>NLW</td>
      <td>已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回</td>
    </tr>
    <tr>
      <td>刀飞</td>
      <td>260</td>
      <td>60M</td>
      <td>NLW</td>
      <td>已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回 已6转，9件22，AU齐，3BD+3大回</td>
    </tr> 
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
 

});
</script> 
</body>
</html>