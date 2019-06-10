<?php

namespace App\Http\Controllers;
use App\Announce;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $announces = Announce::all();
        return view('home')->with('announces', $announces);
    }

    public function show($id)
    {
        $announce = Announce::findOrFail($id);
        return view('product')->with('announce', $announce);
    }
}
