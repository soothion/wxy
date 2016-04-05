<?php

class LoginController extends Controller{
    public function actionIndex(){
        $this->renderPartial('index',array('note'=>''));
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
}