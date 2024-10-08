<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class ClientViewsController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function appointment()
    {
        return view('appointment');
    }
}
