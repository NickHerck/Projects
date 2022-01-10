@extends('layout.main')

@section('title')
    <title>Clubs</title>
@endsection

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="club-name" content="{{$club->name}}">
    <meta name="base-url" content="{{url('')}}">
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <div class="row">
        <form method="POST" action="{{url('club/' . $club->name . '/' . 'update')}}">
            @method('PATCH')
            @csrf
            <div class="form-group">
            <br/>
            <br/>
                <label for="name">Clubnaam</label>
                <input type="text" name="name" required class="form-control" value="{{$club->name}}" id="name">
            </div>
            <div class="form-group">
                <label for="playerCount">Aantal spelers</label>
                <input type="number" name="playerCount" readonly class="form-control" id="playerCount"
                       value="{{count($players)}}">
            </div>
            <div class="form-group">
                <label for="rank">Positie</label>
                <input type="number" name="rank" required class="form-control" value="{{$club->rank}}" id="rank">
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
            <br/>
            <br/>
        </form>
        
    </div>

    <div>
            <a class="btn-epic" href="{{url('player/new/' . $club->name)}}">Nieuwe speler toevoegen</a>
        </div>   <br/>
        <br/>   

    <div class="row">
        @if(count($players) > 0)
            <ul class="list-group w-50" id="list">
                @foreach($players as $player)
                    <li class="list-group-item">
                        <a href="{{url('player/' . $player->id)}}">{{$player->name}}</a>

                        <a href="{{url('club/deletePlayer/' .  $player->id)}}" class="x-class">X</a>
                    </li>
                @endforeach
            </ul>
        @else
            <a href="{{url('player/new/' . $club->name)}}">Nieuwe speler toevoegen</a>
        @endif
        <div class="ml-3">
            @foreach($positions as $position)
                <button class="btn btn-primary" onclick="filterPlayers('{{$position->name}}')"
                        type="button">{{$position->name}}</button> <br/> <br/>
            @endforeach
            <button class="btn btn-primary" onclick="Top3Players()"
                    type="button">Top 3
            </button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const CSRF_TOKEN = document.head.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const CLUB_NAME = document.head.querySelector('meta[name="club-name"]').getAttribute('content');
        const BASE_URL = document.head.querySelector('meta[name="base-url"]').getAttribute('content');

        const list = document.getElementById('list');

        const filterPlayers = async position => {
            const response = await fetch(`${BASE_URL}/club/filter`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                body: JSON.stringify({
                    filter: position,
                    clubName: CLUB_NAME
                })
            });

            const result = await response.json();
            list.innerText = '';
            list.insertAdjacentHTML('beforeend', buildList(result));
        };

        const Top3Players = async () => {
            const response = await fetch(`${BASE_URL}/club/filter/top3`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                body: JSON.stringify({
                    clubName: CLUB_NAME
                })
            });

            const result = await response.json();
            list.innerText = '';
            list.insertAdjacentHTML('beforeend', buildList(result));
        };

        const buildList = players => Object.keys(players).reduce(
            (previous, current) => {
                const value = players[current];
                return previous + `<li class="list-group-item">
                    <a href='${BASE_URL}/player/${value.id}'>${value.name}</a>
                     <a href='${BASE_URL}/club/deletePlayer/${value.id}' class='x-class'>X</a>
                        </li>`;
            },
            '');
    </script>
@endsection
