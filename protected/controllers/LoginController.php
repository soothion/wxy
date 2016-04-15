<?php

class LoginController extends Controller{
    public function actionIndex(){
        $user = Yii::app()->user;
        if(!$user->isGuest){
            $domain = 'http://'.$_SERVER['SERVER_NAME'];
            $redirect_uri = $domain.$this->createUrl('/login/wechat');
            $appid = 'wxf7b2f9f903f9aa2b';
            $scope = 'snsapi_userinfo';
            $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$redirect_uri}&response_type=code&scope={$scope}&state=123#wechat_redirect";
            $this->redirect($url);
        }
        $this->renderPartial('index',array('note'=>'','user'=>$user));
    }


    public function actionWechat(){
        $user = Yii::app()->user;
        $code = $_REQUEST['code'];
        $appid = 'wxf7b2f9f903f9aa2b';
        $secret = 'd902190a34e3cf9ec84ed871146696c8';
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appid}&secret={$secret}&code={$code}&grant_type=authorization_code";
        $result = file_get_contents($url);
        $result = json_decode($result);
        $openid = $result->openid;
        Yii::app()->session['openid'] = $openid;
        if($user->openid==''){
            $user =  Users::model()->findByAttributes(array('id'=>$user->id));
            $user->openid = $openid;
            $user->save();
            $this->redirect('/blog/index/1');
        }
        elseif($user->openid==$openid){
            $this->redirect('/blog/index/1');
        }
        elseif($user->openid!=$openid){
            header("Content-type: text/html; charset=utf-8");
            echo '<h2>此帐号已绑定其他微信帐号</h2>';
            die;
        }
    }

    public function actionLogin() {
        $result = 0;
        if (isset($_POST['LoginForm'])) {
            $model = new LoginForm();
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate() && $model->login()) {
                $result = 1;
            }
            else $result = 0;
        }
        else
            $result = 0;
        echo $result;
    }

    public function actionLogout(){
        Yii::app()->user->logout(true);
        $this->redirect(array('/login/index'));
    }

}