<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-with,inital-scal=1,user-scalabe=no"/>
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/cikonss.css" />
	<link rel="stylesheet" href="css/MyCSS.css" />
	<style type="text/CSS">
        @media screen and (max-width:600px){
	       .hideContent{
	       	   display:none;
            }
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
    	<div class="container">
    		<div class="navbar-header">
    			<button class='navbar-toggle' data-toggle="collapse" data-target=".navbar-collapse">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
    			</button>
    			<a href="index.php" class="navbar-brand">WebFileManger</a>
    		</div>
    		
    		<div class="navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
        			<li><a href="index.php" class="">主目录<span class="icon icon-small"><span class="icon-home"></span></span></a></li>
        			<li><a href="index.php" class="">新建文件夾<span class="icon icon-small"><span class="icon-folder"></span></span></a></li>
        			<li><a href="index.php" class="">新建文件<span class="icon icon-small"><span class="icon-file"></span></span></a></li>
        			<li><a href="index.php" class="">上傳文件<span class="icon icon-small"><span class="icon-upload"></span></span></a></li>
        			<li><a href="index.php" class="">系統信息<span class="icon icon-small"><span class="icon-stats"></span></span></a></li>
        			<li><a href="index.php" class="">聯繫<span class="icon icon-small"><span class="icon-mail"></span></span></a></li>
        		</ul>
    		</div>
    	</div>
	</nav>
	<section id="download">
		<div class="container">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Web在線文件管理器<code>v1.0</code></h1>
				<p>前端基於Bootstrap框架，並且使用Cikonss圖標樣式</p>
				<p>簡單的web在線文件管理器</p>
				<p><a href="#" class="btn btn-primary btn-lg">下載</a></p>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-10">文件路径：根目录</div>
				<div class="col-md-2">返回上级</div>
			</div>
		</div>
	</section>
	<section id="list">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-responsive table-hover table-bordered">
					<tr>
						<td>类型</td>
						<td>名称</td>
						<td>大小</td>
						<td class='hideContent'>读</td>
						<td class='hideContent'>写</td>
						<td class='hideContent'>执行</td>
						<td class='hideContent'>创建时间</td>
						<td class='hideContent'>修改时间</td>
						<td class='hideContent'>访问时间</td>
						<td>操作</td>
					</tr>
				</table>
			</div>
		</div>
	</section>
	<footer>
    	<p>© 2012-2016 www.myfirst.com</p>
    	<p>ICP 備</p>
	</footer>
	<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
























