<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\View\View;

class PlayerController extends Controller
{

    public function show(string $id): View {
        return view('player')->with('player', Player::findOr($id, function () use ($id) {
            return Player::where('username', '=', $id)->firstOrFail();
        }));
    }
}
