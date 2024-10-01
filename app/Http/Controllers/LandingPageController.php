<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = Pengguna::all();
        return view('LandingPage', compact('data'));
    }
    
}
