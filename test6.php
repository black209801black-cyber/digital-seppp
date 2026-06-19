<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'baseInfo.php';
include_once 'config.php';

$res = sendAction('typing', 1234567);
var_dump($res);
