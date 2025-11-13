<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCollectiveController extends Controller
{
    public function index()
    {
        return view('templates.new-collective');
    }
}
