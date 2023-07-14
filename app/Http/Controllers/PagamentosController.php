<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;

class PagamentosController extends Controller
{
    public function pix(Request $request)
    {
        try {

            $curl = curl_init();

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://payment.safe2pay.com.br/v2/Payment",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "IsSandbox": false,
                    "Application": "Aplicação de teste",
                    "Vendor": "João da Silva",
                    "CallbackUrl": "https://callbacks.exemplo.com.br/api/Notify",
                    "PaymentMethod": "6",
                    "Reference": "TESTE",
                    "Customer": {
                        "Name": "João da silva",
                        "Identity": "18978393080",
                        "Phone": "51999999999",
                        "Email": "safe2pay@safe2pay.com.br",
                        "Address": {
                            "ZipCode": "90670090",
                            "Street": "Logradouro",
                            "Number": "123",
                            "Complement": "Complemento",
                            "District": "Higienopolis",
                            "CityName": "Porto Alegre",
                            "StateInitials": "RS",
                            "CountryName": "Brasil"
                        }
                    },
                    "Products": [
                        {
                            "Code": "001",
                            "Description": "Teste 1",
                            "UnitPrice": 1.99,
                            "Quantity": 10
                        },
                        {
                            "Code": "002",
                            "Description": "Teste 1",
                            "UnitPrice": 1.99,
                            "Quantity": 10
                        },
                        {
                            "Code": "002",
                            "Description": "Teste 1",
                            "UnitPrice": 1.99,
                            "Quantity": 10
                        }
                    ]
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'x-api-key:' . env('SAFE2PAY_TOKEN') . ''
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            //var_dump(curl_error($curl));

            $dataResponse = json_decode($response);
            //dd($dataResponse);

            if (isset($dataResponse->status)) {
                if ($dataResponse->status == 401 || $dataResponse->status == 400) {
                    return redirect()->back()->withErrors([
                        'error' => trans('Não foi possível gerar o QrCode, tente novamente mais tarde.')
                    ])->withInput();
                }
            }

            $pix = $dataResponse->ResponseDetail->QrCode;
            //dd($pix);

            $codigoPix = $dataResponse->ResponseDetail->Key;
            //dd($codigoPix);

            //pega o idtransaction e salva na variavel
            $idTransaction = $dataResponse->ResponseDetail->IdTransaction;

            $imgPix = '<img src="' . $pix . '" alt="pix" style="width: 200px">';

            return $imgPix;

            // return view('dashboard.pix', [
            //     'imgPix' => new HtmlString($imgPix),
            //     'codigoPix' => $codigoPix,
            // ]);

        } catch (\Exception $e) {

            // Tratamento da exceção
            // echo "Ocorreu um erro: " . $e->getMessage();

            return redirect()->back()->withErrors([
                'error' => trans('Não foi possível gerar o QrCode, tente novamente mais tarde.')
            ])->withInput();
        }

    }

    public function boleto(Request $request)
    {
        try {

            $curl = curl_init();

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://payment.safe2pay.com.br/v2/Payment",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "IsSandbox": true,
                    "Application": "Aplicação de teste",
                    "Vendor": "João da Silva",
                    "CallbackUrl": "https://callbacks.exemplo.com.br/api/Notify",
                    "PaymentMethod": "1",
                    "Reference": "TESTE",
                    "Customer": {
                        "Name": "João da silva",
                        "Identity": "18978393080",
                        "Phone": "51999999999",
                        "Email": "safe2pay@safe2pay.com.br",
                        "Address": {
                            "ZipCode": "90670090",
                            "Street": "Logradouro",
                            "Number": "123",
                            "Complement": "Complemento",
                            "District": "Higienopolis",
                            "CityName": "Porto Alegre",
                            "StateInitials": "RS",
                            "CountryName": "Brasil"
                        }
                    },
                    "Products": [
                        {
                            "Code": "001",
                            "Description": "Teste 1",
                            "UnitPrice": 1.99,
                            "Quantity": 10
                        },
                        {
                            "Code": "002",
                            "Description": "Teste 1",
                            "UnitPrice": 1.99,
                            "Quantity": 10
                        },
                        {
                            "Code": "002",
                            "Description": "Teste 1",
                            "UnitPrice": 1.99,
                            "Quantity": 10
                        }
                    ],
                    "PaymentObject": {
                        "DueDate": "30/09/2025",
                        "Instruction": "Instrução de Exemplo",
                        "Message": [
                            "Mensagem 1",
                            "Mensagem 2",
                            "Mensagem 3"
                        ],
                        "PenaltyRate": 2,
                        "InterestRate": 0.4,
                        "CancelAfterDue": false,
                        "IsEnablePartialPayment": false,
                        "DiscountType": "1",
                        "DiscountAmount": 5,
                        "DiscountDue": "30/09/2025"
                    }
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'x-api-key: 598F7276A4CF4DF19E26834BD08C477C'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            //var_dump(curl_error($curl));

            $dataResponse = json_decode($response);
            //dd($dataResponse);

            if (isset($dataResponse->status)) {
                if ($dataResponse->status == 401 || $dataResponse->status == 400) {
                    return redirect()->back()->withErrors([
                        'error' => trans('Não foi possível gerar o Boleto, tente novamente mais tarde.')
                    ])->withInput();
                }
            }

            //pega o idtransaction e salva na variavel
            $idTransaction = $dataResponse->ResponseDetail->IdTransaction;

            $boleto = $dataResponse->ResponseDetail->BankSlipUrl;

            $codigo_barras = $dataResponse->ResponseDetail->DigitableLine;

            return new RedirectResponse($boleto);

            // return view('dashboard.boleto', [
            //     'boleto' => $boleto,
            //     'codigo_barras' => $codigo_barras
            // ]);

        } catch (\Exception $e) {

            // Tratamento da exceção
            // echo "Ocorreu um erro: " . $e->getMessage();

            return redirect()->back()->withErrors([
                'error' => trans('Não foi possível gerar o Boleto, tente novamente mais tarde.')
            ])->withInput();
        }

    }
}
