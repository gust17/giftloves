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
            $data = $request->json()->all();

            // Verifique se a chave 'event' existe no JSON recebido
            if (isset($data['event'])) {
                if ($data['event'] == 'PAYMENT_CREATED') {
                    // Faça algo específico para 'PAYMENT_CREATED'
                } else {
                    // Qualquer outro valor de 'event' retorna um status 200 OK
                    return response()->json(['message' => 'Event not processed, but webhook received'], 200);
                }
            } else {
                // 'event' não está definido, retorne um erro 403 Forbidden
                return response()->json(['error' => 'Event not defined'], 404);
            }

            return response()->json(['message' => 'Webhook received and processed'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error processing the webhook'], 500);
        }
    }


}
