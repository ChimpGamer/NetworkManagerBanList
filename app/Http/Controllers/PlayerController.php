<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Punishment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PlayerController extends Controller
{

    public function show(string $id): View {
        return view('player')->with('player', Player::findOr($id, function () use ($id) {
            return Player::where('username', '=', $id)->firstOrFail();
        }));
    }

    public function searchPlayer(Request $request) {
        $username = $request->input('username');
        $players = Player::select('username', 'uuid')
            ->where('username', 'like', '%' . $username . '%')
            ->get();
        $result = '[';
        foreach ($players as $player) {
            $result .= '{"username":"' . $player->username . '", "icon":"https://crafatar.com/avatars/' . $player->uuid . '?size=20"}, ';
        }
        $result = substr_replace($result, "", -1);
        $result = substr_replace($result, "", -1);
        return $result . ']';
    }
}
