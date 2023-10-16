<?php

namespace App\Http\Controllers;


use App\Models\Presente;
use App\Services\WhatsappService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        $data = $request->json(); // Obtenha o JSON da requisição
        dd($data);
        // Realize as validações necessárias antes de processar os dados

        $event = $data['event'];
        $payment = $data['payment'];

        // Execute as ações necessárias com os dados do pagamento
        // Por exemplo, armazene-os no banco de dados ou dispare ações com base no evento

        return response()->json(['message' => 'Webhook received and processed']);
    }

    public function recebe(Request $request,WhatsappService $whatsappService)
    {
//
        try {
            //$data = $request->json()->all();
            $data = $request->json()->all();


            if ($data['event'] == 'PAYMENT_RECEIVED') {


                $id = ($data['payment']['id']);

                $fatura = Presente::where('asaas_id',$id)->first();

                $busca = $whatsappService->enviarMensagem($fatura->id);

                //dd($busca);
                $busca = $whatsappService->enviarCode($fatura->id);



            }
            //dd($data);// Obter o JSON da solicitação e convertê-lo para um array
            Log::info('Data received from the webhook: ' . json_encode($data));

            // Realize as ações necessárias com os dados do pagamento

            return response()->json(['message' => 'Webhook received and processed'],200);
        } catch (\Exception $e) {
            Log::error('Error while processing webhook: ' . $e->getMessage());
            return response()->json(['message' => 'Error processing the webhook'], 500);
        }
    }
}
