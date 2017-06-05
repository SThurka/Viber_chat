<?php

namespace Thurka\Viber;


use GuzzleHttp\Client;

class Viber {

    public function sentMessage($to, $msg){
        $token = config('viber.token');
        $client = new Client();
//        $client->setDefaultOption('headers', array('X-Viber-Auth-Token' => $token));
        $response = $client->post('https://chatapi.viber.com/pa/send_message', [
            'headers' => ['Content-Type' => 'application/json', 'X-Viber-Auth-Token' => $token],
            'body' => json_encode([
                'receiver' => "MJaQtVyGb1IQYukwG25DhA==",
//                'type' => 'text',
//                'text'=> "Hi",
                'type' => 'picture',
                'picture'=> "b.jpg",
                'sender' => [
                    'id'=>'pa:5050264286550562295',
                    'name' => 'test.bot'
                ]
            ])
        ]);
       dd($response);
    }

    public function getInfo(){
        try {
            $token = config('viber.token');
            $client = new Client();
            $response = $client->post('https://chatapi.viber.com/pa/get_account_info', [
                'headers' => ['Content-Type' => 'application/json', 'X-Viber-Auth-Token' => $token],
                'body' => [

                ]
            ]);


        } catch (\Exception $e){
            dd($e);
        }
        //dd($response);
        $data = $response->getBody()->getContents();
        $x=json_decode($data);

    dd($x);

    }


    public function getDetail(){
        try {
            $token = config('viber.token');
            $client = new Client();
            $response = $client->get('https://chatapi.viber.com/pa/get_user_details', [
                'headers' => ['Content-Type' => 'application/json', 'X-Viber-Auth-Token' => $token],
                'body' => [


                ]
            ]);


        } catch (\Exception $e){
            dd($e);
        }
        $data = $response->getBody()->getContents();
        $x=json_decode($data);
   dd($x);
    }






    public function setWebhook(){
        try {
            $token = config('viber.token');
            $client = new Client();
            $response = $client->get('https://chatapi.viber.com/pa/set_webhook', [

                'body' => [
                    "url" => 'https://54918d1e.ngrok.io/',
                    "event_types" => ["delivered", "seen", "failed", "subscribed", "unsubscribed", "conversation_started"],

                ]
            ]);


        } catch (\Exception $e){
            dd($e);
        }
        $data = $response->getBody()->getContents();
        dd(json_decode($data));
    }


}
