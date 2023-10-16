<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('verifica/{id}', function ($id) {
    $presente = \App\Models\Presente::find($id);
    return ['status' => $presente->status];
});

Route::get('/gerartoken', function () {
    if (auth()) {


        $token = 123456;
        return ['token' => $token,
            'cpf' => auth()->user()->cpf
        ];
    }


})->middleware(['auth:api']);


Route::post('/webhook', [\App\Http\Controllers\WebhookController::class,'recebe']);
