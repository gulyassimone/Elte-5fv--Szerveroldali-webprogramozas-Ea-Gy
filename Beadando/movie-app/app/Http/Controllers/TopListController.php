<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopListController extends Controller
{
    public function index(){
        return view('toplist');
    }
}
