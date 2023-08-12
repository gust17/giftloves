<?php

namespace App\Services;

use App\Models\Presente;
use GuzzleHttp\Client;

class WhatsappService
{
    public function enviarMensagem($id)
    {
        $presente = Presente::find($id);
        $quemenviou = $presente->user->name;
        $client = new Client();
        $response = $client->post('https://api.z-api.io/instances/3C1AFB49596C31267677DA9A19F97F83/token/DC525F25CDC4CFAF5D1AD005/send-text', [
            'json' => [

                "phone" => "55" . $presente->telefone,
                "message" => "*$presente->presenteado* você ganhou um GiftLove de *$quemenviou*.\n Clique para mais detalhes: https://giftloves.com.br/receberPresente/$presente->asaas_id",
                "image" => $presente->cartao->caminho,
                "linkUrl" => "https://giftloves.com.br/receberPresente/$presente->asaas_id",
                "title" => "GIFTLOVES",
                "linkDescription" => "Seu Presente Descomplicado",

            ],
        ]);

        // Trate a resposta como desejar
        $statusCode = $response->getStatusCode();
        $responseData = json_decode($response->getBody(), true);

        return $responseData;

    }

    public function enviarCode($id)
    {
        $presente = Presente::find($id);
        $client = new Client();
        $response = $client->post('https://api.z-api.io/instances/3C1AFB49596C31267677DA9A19F97F83/token/DC525F25CDC4CFAF5D1AD005/send-text', [
            'json' => [

                "phone" => "55" . $presente->telefone,
                "message" => "Seu codigo para resgatar seu cartão:\n*$presente->code*",


            ],
        ]);

        // Trate a resposta como desejar
        $statusCode = $response->getStatusCode();
        $responseData = json_decode($response->getBody(), true);

        return $responseData;

    }
}
