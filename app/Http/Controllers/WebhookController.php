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

            if ($data['event'] == 'PAYMENT_RECEIVED') {
                $paymentId = $data['payment']['id'];

                $fatura = Presente::where('asaas_id', $paymentId)->first();

                if ($fatura) {
                    $whatsappService->enviarMensagem($fatura->id);
                    $whatsappService->enviarCode($fatura->id);
                } else {
                    // Lógica adicional em caso de fatura não encontrada (opcional)
                    return response()->json(['message' => 'Fatura não encontrada para o pagamento.'], 404);
                }
            }

            return response()->json(['message' => 'Webhook received and processed'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error processing the webhook'], 500);
        }
    }


}
