<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Work;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $infos = Info::firstOrFail();
        return view('home', [
            'infos' => $infos
        ]);
    }

    public function works()
    {
        $works = Work::orderBy('sort_order')->get();
        return view('works', [
            'works' => $works,
        ]);
    }

    public function services()
    {
        return response('', 404);
        // return view('services', []);
    }
}
