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

Route::get('/site2', function () {
//    dd('aqui');
    $categorias = \App\Models\Categoria::where('destaque', 1)->get();
    $categorias_totals = \App\Models\Categoria::all();
    $perguntas = \App\Models\Perguntas::where('principal', 1)->get();
    $topo = \App\Models\Topo::first();
    $parceiras = \App\Models\Parceira::where('ativo', 1)->get();
    $centro = \App\Models\Centro::first();
    return view('site.index', compact('categorias', 'categorias_totals', 'perguntas', 'topo', 'parceiras', 'centro'));
});


Route::get('/', function () {
//    dd('aqui');
    $categorias = \App\Models\Categoria::where('destaque', 1)->first();
    $categorias_totals = \App\Models\Categoria::withCount('cartaos')
        ->having('cartaos_count', '>', 2)
        ->inRandomOrder()
        ->limit(6)
        ->get();
    $total_categoria = \App\Models\Categoria::withCount('cartaos')
        ->having('cartaos_count', '>', 0)
        ->count();
    //dd($categorias_totals);
    $perguntas = \App\Models\Perguntas::where('principal', 1)->get();
    $topo = \App\Models\Topo::first();
    $parceiras = \App\Models\Parceira::where('ativo', 1)->get();
    $centro = \App\Models\Centro::first();
    $sobre = \App\Models\Sobre::first();
    $total_cartao = \App\Models\Cartao::count();
    return view('site.index2', compact('categorias', 'categorias_totals', 'perguntas', 'topo', 'parceiras', 'centro', 'sobre', 'total_cartao', 'total_categoria'));
});


Route::get('termos', function () {
    $termos = \App\Models\Termo::all();

    return view('site.termos', compact('termos'));
});

Route::get('categoria/{id}', function ($id) {
    $categoria = \App\Models\Categoria::find($id);

    return view('site.categoriashow', compact('categoria'));
});
Route::get('sobrenos', function () {
    $sobre = \App\Models\Sobre::first();

    return view('site.about', compact('sobre'));
});

Route::get('show/{id}', function ($id) {

    $cartao = \App\Models\Cartao::find($id);
    return view('site.cartao', compact('cartao'));
});

Route::get('testelogin', function () {
    return view('login');
});

Route::post('visualizar', function (\Illuminate\Http\Request $request) {

    $validated = $request->validate([
        "cartao_id" => 'required',
        "name" => 'required',
        "nascimento" => 'required',
        "whatsapp" => 'required',
        "valor" => 'required',
        "textarea" => 'required'

    ]);
    //dd($request->all());
    $user = \App\Models\User::where('whatsapp', $request->whatsapp)->first(['name', 'nascimento', 'id']);

    //dd($request->all());
    $cartao = \App\Models\Cartao::find($request->cartao_id);
    $name = $request->name;


    return view('site.visualizar', compact('cartao', 'request', 'user'));
});
Route::post('finalizar', function (\Illuminate\Http\Request $request) {
    $request['whatsapp'] = preg_replace('/\D/', '', $request->input('whatsapp'));
    // dd($request->all());
    $request['valor'] = preg_replace('/[^\d,]/', '', $request->valor);
    $request['valor'] = (float)str_replace(',', '.', $request['valor']);
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
})->middleware(['auth']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('finalizapagamento/{id}/{tipo}', function ($id, $tipo, \App\Services\AsassService $asassService) {

    $presente = \App\Models\Presente::find($id);


    //dd($presente);
    $asaas = new Asaas(env('ASAAS_TOKEN'), env('ASAAS_AMBIENTE'));


    $user = \Illuminate\Support\Facades\Auth::user();

    //dd($user);
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
    return view('dashboard.dashboard', compact('page', 'cartaos'));
})->middleware('auth');

Route::get('enviarwhatsapp/{id}', function ($id, \App\Services\WhatsappService $whatsappService) {
    $busca = $whatsappService->enviarMensagem($id);
    $busca = $whatsappService->enviarCode($id);

    return redirect()->back()->with('success', 'GiftLove Enviado com Sucesso');
})->middleware(['auth']);


Route::get('categorias', function () {
    $categorias = \App\Models\Categoria::whereHas('cartaos')->get();

    return view('site.categoria', compact('categorias'));
});

Route::get('recebidos', function () {
    $user = auth()->id();
    $page = 'Recebido';
    return view('dashboard.recebidos', compact('page'));
})->middleware('auth');
Route::get('enviados', function () {
    $user = auth()->id();
    $page = 'Enviados';
    return view('dashboard.enviados', compact('page'));
})->middleware('auth');

Route::get('recebidos/{id}', function ($id) {
    $verficar = \App\Models\Presente::where('id', $id)->where('destinatario_id', auth()->user()->id)->exists();

    if ($verficar) {

        $presente = \App\Models\Presente::find($id);
        $page = "Recebido de " . $presente->user->name;
        return view('dashboard.visualizar', compact('page', 'presente'));
    }
    {
        return 'acesso não permitido';
    }
})->middleware('auth');

Route::get('enviados/{id}', function ($id) {
    $verficar = \App\Models\Presente::where('id', $id)->where('user_id', auth()->user()->id)->exists();

    if ($verficar) {

        $presente = \App\Models\Presente::find($id);
        $page = "Enviado para " . (($presente->destinatario_id) ? $presente->destinatario->name : $presente->presenteado);


        return view('dashboard.visualizar2', compact('page', 'presente'));
    }
    {
        return 'acesso não permitido';
    }
})->middleware('auth');

Route::get('extrato', function () {
    $page = 'Extrato';
    return view('dashboard.extrato', compact('page'));

})->middleware('auth');
Route::get('gerartoken', function (Request $request) {
    $user = auth()->user();

    if ($user) {


        $lastToken = $user->tokens()
            ->where('status', 0) // Filtra por tokens com status igual a 0
            ->latest() // Ordena do mais recente para o mais antigo
            ->first();


        if (!$lastToken) {
            $token = strval(random_int(10000000, 99999999));

            $registro = \App\Models\Token::create(['user_id' => $user->id, 'token' => $token]);

            $token = $registro->token;
        } else {
            $token = $lastToken->token;
        }
        // Gera uma sequência aleatória de 8 caracteres

        return response()->json([
            'token' => $token,
            'cpf' => $user->cpf
        ], \Illuminate\Http\Response::HTTP_OK);
    }

    return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
})->middleware('auth');

Route::post('pesquisar', function (\Illuminate\Http\Request $request) {
    $categorias = \App\Models\Categoria::where('name', 'LIKE', '%' . $request->pesquisa . '%')->get();
    $parceiras = \App\Models\Parceira::where('name', 'LIKE', '%' . $request->pesquisa . '%')->get();
    $pesquisa = $request->pesquisa;

    return view('site.pesquisa', compact('categorias', 'parceiras', 'pesquisa'));


});

Route::get('parceira/{parceira}', function ($parceira) {
    $parceira = \App\Models\Parceira::whereName($parceira)->first();


    if ($parceira) {
        return view('site.parceirashow', compact('parceira'));
    } else {
        return redirect(url('/'));
    }
});
Route::get('seja-parceiro', function () {


    //return $lojas;
    $planos = \App\Models\Plano::where('ativo', 1)->get();
    //dd($planos);
    return view('seja-parceira', compact('planos'));
});

Route::post('seja-parceiro', function (\Illuminate\Http\Request $request) {
    //dd($request->all());


    $request['whatsapp'] = preg_replace('/[^0-9]/', '', $request['whatsapp']);
    $request['cpf'] = preg_replace('/[^0-9]/', '', $request['cpf']);
    $request['cpf'] = preg_replace('/[^a-zA-Z0-9\s]/', '', $request['cpf']);

    $request['cpf'] = str_pad($request['cpf'], 11, '0', STR_PAD_LEFT);
    $validated = $request->validate([

        'name_loja' => 'required',
        'endereco' => 'required',
        'name_loja' => 'required',
        'endereco' => 'required',
        'name_user' => 'required',
        'whatsapp' => 'required',
        'email' => 'required',
        'cpf' => 'required|cpf',
        'plano_id' => 'required'
    ]);

    $teste = \App\Models\UserLoja::where('cpf', $request->cpf)->exists();
    //dd($teste);

    if (!$teste) {
        $loja =
            [
                'name' => $request['name_loja'],
                'site' => $request['site'],
                'endereco' => $request['endereco'],
                'facebook' => $request['facebook'],
                'instagram' => $request['instagram'],
                'tiktok' => $request['tiktok'],


            ];

        $loja = \App\Models\Parceira::create($loja);


        $user = [
            'name' => $request['name_user'],
            'whatsapp' => $request['whatsapp'],
            'email' => $request['email'],
            'cpf' => $request['cpf'],
            'password' => bcrypt($request['cpf'])

        ];

        $user = \App\Models\UserLoja::create($user);


        $responsavel = [
            'parceira_id' => $loja->id,
            'user_id' => $user->id,
            'adminstrador' => 1,

        ];
        $responsavel = \App\Models\ResponsavelLoja::create($responsavel);

        $contrato = [
            'parceira_id' => $loja->id,
            'plano_id' => $request['plano_id']
        ];

        \App\Models\Contrato::create($contrato);


        return redirect(url('obrigado', $responsavel->id));
    }else{
        return redirect()->back()->with('error','Seu usuário já consta em nosso sistema!');
    }
});

Route::get('obrigado/{id}', function ($id, \App\Services\WhatsappService $whatsappService) {


    $responsavel = \App\Models\ResponsavelLoja::find($id);


    $loja = \App\Models\Parceira::find($responsavel->parceira_id);


    $whatsappService->alertaGus($id);

    return view('obrigado', compact('responsavel', 'loja'));
});






///pay_2104150616726039
