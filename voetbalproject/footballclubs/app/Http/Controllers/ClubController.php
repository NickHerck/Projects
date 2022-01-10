<?php

namespace App\Http\Controllers;

use App\Club;
use App\Http\Requests\NewClubRequest;
use App\Http\Requests\UpdateClubRequest;
use App\Player;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClubController extends Controller
{
    public function index()
    {
        return view('clubs', ['clubs' => Club::orderBy('rank')->get()]);
    }

    public function detail(string $clubName)
    {
        $club = Club::find($clubName);
        $players = $club->players;
        $positions = Position::all();

        return view('club-detail', [
            'club' => $club,
            'players' => $players,
            'positions' => $positions
        ]);
    }

    public function add(NewClubRequest $request)
    {
        $validated = $request->validated();

        $club = new Club;

        $club->name = $validated['name'];
        $club->rank = $validated['rank'];

        $club->save();

        return redirect()->route('club-detail', ['clubName' => $validated['name']]);
    }

    public function update(UpdateClubRequest $request, string $clubName)
    {
        $validated = $request->validated();

        $club = Club::find($clubName);

        $club->name = $validated['name'];
        $club->rank = $validated['rank'];

        $club->save();

        return redirect()->route('club-detail', ['clubName' => $validated['name']]);
    }

    public function deletePlayer(int $playerId)
    {
        $player = Player::find($playerId);

        $player->position = 'retired';

        $player->save();

        $player->delete();

        return back();
    }

    public function filterPlayers(Request $request)
    {
        $validator = Validator::make($request->json()->all(), [
            'filter' => 'required|string|max:255',
            'clubName' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400);
        }

        $json = $request->json();

        $clubName = $json->get('clubName');
        $filter = $json->get('filter');

        $players = Player::withTrashed()
            ->where('club_name', '=', $clubName)
            ->where('position', '=', $filter)
            ->get();

        return $players;
    }

    public function filterTopScores(Request $request)
    {
        $validator = Validator::make($request->json()->all(), [
            'clubName' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400);
        }

        $json = $request->json();

        $clubName = $json->get('clubName');

        $players = Player::orderBy('score', 'desc')
            ->where('club_name', '=', $clubName)
            ->take(3)
            ->get();

        return $players;
    }

    public function delete(string $clubName)
    {
        $player = Club::find($clubName);

        $player->delete();

        return back();
    }
}
