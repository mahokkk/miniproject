<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function pieChart()
    {
        $data = [
            'Baju' => 20,
            'Celana' => 30,
            'Jaket' => 10,
        ];
        
         return view('dashboard', compact('data'));
    }
}
