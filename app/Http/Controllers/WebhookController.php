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

    public function recebe(Request $request, WhatsappService $whatsappService)
    {
        try {
            // Obtenha os dados brutos da requisição
            $data = $request->getContent();

            // Verifique se os dados não estão vazios
            if (!empty($data)) {
                // Decodifique os dados, independentemente do formato
                $decodedData = json_decode($data, true);

                // Verifique se a decodificação foi bem-sucedida
                if ($decodedData !== null) {
                    // Verifique se a chave 'event' existe no JSON decodificado
                    if (isset($decodedData['event'])) {
                        if ($decodedData['event'] == 'PAYMENT_RECEIVED' || $decodedData['event'] == 'PAYMENT_CONFIRMED') {

                            $id = $decodedData['payment']['id'];

                            $fatura = Presente::where("asaas_id", $id)->first();
                            $fatura->update(['status' => 1]);


                            $busca = $whatsappService->alertContato($fatura->id);
                            $busca = $whatsappService->enviarMensagem($fatura->id);
                            $busca = $whatsappService->enviarCode($fatura->id);


                        } elseif ($decodedData['event'] == 'PAYMENT_CREATED') {
                            // Execute algo específico para 'PAYMENT_CREATED'
                        }
                    }
                }
            }

            // Qualquer valor de 'event' (ou se 'event' não está definido) retorna um status 200 OK
            return response()->json(['message' => 'Webhook received and processed'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error processing the webhook'], 500);
        }
    }


}
