<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 6:24
 */

namespace app\controllers;



return function()use(&$appEnviroment){echo $appEnviroment.'main controller'."\n"; return true;};