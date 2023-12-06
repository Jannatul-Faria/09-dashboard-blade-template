<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
}
