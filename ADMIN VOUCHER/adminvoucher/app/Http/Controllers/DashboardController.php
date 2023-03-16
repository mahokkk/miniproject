<?php

namespace App\Http\Controllers;


use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function orang()
   {
    return view('dashboard');
   }
}
