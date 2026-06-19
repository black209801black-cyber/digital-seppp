<?php
$botToken = 'test';
function bot($method, $datas = []){
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datas));
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}
$res = bot('sendChatAction',[
    'chat_id'=>123,
    'action'=>'typing'
]);
var_dump($res);
