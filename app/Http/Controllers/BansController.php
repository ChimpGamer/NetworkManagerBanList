<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BansController extends Controller
{
    public function index() {
        return view('bans');
    }
}
