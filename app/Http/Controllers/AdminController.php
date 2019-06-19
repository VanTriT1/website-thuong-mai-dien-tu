<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        dd('a');
        return view('layouts.admin.index');
    }
}
