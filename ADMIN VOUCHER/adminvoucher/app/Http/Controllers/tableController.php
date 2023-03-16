<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\orang;
use App\Models\Voucher;
use Illuminate\Supports\Facedes\DB;
use App\Http\Controllers\Controller;


class tableController extends Controller
{
    public function orang(){
        // $data = Toko::all();
        $kategori= kategori::all();
        $orang = orang::all();
        $voucher= Voucher::all();
        $dataLabel = json_encode(array("Baju", "Celana", "Jaket"));
        $dataValue = json_encode([10, 20, 15]);
        $data = json_encode(array("Baju" => 30, "Celana" => 10));
        // dd(json_decode($dataLabel));
        return view('dashboard',[
            'title'=>'Dashboard',

        ],compact('kategori', 'orang','voucher', 'dataLabel', 'dataValue', 'data'));
    }
}
