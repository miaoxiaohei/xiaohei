<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
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

<!--轮播-->
<!-- To move inline styles to css file/block, please specify a class name for each element. -->
<div id="slider1_container" style="position: relative; top: 0px;  MARGIN-RIGHT: auto; MARGIN-LEFT: auto; width: 960px;height: 480px; background: #191919; overflow: hidden;">

    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
        <div style="position: absolute; display: block; background: url(/xiaohei/xiaohei/Public/static/slider/images/loading.gif) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
    </div>

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 180px; top: 0px; width: 800px; height: 480px; overflow: hidden;">
        <div>
            <img u="image" src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg" />
            <img u="thumb" src="/xiaohei/xiaohei/Public/static/slider/images/thumb-01.jpg" />
        </div>        <div>
            <img u="image" src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg" />
            <img u="thumb" src="/xiaohei/xiaohei/Public/static/slider/images/thumb-01.jpg" />
        </div>        <div>
            <img u="image" src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg" />
            <img u="thumb" src="/xiaohei/xiaohei/Public/static/slider/images/thumb-01.jpg" />
        </div>        <div>
            <img u="image" src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg" />
            <img u="thumb" src="/xiaohei/xiaohei/Public/static/slider/images/thumb-01.jpg" />
        </div>        <div>
            <img u="image" src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg" />
            <img u="thumb" src="/xiaohei/xiaohei/Public/static/slider/images/thumb-01.jpg" />
        </div>        <div>
            <img u="image" src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg" />
            <img u="thumb" src="/xiaohei/xiaohei/Public/static/slider/images/thumb-01.jpg" />
        </div>

    </div>

    <!--#region Arrow Navigator Skin Begin -->
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url(/xiaohei/xiaohei/Public/static/slider/images/a17.png) no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
    </style>
    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 158px; left: 248px;">
        </span>
    <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
        </span>
    <!--#endregion Arrow Navigator Skin End -->
    <!--#region Thumbnail Navigator Skin Begin -->
    <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->

    <style>
        /* jssor slider thumbnail navigator skin 02 css */
        /*
        .jssort02 .p            (normal)
        .jssort02 .p:hover      (normal mouseover)
        .jssort02 .p.pav        (active)
        .jssort02 .p.pdn        (mousedown)
        */

        .jssort02 {
            position: absolute;
            /* size of thumbnail navigator container */
            width: 180px;
            height: 480px;
        }

        .jssort02 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 160px;
            height: 100px;
        }

        .jssort02 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .jssort02 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }

        .jssort02 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 156px;
            height: 98px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url(/xiaohei/xiaohei/Public/static/slider/images/t01.png) -800px -800px no-repeat;
            _background: none;
        }

        .jssort02 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 156px;
            height: 98px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }

        .jssort02 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 156px;
            height: 98px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }

        .jssort02 .p.pdn .c {
            background-position: 50% 50%;
            width: 156px;
            height: 98px;
            border: #000 2px solid;
        }

        * html .jssort02 .c, * html .jssort02 .pdn .c, * html .jssort02 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 156px;
            height /**/: 98px;
        }
    </style>

    <!-- thumbnail navigator container -->
    <div u="thumbnavigator" class="jssort02" style="left: 0px; bottom: 0px;">
        <!-- Thumbnail Item Skin Begin -->
        <div u="slides" style="cursor: default;">
            <div u="prototype" class="p">
                <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                <div class=c></div>
            </div>
        </div>
        <!-- Thumbnail Item Skin End -->
    </div>
    </div>
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
                <td class="text">{$key}：</td>
                <td class="input">{$v}</td>
            </tr>
            <tr>
                <td class="text">{$key}：</td>
                <td class="input">{$v}</td>
            </tr>
            <tr>
                <td class="text">{$key}：</td>
                <td class="input">{$v}</td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>-->
<!--<div class="row">
    <div class="col-xs-6 col-md-3">-->
        <div class="jumbotron">
            <div class="container">
                <h2>VR周边网站即将上线!<span class="label label-success label">New</span></h2>
                <p style="color:#666">2015-5-10 12:23:20</p>
                <p><img src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg"></p>
                <p>　　VR（Virtual Reality，即虚拟现实，简称VR），是由美国VPL公司创建人拉尼尔（Jaron Lanier）在20世纪80年代初提出的。
                其具体内涵是：综合利用计算机图形系统和各种现实及控制等接口设备，在计算机上生成的、可交互的三维环境中提供沉浸感觉的技术。
                其中，计算机生成的、可交互的三维环境成为虚拟环境（即Virtual Environment，简称VE）。
                虚拟现实技术实现的载体是虚拟现实仿真平台，即（Virtual Reality Platform，简称VRP）。</p>
                <p><a class="btn btn-success" href="#" role="button">阅读更多..</a></p>
            </div>
        </div>

    <div class="jumbotron">
        <div class="container">
            <h2>VR周边网站即将上线!</h2>
            <p style="color:#666">2015-5-10 12:23:20</p>
            <p><img src="/xiaohei/xiaohei/Public/static/slider/images/01.jpg"></p>
            <p>　　VR（Virtual Reality，即虚拟现实，简称VR），是由美国VPL公司创建人拉尼尔（Jaron Lanier）在20世纪80年代初提出的。
                其具体内涵是：综合利用计算机图形系统和各种现实及控制等接口设备，在计算机上生成的、可交互的三维环境中提供沉浸感觉的技术。
                其中，计算机生成的、可交互的三维环境成为虚拟环境（即Virtual Environment，简称VE）。
                虚拟现实技术实现的载体是虚拟现实仿真平台，即（Virtual Reality Platform，简称VRP）。</p>
            <p><a class="btn btn-success" href="#" role="button">阅读更多..</a></p>
        </div>
    </div>
<!--    </div>
</div>-->


<div class="footer">
    <footer class="">小黑科技™</footer>
</div>
<!-- JS -->
<script src="/xiaohei/xiaohei/Public/static/jquery/jquery-1.11.3.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/common.js"></script>
<!-- 轮播 -->
<script src="/xiaohei/xiaohei/Public/static/slider/js/jssor.js"></script>
<script  src="/xiaohei/xiaohei/Public/static/slider/js/jssor.slider.min.js"></script>


<script>
    /* 轮播插件 初始化 */
    jQuery(document).ready(function ($) {
//        var options = { $AutoPlay: true };
//        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
//        return;
        var _SlideshowTransitions = [
            //Zoom- in
            {$Duration: 1200, $Zoom: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 },
            //Zoom+ out
            {$Duration: 1000, $Zoom: 11, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },
            //Rotate Zoom- in
            {$Duration: 1200, $Zoom: 1, $Rotate: 1, $During: { $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out
            {$Duration: 1000, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //Zoom HDouble- in
            {$Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },
            //Zoom HDouble+ out
            {$Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },

            //Rotate Zoom- in L
            {$Duration: 1200, x: 0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Left: $JssorEasing$.$EaseSwing, $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out R
            {$Duration: 1000, x: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //Rotate Zoom- in R
            {$Duration: 1200, x: -0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Left: $JssorEasing$.$EaseSwing, $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out L
            {$Duration: 1000, x: 4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //Rotate HDouble- in
            {$Duration: 1200, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate HDouble- out
            {$Duration: 1000, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate VFork in
            {$Duration: 1200, x: -4, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Row: 28 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate HFork in
            {$Duration: 1200, x: 1, y: 2, $Cols: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Column: 19 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} }
        ];

        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 600,                                //Specifies default duration (swipe) for slide in milliseconds

            $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            },

            $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            },

            $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1 多少列
                $SpacingX: 14,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $SpacingY: 12,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 4,                             //[Optional] Number of pieces to display, default value is 1 左边多少个
                $ParkingPosition: 156,                          //[Optional] The offset position to park thumbnail
                $Orientation: 2                               //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 1080), 300));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>



</body>
</html>