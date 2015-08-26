<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title><?php echo ($meta_title); ?> - 喵小黑</title>
    <!-- Bootstrap core CSS -->
    <link href="/xiaohei/xiaohei/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="/xiaohei/xiaohei/Public/static/common.css">
        
    <!-- <script src="/xiaohei/xiaohei/Public/static/assets/js/chart-master/Chart.js"></script> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .navbar{
            border-bottom: 1px solid #ddd;
        }
        .navbar a{
            color:darkgreen;
        }
    </style>
</head>

<body>

<nav class="navbar ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar">〓</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">VR</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页 <span class="badge">42</span><span class="sr-only">(##)</span></a></li>
                <li><a href="#">讨论</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">反馈</a></li>
                        <!--<li role="separator" class="divider"></li>
                        <li><a href="#">反馈</a></li>-->
                    </ul>
                </li>
            </ul>
            <!--<form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn " href="">登录〓✚☰✖✚</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<!-- 身体 -->

    <h1>新闻发布器</h1>
    <script id="editor" type="text/plain" name="content" style="width:1024px;height:500px;"></script>

<div class="footer">
    <footer class="">小黑科技™</footer>
</div>
<!-- JS -->
<script src="/xiaohei/xiaohei/Public/static/jquery/jquery-1.11.3.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/common.js"></script>




    <script type="text/javascript" src="/xiaohei/xiaohei/Public/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/xiaohei/xiaohei/Public/static/ueditor/ueditor.all.min.js"></script>
<script>
$(function(){
    var ue = UE.getEditor('editor',{serverUrl :'<?php echo U('Admin/Editor/ueditor');?>'});
});
</script>

</body>
</html>