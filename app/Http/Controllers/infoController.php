<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function index(){
        $response = Http::get('https://blockchain.info/ticker');
        $data = $response->json();
        // dd($data);
        return view('about',compact('data'));

    }  public function konversibtc(){
        $responsex = Http::get('https://blockchain.info/ticker');
        $datax = $responsex->json();
        $response = Http::get('https://blockchain.info/tobtc?currency=USD&value=1');
        $data = $response->json();
        // dd($data);
        return view('btc-rp',compact('data','datax'));
    }
 public function konversiidr(){
        $responsex = Http::get('https://blockchain.info/ticker');
        $datax = $responsex->json();

        $response = Http::get('https://blockchain.info/tobtc?currency=USD&value=1');
        $data = $response->json();
        // dd($data);
        return view('rp-btc',compact('data','datax'));
    }
}
