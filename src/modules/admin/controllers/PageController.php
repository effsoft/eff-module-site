<?php

namespace effsoft\eff\module\site\modules\admin\controllers;

use effsoft\eff\EffController;

class PageController extends EffController{

    public function init(){
        parent::init();

    }

    public function actionIndex(){
        var_dump(1);exit;
    }

    public function actionCreate(){
        
        return $this->render('//site/admin/page/create');
    }

    public function actionManage(){
        
        return $this->render('//site/admin/page/create');
    }
}