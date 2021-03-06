<?php

use GuzzleHttp\Client;

if (!function_exists('sendHook')) {

    /**
     * sends a webhook to Discord
     *
     * @param string $content
     * @return string
     */
    function sendHook($content, $nick = "Commission")
    {
        $client = new Client();
        $webhook = config('app.webhook');

        $data = array(
            'username' => $nick,
            'content' => $content,
            'tts' => 'false'
            );

        $res = $client->post($webhook, [
            'json' => $data,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);

        return $res;
    }
}

?>
