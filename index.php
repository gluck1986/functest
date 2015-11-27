<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 1:30
 */

define('ROOTDIR',__DIR__ );
define('CONTROLLERDIR','/app/controllers/' );
define('COREDIR','/app/core/' );
define('CONFIGDIR','/app/config/' );
define('CONFIGNAME','global.php');
define('VIEWDIR','/app/view/');
error_reporting(E_ALL);
ini_set('display_errors',E_ALL);


$config = include(ROOTDIR.CONFIGDIR.CONFIGNAME);
include_once(ROOTDIR.COREDIR.'app.php');
\app\core\app($config);


