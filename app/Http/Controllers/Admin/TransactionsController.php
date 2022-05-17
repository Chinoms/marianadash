<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransactionsController extends Controller
{
    public function askForPayment(Request $request)
    {

        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|numeric'
        ]);
        $payment_info = new Transaction();
        $payment_info->eexiprofiles_id = $request->id;
        $payment_info->trans_description = $request->description;
        $payment_info->trans_amount = $request->amount / 100;

        $payment_info->save();
        return back()->with('message', 'Transaction amount set');
    }

    public function verifyTransaction(Request $request)
    {
        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer sk_test_0828220d7974a445e0b98c255018e16d1dde59e7',
        //     'Cache-Control' => 'no-cache',
        // ])->get('https://api.paystack.co/transaction/verify/', [
        //     'reference' => 462458438
        // ]);
        // return $response;
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$request->reference,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_0828220d7974a445e0b98c255018e16d1dde59e7",
            "Cache-Control: no-cache",
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          //echo $response;
          //die();
          //return $request->reference;
          $response = json_decode($response);
          //dd($response);
          if(1 == $response->status){
            //echo 'hjh';
            //die();
            Transaction::where('eexiprofiles_id', $request->id)->update(['trans_status' => 1]);
            return view('admin.confirm-payment');
          }
        }
          return back()->with('message', 'Something went wrong. We could not verify your transaction. Please contact support.');

    }

    public function markAsPaid(Request $request){
      Transaction::where('eexiprofiles_id', $request->id)->update(['trans_status' => 1]);
      return back()->with('message', 'Payment verified.');
    }
}
