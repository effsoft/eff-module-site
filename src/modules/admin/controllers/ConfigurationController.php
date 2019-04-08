<?php
namespace effsoft\eff\module\site\modules\admin\controllers;

use effsoft\eff\EffController;

class ConfigurationController extends EffController{

    public function actionManage(){

        return $this->render('//site/admin/configuration/manage');
    }
}