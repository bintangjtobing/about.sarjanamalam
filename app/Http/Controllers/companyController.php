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
}
