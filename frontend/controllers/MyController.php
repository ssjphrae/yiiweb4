<?php

namespace frontend\controllers;

class MyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionTest($id){
        
       return $this->render('test',[
           'id'=>$id
       ]);
       
    }

}
