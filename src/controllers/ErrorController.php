<?php

namespace effsoft\eff\module\site\controllers;

use effsoft\eff\EffController;

class ErrorController extends EffController{

    public function init(){
        parent::init();

    }

    function actionIndex(){
        return $this->render('//site/error/index',[]);
    }
}