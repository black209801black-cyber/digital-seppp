<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$type = "check_blocked";
$text = "hi";
$keys = [];
$user = ['userid' => 123];

if($type == 'check_blocked'){
    echo "Check Blocked\n";
}elseif($type == 'text'){
    echo "Text\n";
}
