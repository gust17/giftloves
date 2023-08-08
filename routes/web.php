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

    //dd($request->all());
    $cartao = \App\Models\Cartao::find($request->cartao_id);
    $name = $request->name;


    return view('site.visualizar', compact('cartao', 'request'));
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
    $presente = \App\Models\Presente::find($id);

    return view('dashboard.pagamento', compact('presente'));
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('finalizapagamento/{id}', function ($id) {

    $presente = \App\Models\Presente::find($id);


    $asaas = new Asaas(env('ASAAS_TOKEN'), env('ASAAS_AMBIENTE'));


    $user = \Illuminate\Support\Facades\Auth::user();

    if ($user->asaas_client) {

    } else {
        $dadosCliente = [
            'name' => $user->name,
            'cpfCnpj' => $user->cpf,
            'email'=>$user->email,
        ];
        $clientes = $asaas->Cliente()->create($dadosCliente);

        $user->fill(['asaas_client'=>$clientes->id]);
        $user->save();
    }

    $user = \Illuminate\Support\Facades\Auth::user();

    $dadosCobranca = array(
        'customer'=> $user->asaas_client,
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

        'billingType' => 'UNDEFINED', //required


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
    //dd($dadosCobranca);
    $cobranca = $asaas->Cobranca()->create($dadosCobranca);
    //dd($cobranca);
    return redirect($cobranca->invoiceUrl);

});

Route::get('consultarcobranca/{id}', function ($id) {
    $asaas = new Asaas(env('ASAAS_TOKEN'), env('ASAAS_AMBIENTE'));

    $cobranca = $asaas->Cobranca()->getById($id);

    dd($cobranca);
});
///pay_2104150616726039
