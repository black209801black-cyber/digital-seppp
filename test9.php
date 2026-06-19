<?php
$res = json_decode('{"ok":false,"error_code":400,"description":"Bad Request: chat not found"}');
var_dump($res);
if(isset($res->error_code) && $res->error_code == 403){
    echo "BLOCKED\n";
} elseif (isset($res->ok) && $res->ok) {
    echo "ACTIVE\n";
} else {
    echo "UNKNOWN\n";
}
