
<!DOCTYPE html>
<html>
<head>
    <title>快捷登录</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="/assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/user.min.css">
</head>

<body>
<header class="header"><div class="title">快捷登录</div></header>
<section id="loginContent" >
    <form class="common-style-div common-margin-top" id="loginForm">
        <div class="lg-input-text">
            <input type="text" class="text1" name="LoginForm[username]" id="phone" value="soothion" placeholder="请输入帐号"><div class="btn-div">
        </div>
        </div>
        <div class="gray-line"></div>
        <div class="lg-input-text">
            <input type="password" class="text2" id="code" value="xiaoxiaoyi" name="LoginForm[password]" placeholder="请输入密码">
        </div>
    </form>
    <div class="clear" style="height: 25px;"></div>
    <div style="text-align: center;">
        <div id="loginBtn" class="big-btn btn-bg-red">完成登录</div>
    </div>
    <div class="lg-tip"><a href="javascript:void(0)" class="lg-voice" id="voice" style="color:red"><?php echo $note?></a></div>
</section>
<script src="/assets/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $('#loginBtn').click(function(){
             $.post("<?php echo Yii::app()->getController()->createUrl('login/login')?>",$('#loginForm').serialize(),function(result){
                if(result==1){
                    window.location.reload();
                }
                if(result==0)
                    $("#voice").html('用户名或密码错误');
              });
        })
    })
</script>
</body>
</html>
