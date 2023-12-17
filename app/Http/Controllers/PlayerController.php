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

    public function search(string $username) {
        $players = Player::select('username', 'uuid')
            ->where('username', 'like', '%' . $username . '%')
            ->get();
        $result = [];
        foreach ($players as $player) {
            $result[] = array('username' => $player->username, 'icon' => 'https://minotar.net/avatar/' . $player->uuid . '/20');
        }
        return $result;
    }
}
