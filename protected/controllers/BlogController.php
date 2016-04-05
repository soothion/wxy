<?php

class BlogController extends Controller{
    public function actionIndex(){
        $user = Yii::app()->user;
        if($user->isGuest||empty($user->wechat)){
            $this->redirect('/login/index?redirect='.$this->createUrl('/blog/index',array('id'=>$_REQUEST['id'])));
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

