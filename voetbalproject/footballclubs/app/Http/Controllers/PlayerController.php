<?php

namespace App\Http\Controllers;

use App\Club;
use App\Http\Requests\NewPlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Player;
use App\Position;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function detail(int $id)
    {
        $player = Player::find($id);
        $positions = Position::where('name', '!=', $player->position)->get();
        $clubs = Club::where('name', '!=', $player->club_name)->get();
        return view('player-detail', [
            'player' => $player,
            'positions' => $positions,
            'clubs' => $clubs
        ]);
    }

    public function update(UpdatePlayerRequest $request, int $id)
    {
        $validated = $request->validated();

        $player = Player::find($id);

        $player->name = $validated['name'];
        $player->score = $validated['score'];
        $player->number = $validated['number'];
        $player->position = $validated['position'];
        $player->club_name = $validated['club'];

        $player->save();

        return redirect()->route('club-detail', ['clubName' => $validated['club']]);
    }

    public function addPlayerView(string $clubName = null) {
        // this is dirty but idgaf

        $positions = Position::all();
        $clubs = Club::all();
        return view('player-add', [
            'positions' => $positions,
            'clubs' => $clubs,
            'clubName' => $clubName
        ]);
    }

    public function add(NewPlayerRequest $request) {
        $validated = $request->validated();

        $player = new Player;

        $player->name = $validated['name'];
        $player->score = $validated['score'];
        $player->number = $validated['number'];
        $player->position = $validated['position'];
        $player->club_name = $validated['club'];

        $player->save();

        return redirect()->route('club-detail', ['clubName' => $validated['club']]);
    }
}
