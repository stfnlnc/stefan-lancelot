<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VasteController extends Controller
{
    public function index()
    {
        return response('', 404);
        // return view('templates.vaste');
    }
}
