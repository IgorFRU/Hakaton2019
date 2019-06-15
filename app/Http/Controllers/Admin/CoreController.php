<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    public function index() {
        
        return view('dashboard/dashboard');
    }
}
