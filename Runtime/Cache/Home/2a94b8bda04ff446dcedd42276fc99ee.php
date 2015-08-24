<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title><<?php echo ($meta_title); ?>> - 喵小黑</title>
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
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">VR</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
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
                <li><a class="btn " href="">登录</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--轮播-->

<!--/轮播-->
<!-- 身体 -->

    <!-- 主体 -->
    <!--<table class="table table-striped" >
        <thead>
        <tr>
            <th >系统信息</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                <td class="text"><?php echo ($key); ?>：</td>
                <td class="input"><?php echo ($v); ?></td>
            </tr>
            <tr>
                <td class="text"><?php echo ($key); ?>：</td>
                <td class="input"><?php echo ($v); ?></td>
            </tr>
            <tr>
                <td class="text"><?php echo ($key); ?>：</td>
                <td class="input"><?php echo ($v); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>-->
    此处应该是一些高大上的东西.

<div class="footer">
    <footer class="">小黑科技™</footer>
</div>
<!-- JS -->
<script src="/xiaohei/xiaohei/Public/static/jquery/jquery-1.11.3.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/common.js"></script>


</body>
</html>