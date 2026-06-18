<?php
$update = json_decode('{"update_id":123}');
$from_id = $update->message->from->id;
var_dump($from_id);
