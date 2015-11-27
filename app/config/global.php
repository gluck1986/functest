<?php

/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 1:42
 */
namespace app\config;

/*
[
    'route' => [['controller'=>'controller.php', 'url'=>'{url}'],...],
    'init'=> 'initController.php',
    'err' => 'errController.php'
    'db' => ['host'=>'','user'=>'','pass'=>''],

]


*/


    $db = include(ROOTDIR.CONFIGDIR.'db.php');
    return array(
         'init'=>'initController.php',
        'route'=>[
            array('controller'=>'mainController.php','url'=>''),
            array('controller'=>'mainController.php','url'=>'/main/'),
            array('controller'=>'regController.php','url'=>'/reg/'),
        ] ,
        'db' => $db,

    );
