<?php

use Illuminate\Support\Facades\Route;

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

    return view('site.index',compact('categorias','categorias_totals'));
});


Route::get('show/{id}', function ($id) {

    $cartao = \App\Models\Cartao::find($id);
    return view('site.cartao',compact('cartao'));
});

Route::get('testelogin',function (){
    return view('login');
});

Route::post('visualizar',function (\Illuminate\Http\Request $request){

    //dd($request->all());
   $cartao = \App\Models\Cartao::find($request->cartao_id);
   $name = $request->name;


   return view('site.visualizar',compact('cartao','request'));
});
Route::post('finalizar',function (\Illuminate\Http\Request $request){
    //dd($request->all());

    if (Auth::user()){
        dd('oi');
    }else{

// Definir um cookie com o nome "usuario" e o valor "João" que expira em 1 hora.
                setcookie('name', $request->name, time() + 3600);
                setcookie('whatsapp', $request->whatsapp, time() + 3600);
                setcookie('valor', $request->valor, time() + 3600);
                setcookie('textarea', $request->textarea, time() + 3600);
                setcookie('cartao_id', $request->cartao_id, time() + 3600);
                setcookie('nascimento', $request->nascimento, time() + 3600);


// Definir um cookie com o nome "preferencia" e o valor "dark" que expira em 30 dias e está disponível apenas no diretório "/exemplo/".



        return redirect(url('login'));
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
