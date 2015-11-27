<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 9:13
 */

namespace app\controllers;



return function()use(&$appEnviroment){

   // echo $appEnviroment.'reg controller'."\n";
    include (ROOTDIR.VIEWDIR.'regView.php');
    return true;
};