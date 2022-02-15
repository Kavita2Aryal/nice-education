<?php

namespace App\Custom;

use Illuminate\Support\Arr;

class GlobalPushNotification
{
    /**
     * Firebase instance tokens
     *
     * @var array
     */
    public $deviceTokens = [];

    /**
     * Keys of message must be 'title' and 'body'
     *
     * @var array
     */
    public $message = [];


    public $channel = "";

    /**
     * keys of android must be 'ttl' in second and 'notification' which contains 'click_action'
     */
    public $android = [];


    /**
     * keys of apns must be 'headers' which contains 'apns-priority' in number and 'payload' which contains 'aps' which contains 'category' 
     */
    public $apns = [];

    /**
     * Initialize Devices and tokens
     *
     * @param array $deviceTokens
     * @param array $message
     */
    public function __construct(array $deviceTokens = [], array $message = [], array $android  = [], array $apns  = [],  string $channel)
    {
        $this->deviceTokens = $deviceTokens;
        $this->message = Arr::add($message, 'sound', 'default');
        $this->android = $android;
        $this->apns = $apns;
        $this->channel = $channel ?? '/topic/announcement';
    }

    /**
     * Send push notification
     *
     * @return mixed
     */
    public function send()
    {
        $url = 'https://fcm.googleapis.com/fcm/send';


        $fields = [
            // 'registration_ids' => $this->deviceTokens,
            'to' => $this->channel,
            'notification' => $this->message,
            'android' => $this->android,
            'apns' => $this->apns,
        ];
        $headers = [
            "Authorization:key = " . env('ANDROID_SERVER_KEY'),
            "Content-Type: application/json",
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $response = curl_exec($ch);
        if ($response === false) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);

        dd($response);
        return $response;
    }

    /**
     * Chunk the device Token
     */

    public function getChunkToken($data)
    {
        return array_chunk($data, 500);
    }
}
