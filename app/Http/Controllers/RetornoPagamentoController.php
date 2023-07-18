<?php

namespace App\Http\Controllers;

use App\Models\CallbackPagamento;
use App\Models\Compra;
use Illuminate\Http\Request;

class RetornoPagamentoController extends Controller
{
    public function callBackUrl(Request $request)
    {

        header('Content-Type: application/json; charset=utf-8');

        $dadosJson = file_get_contents('php://input');

        $dadosArray = json_decode($dadosJson);

        $varTransacaoId = $dadosArray->IdTransaction;

        $transacaoCallback = new CallbackPagamento;
        $transacaoCallback->IdTransaction = $varTransacaoId;


        $transacaoCallback->save();

        //atualiza o status na tabela das compras
        $compras = Compra::all();

        foreach($compras as $compra) {
            $idTransaction = $compra->idTransaction;

            $callback = CallbackPagamento::where('idTransaction', $idTransaction)->latest()->first();

            if($callback){
                $status_pagamento = $callback->code_status;
                $compra->update(['status_pagamento' => $status_pagamento]);
            }

        }
    }
}
