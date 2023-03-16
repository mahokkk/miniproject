<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Voucher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vouchers')->insert([
            'nama_voucher' => ("Crewneck Diskon 60%"),
            'deskripsi' => ("Dapatkan Kode Promo Diskon Crewneck 60% Di Uniqlo"),
            'kode' => ("INIKODE25"),
            'toko' => ("Uniqlo"),
            'kategori' => ("Pakaian"),
            'status' => ("Menunggu"),
            'gambar' => ("uniqlo1.png"),
            'masa_berlaku' => Carbon::now(30),
        ]);
    }
}
