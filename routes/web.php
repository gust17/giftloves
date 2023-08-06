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
