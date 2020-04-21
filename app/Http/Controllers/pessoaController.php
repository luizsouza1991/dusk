<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class pessoaController extends Controller
{
    public function store(Request $request)
    {
        if (count($request->all()) > 0) {
            $pessoa = Pessoa::create($request->all());
        }
        
        return response()->json([
            'status' => true,
            'message' => 'A pessoa foi criada com sucesso'
        ], 200);
    }
}
