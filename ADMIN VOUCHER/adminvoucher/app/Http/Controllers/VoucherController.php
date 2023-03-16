<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index(){
        $data = Voucher::all();
        return view('datavoucher', compact ('data'));
    }

    public function tambahvoucher(){
        return view('tambahvoucher');
    }

    public function insertdata(Request $request){
        $data = Voucher::create($request->all());
        if($request->hasfile('gambar_voucher')){
            $request->file('gambar_voucher')->move('gambarvoucher/', $request->file('gambar_voucher')->getClientOriginalName());
            $data->gambar_voucher = $request->file('gambar_voucher')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('voucher')->with('success','Data Berhasil Di Tambah');
    }

    public function tampildata(Request $request, $id){
        $data = Voucher::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Voucher::find($id);
        $data->update($request->all());
        if($request->hasfile('gambar_voucher')){
            $request->file('gambar_voucher')->move('gambarvoucher/', $request->file('gambar_voucher')->getClientOriginalName());
            $data->gambar_voucher = $request->file('gambar_voucher')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('voucher')->with('success','Data Berhasil Di Edit');
    }

    public function delete($id){
        $data = Voucher::find($id);
        $data->delete();
        return redirect()->route('voucher')->with('success','Data Berhasil Di Hapus');
    }
}
