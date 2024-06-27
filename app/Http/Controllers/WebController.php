<?php

namespace App\Http\Controllers;

use App\Models\Catalogs;
use App\Models\Services;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index',[
            'services' => Services::all()->take(4)
        ]);
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }
}
