<?php

namespace effsoft\eff\module\site\controllers;

use effsoft\eff\EffController;

class HomeController extends EffController{

    function actionIndex(){
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        return $this->render('//site/home/index');
    }

    public function actionCopyright(){
        return $this->render('//site/policies/copyright');
    }

    public function actionTermsOfService(){
        if(\Yii::$app->request->isAjax){
            return $this->render('//site/policies/terms_of_service_ajax');
        }else{
            return $this->render('//site/policies/terms_of_service');
        }
    }
}