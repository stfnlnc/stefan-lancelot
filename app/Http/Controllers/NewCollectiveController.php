<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCollectiveController extends Controller
{
    public function index()
    {
        return response('', 404);
        // return view('templates.new-collective');
    }
}
