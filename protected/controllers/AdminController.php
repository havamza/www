<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Havamza
 * Date: 11/30/12
 * Time: 7:04 PM
 * To change this template use File | Settings | File Templates.
 */
class AdminController extends Controller
{
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionHello() {
        $this->render('hello');
    }
    public function filters() {
        return array(
            'accessControl',
        );
    }
    public function accessRules(){
        return array(
            array('allow', // allow authenticated users to access all actions
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
}
