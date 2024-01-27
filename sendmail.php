<?php

if(!defined('Ywhhqehqs2e123')) {

    die('Прямой доступ запрещен');
 
 }


$name = $_POST['name'];
$number = $_POST['number'];
$name = str_replace(' ', '', $name);
$name = preg_replace('/[^ a-zа-я\d.]/ui', '', $name );
if(!preg_match("/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/", $number)) {
    die('Некорректный номер');
  }

function perfectCurl($url, $post_params, $code)
    {

        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 40);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl_handle, CURLOPT_POST, true);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $post_params);
        $buffer = curl_exec($curl_handle);

        if ($code){
            return curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);
        }
        return $buffer;


    }

    $tg_chid = '-1002107463598';
        $apiToken = '6290807691:AAELqfpLdtI21D61w0uIKXjSBF1nOkwXEaY';
        $text = '<b>Вам новое собщение от '.$name.'</b>'.PHP_EOL. 'Hомер телефона: '. $number;
        $data = [
            'chat_id' => $tg_chid, 
            'text' => $text,
            'parse_mode' => 'html'
        ];
        echo perfectCurl('https://api.telegram.org/bot'.$apiToken.'/sendMessage', $data, true);