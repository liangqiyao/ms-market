@php

    $args = $page_info;
    unset($args['total']);
@endphp
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>账号展示</title>
  <link rel="stylesheet" href="./layui/css/layui.css" charset="utf-8">
  <link rel="stylesheet" href="./layui/css/global.css" charset="utf-8">
</head>
<body>
<div class="layui-header header header-extends" style="background-color: #24262F;">
    <div class="layui-container">
        <div class="layui-form component" lay-filter="LAY-site-header-component"></div>
        <ul class="layui-nav">
            <li class="layui-nav-item layui-hide-xs"><a href="/login">登陆</a></li>
            <li class="layui-nav-item layui-hide-xs"><a href="/register">注册</a></li>
        <span class="layui-nav-bar" style="left: 63px; width: 0px; opacity: 0; top: 42px;"></span></ul>
    </div>
</div>
<div class="fly-extend-banner">

    <h1 class="fly-extend-banner-title">账号信息查询平台</h1>
    <form action="#" class="fly-extend-banner-search">
        <div class="layui-inline"><input placeholder="搜索角色" name="keywords" autocomplete="off" value="{{$args['keywords']}}" class="layui-input"></div>
        
        <button class="layui-btn"><i class="layui-icon layui-icon-search"></i></button>
    </form>

</div>

<div class="layui-container">
    <div class="layui-tab layui-tab-brief fly-extend-tabs">
        <ul class="layui-tab-title">

            @php 
                $type = $args['type'];
                $args['type']=1;
            @endphp
            @if( $type == 1)
            <li  class="layui-this" >
            @else
            <li >
            @endif
                <a href="?{{http_build_query($args)}}">按最新</a>
            </li>
            @php 
                $args['type']=2;
            @endphp
            @if( $type == 2)
            <li  class="layui-this" >
            @else
            <li >
            @endif
                <a href="?{{http_build_query($args)}}">按人气</a>
            </li>

            @php 
                $args['type']=$type;
            @endphp
        </ul>
    </div>
    <ul class="layui-row layui-col-space30">
        @foreach($data as $row)
        <li class="layui-col-sm12 layui-col-md12">
            <div class="fly-extend-list layui-card">
                <div class="fly-extend-list-header">
                    <h2 class="fly-extend-title layui-elip"><a href="#">R1 280 阿黛尔</a>
                        <div class="layui-badge layui-bg-green layui-hide-xs"> 1w5</div>
                    </h2>
                </div>
                <a href="#" target="_blank">
                    <div class="fly-extend-list-desc">
                    <p> 60k ror4 7set  5解</p>
                    </div>
                </a>
            </div>
        </li>


        @endforeach()
    </ul>
    @php
       $total_page = $page_info['total_page'];  
       $curr_page = $page_info['curr_page'];//当前页数 6
       $t_page = intval(($curr_page-1)/5);
    @endphp
    <div style="padding: 30px 0;">
        <div style="text-align: center;">
            <div class="laypage-main">
                @php 
                    $args['page']=$curr_page-1;
                @endphp
                <a href="?{{http_build_query($args)}}" class="laypage-prev">上一页</a>
                
                @for($i=1;$i<=5;$i++)
                    @if($t_page*5 + $i == $curr_page)
                        <span class="laypage-curr">{{$t_page*5 + $i}}</span>
                    @else
                        @php 
                            $args['page']=$t_page*5 + $i;
                        @endphp
                        @if($args['page'] <= $total_page)
                            <a href="?{{http_build_query($args)}}">{{$args['page']}}</a>
                        @endif

                    @endif

                @endfor
                
                
    
                <span>…</span>
                @php 
                    $args['page']=$total_page;
                @endphp
                <a href="?{{http_build_query($args)}}" class="laypage-last" title="尾页">尾页</a>
                @php 
                    $args['page']=$curr_page+1;
                @endphp
                <a href="?{{http_build_query($args)}}" class="laypage-next">下一页</a></div>
        </div>
    </div>
</div>

<script src="./layui/layui.js"></script>
<script>
layui.use(['layer', 'form', 'jquery'], function(){
  var layer = layui.layer
  ,form = layui.form;

});
</script> 
</body>
</html>