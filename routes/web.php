<?php

use Illuminate\Support\Facades\Route;
use CodePhix\Asaas\Asaas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $categorias = \App\Models\Categoria::all();
    $categorias_totals = \App\Models\Categoria::all();

    return view('site.index', compact('categorias', 'categorias_totals'));
});


Route::get('show/{id}', function ($id) {

    $cartao = \App\Models\Cartao::find($id);
    return view('site.cartao', compact('cartao'));
});

Route::get('testelogin', function () {
    return view('login');
});

Route::post('visualizar', function (\Illuminate\Http\Request $request) {


    // dd($request->all());
    $user = \App\Models\User::where('whatsapp', $request->whatsapp)->first(['name', 'nascimento', 'id']);

    //dd($request->all());
    $cartao = \App\Models\Cartao::find($request->cartao_id);
    $name = $request->name;


    return view('site.visualizar', compact('cartao', 'request', 'user'));
});
Route::post('finalizar', function (\Illuminate\Http\Request $request) {
    //dd($request->all());

    if (Auth::user()) {
        session_start();// Definir um cookie com o nome "usuario" e o valor "João" que expira em 1 hora.
        session(['name' => $request->name]);
        session(['whatsapp' => $request->whatsapp]);
        session(['valor' => $request->valor]);
        session(['textarea' => $request->textarea]);
        session(['cartao_id' => $request->cartao_id]);
        session(['nascimento' => $request->nascimento]);
    } else {

        session_start();// Definir um cookie com o nome "usuario" e o valor "João" que expira em 1 hora.
        session(['name' => $request->name]);
        session(['whatsapp' => $request->whatsapp]);
        session(['valor' => $request->valor]);
        session(['textarea' => $request->textarea]);
        session(['cartao_id' => $request->cartao_id]);
        session(['nascimento' => $request->nascimento]);

        //dd($_SESSION['name']);

// Definir um cookie com o nome "preferencia" e o valor "dark" que expira em 30 dias e está disponível apenas no diretório "/exemplo/".


    }
    return redirect(url('login'));
});

Auth::routes();

Route::get('pagamento/{id}', function ($id) {

    $page = 'Finalizar Pagamento';
    $presente = \App\Models\Presente::find($id);

    return view('dashboard.pagamento', compact('presente', 'page'));
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('finalizapagamento/{id}/{tipo}', function ($id, $tipo, \App\Services\AsassService $asassService) {

    $presente = \App\Models\Presente::find($id);


    $asaas = new Asaas(env('ASAAS_TOKEN'), env('ASAAS_AMBIENTE'));


    $user = \Illuminate\Support\Facades\Auth::user();

    if ($user->asaas_client) {

    } else {
        $dadosCliente = [
            'name' => $user->name,
            'cpfCnpj' => $user->cpf,
            'email' => $user->email,
        ];
        $clientes = $asaas->Cliente()->create($dadosCliente);

        $user->fill(['asaas_client' => $clientes->id]);
        $user->save();
    }


    if ($presente->asaas_id) {

        $dadosCobranca = array(
            'billingType' => $asassService->opcao($tipo), //required
        );

        $cobranca = $asaas->Cobranca()->update($presente->asaas_id, $dadosCobranca);

        //dd($cobranca);
        return redirect($cobranca->invoiceUrl);
    }

    $user = \Illuminate\Support\Facades\Auth::user();

    $dadosCobranca = array(
        'customer' => $user->asaas_client,
        'name' => 'Nome do link de pagamentos -> String required',
        'description' => 'Descrição do link de pagamentos -> String',
        'dueDate' => \Carbon\Carbon::now()->addDays(2)->format('Y-m-d'),
        'value' => $presente->valor + 4.99,

        /*
          Forma de pagamento permitida

          BOLETO -> Boleto Bancário
          CREDIT_CARD -> Cartão de Crédito
          UNDEFINED -> Perguntar ao Cliente

        */

        'billingType' => $asassService->opcao($tipo), //required


        /*
          Forma de cobrança

          DETACHED -> Avulsa
          RECURRENT -> Assinatura
          INSTALLMENT -> Parcelamento

        */

        'chargeType' => 'DETACHED', //required


        /*
            Caso seja possível o pagamento via boleto bancário, define a quantidade de dias úteis que o seu cliente poderá pagar o boleto após gerado
        */

        'dueDateLimitDays' => '10',


        /*
        Periodicidade da cobrança, envio obrigatório caso a forma de cobrança selecionado seja Assinatura

        WEEKLY -> Semanal
        BIWEEKLY -> Quinzenal (2 semanas)
        MONTHLY -> Mensal
        QUARTERLY -> Trimestral
        SEMIANNUALLY -> Semestral
        YEARLY -> Anual

        'subscriptionCycle' => 'MONTHLY',

        */


        /*
        Quantidade máxima de parcelas que seu cliente poderá parcelar o valor do link de pagamentos caso a forma de cobrança selecionado seja Parcelamento. Caso não informado o valor padrão será de 1 parcela
        */

        'maxInstallmentCount' => '1'


    );

    $cobranca = $asaas->Cobranca()->create($dadosCobranca);
    //dd($cobranca);
    $presente->fill(['asaas_id' => $cobranca->id]);
    $presente->save();
    //dd($cobranca);
    return redirect($cobranca->invoiceUrl);

});

Route::get('consultarcobranca/{id}', function ($id) {
    $asaas = new Asaas(env('ASAAS_TOKEN'), env('ASAAS_AMBIENTE'));

    $cobranca = $asaas->Cobranca()->getById($id);

    dd($cobranca);
});


Route::get('receberPresente/{id}', function ($id) {
    $presente = \App\Models\Presente::where('asaas_id', $id)->first();
    if (!$presente) {
        return redirect('/');
    }
    return view('presente.receber', compact('presente'));
});

Route::get('resgatar/{id}', function ($id) {
    $presente = \App\Models\Presente::where('id', $id)->first();

    if (Auth::user()) {
        session_start();// Definir um cookie com o nome "usuario" e o valor "João" que expira em 1 hora.
        session(['asaas_id' => $presente->asaas_id]);

    } else {

        session_start();// Definir um cookie com o nome "usuario" e o valor "João" que expira em 1 hora.
        session(['asaas_id' => $presente->asaas_id]);


// Definir um cookie com o nome "preferencia" e o valor "dark" que expira em 30 dias e está disponível apenas no diretório "/exemplo/".


    }
    return redirect(url('login'));

});

Route::get('resgatefinal/{id}', function ($id) {
    $page = 'Resgate';
    $presente = \App\Models\Presente::where('asaas_id', $id)->first();
    return view('dashboard.resgate', compact('presente', 'page'));

});


Route::post('resgate', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'code' => 'required',

    ]);

    $presente = \App\Models\Presente::where('id', $request->presente_id)->where('code', $request->code)->first();
    $presente->fill(['status' => 3, 'destinatario_id' => auth()->user()->id]);
    $presente->save();

    $grava = [
        'tipo' => 1,
        'valor' => $presente->valor,
        'descricao' => 'Você foi presenteado(a) por ' . $presente->user->name,
        'user_id' => auth()->user()->id

    ];
    \App\Models\Extrato::create($grava);

    return redirect()->back()->with('success', 'GiftLove resgatado');
});

Route::get('dashboard', function () {
    $page = 'Dashboard';
    $cartaos = \App\Models\Cartao::inRandomOrder()->take(10)->get();
//dd($cartaos);
    return view('dashboard.dashboard', compact('page','cartaos'));
});

Route::get('enviarwhatsapp/{id}', function ($id, \App\Services\WhatsappService $whatsappService) {
    $busca = $whatsappService->enviarMensagem($id);
    $busca = $whatsappService->enviarCode($id);

    return redirect()->back()->with('success', 'GiftLove Enviado com Sucesso');
})->middleware(['auth']);
///pay_2104150616726039
