<?php

namespace App\Services;

use App\Models\Presente;
use GuzzleHttp\Client;

class WhatsappService
{
    public function enviarMensagem($id)
    {
        //dd(env('INSTANCIA_WHATSAPP'));
        $presente = Presente::find($id);
        $quemenviou = $presente->user->name;
        $client = new Client();



        $response = $client->post('https://api.z-api.io/instances/' . env('INSTANCIA_WHATSAPP') . '/token/' . env('TOKEN_WHATSAPP') . '/send-text', [
            'json' => [

                "phone" => "55" . $presente->telefone,
                "message" => "*$presente->presenteado* você ganhou um GiftLove de *$quemenviou*.\n Clique para mais detalhes: https://giftloves.com.br/receberPresente/$presente->asaas_id",
                "image" => env('URL_IMG') . $presente->cartao->caminho,
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


        //dd($presente);
        $client = new Client();
        $response = $client->post('https://api.z-api.io/instances/' . env('INSTANCIA_WHATSAPP') . '/token/' . env('TOKEN_WHATSAPP') . '/send-text', [
            'json' => [

                "phone" => "55" . $presente->telefone,
                "message" => "Seu codigo para resgatar seu cartão:\n*$presente->code*",


            ],
        ]);
        //dd($response);

        // Trate a resposta como desejar
        $statusCode = $response->getStatusCode();
        $responseData = json_decode($response->getBody(), true);


        //dd($responseData);
        return $responseData;
        //

    }

    public function alertContato($id)
    {
        $presente = Presente::find($id);


        //dd($presente);
        $client = new Client();
        $response = $client->post('https://api.z-api.io/instances/' . env('INSTANCIA_WHATSAPP') . '/token/' . env('TOKEN_WHATSAPP') . '/send-text', [
            'json' => [

                "phone" => "55" . $presente->telefone,
                "message" => "Para que você tenha acesso ao link você precisará salvar nosso contato! ",


            ],
        ]);
        //dd($response);

        // Trate a resposta como desejar
        $statusCode = $response->getStatusCode();
        $responseData = json_decode($response->getBody(), true);


        //dd($responseData);
        return $responseData;
        //

    }
}
