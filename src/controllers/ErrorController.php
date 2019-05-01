<?php

namespace effsoft\eff\module\site\controllers;

use effsoft\eff\EffController;

class ErrorController extends EffController{

    public function init(){
        parent::init();

    }

    public function actionIndex(){
        return $this->render('//site/error/index',[]);
    }

    public function action404(){
        return $this->render('//site/error/index',[]);
    }

    public function action403(){
        return $this->render('//site/error/index',[]);
    }
}