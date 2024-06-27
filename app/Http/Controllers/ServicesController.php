<?php

namespace App\Http\Controllers;

use App\Models\Catalogs;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('service', [
            'service' => Services::paginate(6)
        ]);
    }
}
