<?php

namespace App\Http\Controllers;

use App\Models\Hike;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $hikes = Hike::orderBy('created_at', 'desc')->get();
        return view('home', ['hikes' => $hikes]);
    }

    public function test()
    {
        $hikes = Hike::orderBy('created_at', 'desc')->get();
        return view('test', ['hikes' => $hikes]);
    }
}
