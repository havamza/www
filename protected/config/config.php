<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Olympico systems',

    // preloading 'log' component
    'preload' => array(
        'log',
    ),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),

    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(//'class'=>'system.gii.GiiModule',
            //'password'=>'Enter Your Password Here',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            //'ipFilters'=>array('127.0.0.1','::1'),
        ),

    ),

    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
        /*
        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        */
        'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),
        // uncomment the following to use a MySQL database
        /*
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=testdrive',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        */
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                    'class'=>'CWebLogRoute',
                ),
                */
            ),
        ),
        'clientScript' => array(
            'scriptMap' => array(
                'jquery.js' => false, //disable default implementation of jquery
                'jquery.min.js' => false, //disable any others default implementation
                'core.css' => false, //disable
                'styles.css' => false, //disable
                'pager.css' => false, //disable
                'default.css' => false, //disable
            ),
            'packages' => array(
                'jquery' => array( // set the new jquery
                    'baseUrl' => 'bootstrap/',
                    'js' => array('js/jquery-1.8.3.min.js'),
                ),
                'bootstrap' => array( //set others js libraries
                    'baseUrl' => 'bootstrap/',
                    'js' => array('js/bootstrap.min.js'),
                    'css' => array( // and css
                        'css/bootstrap.min.css',
                        'css/custom.css',
                        'css/bootstrap-responsive.min.css',
                    ),
                    'depends' => array('jquery'), // cause load jquery before load this.
                ),
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'info@olympico.ru',
    ),
);