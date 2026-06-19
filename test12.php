<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'baseInfo.php';
include_once 'config.php';

$res = bot('sendChatAction',[
    'chat_id' => 123456,
    'action' => 'typing'
]);
var_dump($res);
