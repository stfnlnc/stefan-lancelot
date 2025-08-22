<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VasteController extends Controller
{
    public function index()
    {
        return view('templates.vaste');
    }
}
