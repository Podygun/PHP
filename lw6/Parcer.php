<?php

define('URL', 'https://www.cbr-xml-daily.ru/daily_json.js');

function getValutesCBR()
{
    return json_decode(file_get_contents(URL));
}

function sendToTelegramBot($text): void
{
    $botToken = "5906508386:AAG6B7D_OIBnAmvY418lXLH3kHKBqTW6RhE";
    $website = "https://api.telegram.org/bot" . $botToken;
    $chatId = -1001890411310;
    $params = [
        'chat_id' => $chatId,
        'text' => $text,
    ];
    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    echo $result;
    curl_close($ch);
}

$data = getValutesCBR();

$text =
    $data->Valute->USD->Name . ': ' . $data->Valute->USD->Value . "\n" .
    $data->Valute->EUR->Name . ': ' . $data->Valute->EUR->Value;

sendToTelegramBot($text);