<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home', []);
    }

    public function works()
    {
        $works = Work::all();
        return view('works', [
            'works' => $works,
        ]);
    }

    public function services()
    {
        return view('services', []);
    }
}
