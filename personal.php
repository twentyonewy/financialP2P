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
    <!-- 引入个人中心首页样式 -->
    <link rel="stylesheet" href="./dist/css/personal.css">
    <!-- 引入页头样式 -->
    <link rel="stylesheet" href="./dist/css/header.css">
	<!-- 引入页脚样式 -->
    <link rel="stylesheet" href="./dist/css/footer.css">
    <!-- 引入personalmain样式 -->
    <link rel="stylesheet" href="./dist/css/personal_main.css">
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
    <div id="usermain" class='container'>
        <div class="row container">

            <!-- 左侧列表 -->
            <div class="panel panel-default col-lg-3 col-md-3 col-xs-3">
                <div class="panel-heading"><a href="#">投资项目</a></div>
                <div class="panel-heading"><a href="#">借款项目</a></div>
                <div class="panel-body"><a href="#">借款项目</a></div>
                <div class="panel-body"><a href="#">还款明细</a></div>
                <div class="panel-heading"><a href="#">我的账户</a></div>
                <div class="panel-body active" target="userPlace"><a href="./personal.php">账户信息</a></div>
                <div class="panel-body"><a href="./realAuth.html">实名认证</a></div>
                <div class="panel-body"><a href="#">银行卡管理</a></div>
                <div class="panel-body"><a href="#">登陆记录</a></div>
                <div class="panel-heading"><a href="#">资产详情</a></div>
                <div class="panel-body"><a href="#">账户流水</a></div>
                <div class="panel-body"><a href="./request_list.html">充值明细</a></div>
                <div class="panel-body"><a href="#">提现记录</a></div>
                <div class="panel-body"><a href="#">收款明细</a></div>
                <div class="panel-heading"><a href="./userInfo.html">个人资料</a></div>
            </div>

            <!-- 右侧内容 -->
            <div class="usercontant col-lg-9 col-md-9 col-xs-9">
                <div id="personal">
                    <ul class="list-group">
                        <li class="personal_top list-group-item">
                            <div class="personal_portrait">
                                <img src="./images/head_icon.jpg" alt="图片加载失败">
                            </div>
                            <div class="personal_information">
                                <p>昵 称：源代码教育</p>
                                <p>用户名：小强</p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </li>
                        <li class="personal_bottom list-group-item">
                            <div class="row personal_money">
                                <p class="col-lg-4 col-md-4 col-xs-12">总金额：<span>10000元</span></p>
                                <p class="col-lg-4 col-md-4 col-xs-12">可用金额：<span>8000元</span></p>
                                <p class="col-lg-4 col-md-4 col-xs-12">冻结金额：<span>2000元</span></p>
                            </div>
                            <div class="personal_choise">
                                    <button type="button" class="btn btn-primary">账户充值</button>
                                    <button type="button" class="btn btn-danger">账户提现</button>
                            </div>
                            <div class="row personal_menu">
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <h4>实名认证</h4>
                                        <p>未认证 <a href="#">马上认证</a> </p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <h4>手机认证</h4>
                                        <p>已认证 <a href="#">查看</a></p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <h4>邮箱认证</h4>
                                        <p>已认证 <a href="#">查看</a></p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <h4>VIP会员</h4>
                                        <p>普通用户 <a href="#">查看</a></p>
                                    </div>
                            </div>
                            
                        </li>
                    </ul>
                </div>
                <!-- <iframe src="./personal.html" frameborder="0" width="100%" height="600px"></iframe> -->
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