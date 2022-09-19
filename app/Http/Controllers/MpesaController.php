<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class MpesaController extends Controller
{
    //mpesa testing
    public function mpesa()
    {



        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerBuyGoodsOnline';
        $Amount = '1';
        $PartyA = '600977';
        $PartyB = '600000';
        $PhoneNumber = '0758316560';
        $CallBackURL = 'https://pestflash.com';
        $AccountReference = 'Marcus Demo';
        $TransactionDesc = 'Lipa Karo';
        $Remarks = 'Thank You';
        $stkPushSimulation = $mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );

        dd($stkPushSimulation);
    }
}
