<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomangController extends Controller
{
    public function index()
    {
        return view("komang");
    }
}
