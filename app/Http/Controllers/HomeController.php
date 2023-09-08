<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Punishment;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $total_punishments = Punishment::count();
        return view('home')->with('total_punishments', $total_punishments);
    }

    public function searchPlayer(Request $request) {
        $username = $request->input('username');
        $players = Player::select('username', 'uuid')
            ->where('username', 'like', '%' . $username . '%')
            ->get();
        $result = [];
        foreach ($players as $player) {
            $result[] = array('username' => $player->username, "icon" => 'https://crafatar.com/avatars/' . $player->uuid . '?size=20');
        }
        return $result;
    }
}
