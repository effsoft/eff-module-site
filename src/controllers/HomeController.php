<?php

namespace effsoft\eff\module\site\controllers;

use effsoft\eff\EffController;

class HomeController extends EffController{

    function actionIndex(){
        return $this->render('index',[]);
    }
}