<?php

namespace App\Http\Controllers;

use App\Models\voucher;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $data=Kategori::all();
        // $kategori=DB::table('vouchers')->where('kategori','=',$kategori);

        if(request('search')){
            $data = voucher::where('nama_voucher', 'like', '%' . request('search').'%')->orWhere('kategori', 'like', '%' .request('search') . '%')->get();
        }else{
            $data = voucher::get();
        }


        return view('kategori', [
            'data' => $data,
            'data' => $data,
            'tittle' => request('search')
            
    
        ]);
        // return view('admin.kategori.tablesgeneral', [
        //     'data' => Voucher::where('kategori', $kategori)
        // ]);

    }
}
