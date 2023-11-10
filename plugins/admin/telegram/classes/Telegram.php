<?php namespace Admin\Telegram\Classes;

use Admin\Telegram\Models\Settings as TelegramSettings;

class Telegram
{
    public static function sendMessage($message)
    {
        $ch = curl_init();

        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://api.telegram.org/bot' . TelegramSettings::get('bot_token') . '/sendMessage',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => TelegramSettings::get('chat_id'),
                    'text' => $message,
                    'parse_mode' => 'html'
                )
            )
        );

        curl_exec($ch);
    }
}
