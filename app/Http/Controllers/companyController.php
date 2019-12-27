<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
    public function about()
    {
        return view('company.tentang');
    }
    public function blog()
    {
        return view('company.blog');
    }
    public function event()
    {
        return view('company.event');
    }


    public function tahunbaru()
    {
        $cek_tanggal = date('d - M - Y');
        if ($cek_tanggal == '01 - 01 - 2020') {
            echo ('SELAMAT TAHUN BARU 2020 BAGI YANG MERAYAKAN! </br>');
            echo ('Selamat tahun baru dan semoga kita terbebas dari keraguan </br> dan ketakutan, dan akan selalu digantikan oleh keberanian dan kebahagiaan. ');
        } else {
            echo ('Belum tahun baru! Sabar ya. Udah ga sabar mau main kembang api ya? </br>');
            echo ('Ini masih tanggal ' . $cek_tanggal);
        }
    }
}
