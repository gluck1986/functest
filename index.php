<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 26.11.2015
 * Time: 1:30
 *//*
use app\config as config;
use app\core as ;*/
$config = include('app/config/global.php');
include_once('app/core/app.php');
\app\core\app($config);


