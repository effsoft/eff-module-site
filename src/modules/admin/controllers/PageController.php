<?php

namespace effsoft\eff\module\site\modules\admin\controllers;

use effsoft\eff\EffController;

class PageController extends EffController{

    public function actionManage(){

        return $this->render('//site/admin/page/manage');
    }

    public function actionCreate(){
        
        return $this->render('//site/admin/page/create');
    }

}