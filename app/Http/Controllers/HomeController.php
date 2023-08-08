<?php

namespace App\Http\Controllers;

use App\Models\Presente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //dd($_SESSION['name']);
        if (Session::has('name')) {
            $name = Session::get('name');

            $grava = [
                'presenteado' => Session::get('name'),
                'nascimento' => Session::get('nascimento'),
                'telefone' => Session::get('whatsapp'),
                'valor' => Session::get('valor'),
                'mensagem' => Session::get('textarea'),
                'cartao_id' => Session::get('cartao_id'),
                'code' => str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT),
                'user_id' => Auth::user()->id
            ];
            //dd($grava);

            $presente = Presente::create($grava);
            Session::forget('name');
            Session::forget('nascimento');
            Session::forget('telefone');
            Session::forget('valor');
            Session::forget('mensagem');
            return redirect(url('pagamento', $presente->id));

            // echo "O valor da sessão 'name' é: " . $valorSessao;
        } else {
            echo "O valor da sessão 'name' não está definido.";
        }
        return view('home');
    }
}
