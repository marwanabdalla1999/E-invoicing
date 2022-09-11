<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prgayman\Zatca\Facades\Zatca;


class create_invoicing extends Controller
{
    public function invoicing(Request $request){
        $qrCode = zatca()
            ->sellerName($request->item_name)
            ->vatRegistrationNumber("123456789123456")
            ->timestamp("2021-12-01T14:00:09Z")
            ->totalWithVat($request->price)
            ->vatTotal('15.00')
            ->toQrCode(
                qrCodeOptions()
                    ->format("svg")
                    ->color(0,0,0,100)
                    ->size(300)
            );


return $qrCode;
    }
}
