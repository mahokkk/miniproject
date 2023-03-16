<?php

namespace App\Http\Controllers;

use App\Models\Tolak;
use Illuminate\Http\Request;

class TolakController extends Controller
{
    public function index(){
        $data = Tolak::all();
        return view('tolak',  compact ('data'));
    }

    public function tampil(Request $request, $id){
        $data = Tolak::find($id);
        return view('tampil', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Tolak::find($id);
        $data->update($request->all());
        if($request->hasfile('gambar')){
            $request->file('gambar')->move('gambarvoucher/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tolaks')->with('success','Data Berhasil Di Edit');
    }

    public function hapus($id){
        $data = Tolak::find($id);
        $data->delete();
        return redirect()->route('tolaks')->with('success','Data Berhasil Di Hapus');
    }
}
