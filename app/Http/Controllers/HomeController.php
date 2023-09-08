<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Punishment;

class HomeController extends Controller
{

    public function index() {
        $total_punishments = Punishment::count();
        return view('home')->with('total_punishments', $total_punishments);
    }
}
