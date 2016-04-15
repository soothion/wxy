<?php

class BlogController extends Controller{
    public function actionIndex(){
        if(!isset(Yii::app()->session['openid'])){
            $this->redirect('/login/index');
        }
        $user = Yii::app()->user;
        if(!$user->isGuest){
            $user=Users::model()->find($user->id);
            if(!$user->openid)
                $this->redirect('/login/index');
            if($_SESSION['openid']!=$user->openid){
                header("Content-type: text/html; charset=utf-8");
                echo '<h2>此帐号已绑定其他微信帐号</h2>';
                die;
            }
        }
        else{
            $this->redirect('/login/index');
        }
        $criteria=new CDbCriteria;
        $criteria->order='recommend desc,sort desc,addtime desc';
        if(isset($_REQUEST['id'])&&$_REQUEST['id']!='')  {
            $criteria->addCondition("id=:id");
            $criteria->params=array('id'=>$_REQUEST['id']);
        }
        $blog=  Blog::model()->find($criteria);

        if($blog===null)
			throw new CHttpException(404,'The requested page does not exist.');
        $content=$blog->content;
        
        $this->title=$blog->title;
        $this->addtime=date('Y-m-d',strtotime($blog->addtime));
        $this->render('index',array(
            'content'=>$content,
        ));
    }


    public function actionView(){
        echo 'fuck';
    }
}

