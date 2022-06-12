<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{
    public function performRequest($method,$requestUrl,$form_params =[],$headers =[])
    {
        //create a new client
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        //$client->get('/', ['verify' => true]);

        //perform the request
        $response = $client->request($method,$requestUrl,['form_params'=>
            $form_params, 'headers'=>$headers]);

        //return the response body contents
        return $response->getBody()->getContents();

    }
}