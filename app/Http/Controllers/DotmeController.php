<?php

namespace App\Http\Controllers;

use App\Models\Dotme;
use Illuminate\Http\Request;

class DotmeController extends Controller
{
    
    public function create(Request $request) {

        //condicional para entendimento de envio dos dados para o banco de dados
        if($request->method() == "POST") {
            $data = $request->all();
            Dotme::create($data);
            
            return redirect('/cadastro');
        }

        return view('cadastro');
    }
}
