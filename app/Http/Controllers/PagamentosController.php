<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagamentosController extends Controller
{
    public function cartaoCredito(Request $request)
    {
        try {

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.pagar.me/1/transactions',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                "amount": 21000,
                "card_number": "4111111111111111",
                "card_cvv": "123",
                "card_expiration_date": "0922",
                "card_holder_name": "Morpheus Fishburne",
                "customer": {
                  "external_id": "#3311",
                  "name": "Morpheus Fishburne",
                  "type": "individual",
                  "country": "br",
                  "email": "mopheus@nabucodonozor.com",
                  "documents": [
                    {
                      "type": "cpf",
                      "number": "00000000000"
                    }
                  ],
                  "phone_numbers": ["+5511999998888", "+5511888889999"],
                  "birthday": "1965-01-01"
                },
                "billing": {
                  "name": "Trinity Moss",
                  "address": {
                    "country": "br",
                    "state": "sp",
                    "city": "Cotia",
                    "neighborhood": "Rio Cotia",
                    "street": "Rua Matrix",
                    "street_number": "9999",
                    "zipcode": "06714360"
                  }
                },
                "shipping": {
                  "name": "Neo Reeves",
                  "fee": 1000,
                  "delivery_date": "2000-12-21",
                  "expedited": true,
                  "address": {
                    "country": "br",
                    "state": "sp",
                    "city": "Cotia",
                    "neighborhood": "Rio Cotia",
                    "street": "Rua Matrix",
                    "street_number": "9999",
                    "zipcode": "06714360"
                  }
                },
                "items": [
                  {
                    "id": "r123",
                    "title": "Red pill",
                    "unit_price": 10000,
                    "quantity": 1,
                    "tangible": true
                  },
                  {
                    "id": "b123",
                    "title": "Blue pill",
                    "unit_price": 10000,
                    "quantity": 1,
                    "tangible": true
                  }
                ]
        }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json; charset=UTF-8',
                'Authorization: Bearer ' . env('PAGARME_API_KEY')
            ),
            ));

            $response = curl_exec($curl);
            dd($response);

            curl_close($curl);

            $dataResponse = json_decode($response);
            dd($dataResponse);

            // if (isset($dataResponse->status)) {
            //     if ($dataResponse->status == 401 || $dataResponse->status == 400) {
            //         return redirect()->back()->withErrors([
            //             'error' => trans('Não foi possível realizar a transação. Tente novamente mais tarde.')
            //         ])->withInput();
            //     }
            // }

            return $dataResponse;

        } catch (\Exception $e) {

            // Tratamento da exceção
            // echo "Ocorreu um erro: " . $e->getMessage();

            return redirect()->back()->withErrors([
                'error' => trans('Não foi possível realizar a transação. Tente novamente mais tarde.')
            ])->withInput();
        }

    }
}


// $data = array(
    // 'amount' => 1000,
    // 'payment_method' => 'credit_card',
    // 'card_holder_name' => 'Anakin Skywalker',
    // 'card_cvv' => '123',
    // 'card_number' => '4242424242424242',
    // 'card_expiration_date' => '1220',
    // 'customer' => [
    //   'external_id' => '1',
    //   'name' => 'Nome do cliente',
    //   'type' => 'individual',
    //   'country' => 'br',
    //   'documents' => [
    //     [
    //       'type' => 'cpf',
    //       'number' => '00000000000'
    //     ]
    //   ],
    //   'phone_numbers' => [ '+551199999999' ],
    //   'email' => 'cliente@email.com'
    // ],
    // 'billing' => [
    //   'name' => 'Nome do pagador',
    //   'address' => [
    //     'country' => 'br',
    //     'street' => 'Avenida Brigadeiro Faria Lima',
    //     'street_number' => '1811',
    //     'state' => 'sp',
    //     'city' => 'Sao Paulo',
    //     'neighborhood' => 'Jardim Paulistano',
    //     'zipcode' => '01451001'
    //   ]
    // ],
    // 'shipping' => [
    //   'name' => 'Nome de quem receberá o produto',
    //   'fee' => 1020,
    //   'delivery_date' => '2018-09-22',
    //   'expedited' => false,
    //   'address' => [
    //     'country' => 'br',
    //     'street' => 'Avenida Brigadeiro Faria Lima',
    //     'street_number' => '1811',
    //     'state' => 'sp',
    //     'city' => 'Sao Paulo',
    //     'neighborhood' => 'Jardim Paulistano',
    //     'zipcode' => '01451001'
    //   ]
    // ],
    // 'items' => [
    //   [
    //     'id' => '1',
    //     'title' => 'R2D2',
    //     'unit_price' => 300,
    //     'quantity' => 1,
    //     'tangible' => true
    //   ],
    //   [
    //     'id' => '2',
    //     'title' => 'C-3PO',
    //     'unit_price' => 700,
    //     'quantity' => 1,
    //     'tangible' => true
    //   ]
    // ]
// );

// // Converte o array para JSON
// $json = json_encode($data);

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, 'https://api.pagar.me/1/transactions');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Authorization: Bearer ' . env('PAGARME_API_KEY')
// ));

// $response = curl_exec($ch);
// dd($response);

// curl_close($ch);
