<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P2P金融借贷平台</title>
    <!-- icon图标 -->
    <link rel="shortcut icon" href="./images/P2Picon.ico" />
    <!-- 视口 -->
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
    <!-- 引入bootstrap -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入图标字体 -->
    <link rel="stylesheet" href="./lib/fontawesome/css/fontawesome-all.min.css">
    <!-- 引入注册样式 -->
		<link rel="stylesheet" href="./dist/css/min/userRegLogin.min.css">
		<!-- 引入页头样式 -->
    <link rel="stylesheet" href="./dist/css/header.css">
		<!-- 引入页脚样式 -->
    <link rel="stylesheet" href="./dist/css/footer.css">
    <!-- 兼容IE8以下浏览器 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   <?php
        include_once('./header.html');
   ?>

    <!-- 模板内容的开始 -->
    <div class='container'>
        
<div class="container" id="loginReg">
        	<div class="panel panel-default">
			  <div class="panel-heading">用户注册向导</div>
			  <div class="panel-body">
			     <form>
					  <div class="form-group">
					    <label for="username">用户账号</label>
					    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
					  </div>
					  <div class="form-group">
					    <label for="password1">登录密码</label>
					    <input type="password" class="form-control" name="password1" id="password1" placeholder="">
					  </div>
					   <div class="form-group">
					    <label for="password2">确认密码</label>
					    <input type="password" class="form-control" name="password2" id="password2" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="realname">真实姓名</label>
					    <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
					  </div>
					  <div class="form-group">
					    <label for="mobile">手机号码</label>
					    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码">
					  </div>
					  <div class="form-group">
					    <label>用户性别</label>
					    <label class="radio-inline">
						  <input type="radio" name="sex" value="男">男
						</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" value="女">女
						</label>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox">同意注册协议
					    </label>
					  </div>
					  <button type="submit" class="btn btn-danger">立即注册</button>
				</form>
			  </div>
			</div>
        </div>
    </div>

    <!-- 模板内容的结束 -->

    
   <?php
        include_once('./footer.html');
   ?>




    <!-- 引入jQuery库 -->
    <script src="./lib/jquery/jquery.js"></script>
    <!-- 引入bootstrap核心js库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 自定义特效 -->
    <script src="./src/javascript/p2pEffects.js"></script>
</body>
</html>