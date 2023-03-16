<?php

namespace App\Http\Controllers;

use App\Models\konfirmasi;
use Illuminate\Http\Request;

class konfirmasiController extends Controller
{
    public function index(){
        $data = konfirmasi::all();
        return view('konfirmasi', compact('data'));
    }
}
