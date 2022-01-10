@extends('layout.main')

@section('title')
    <title>{{$player->name . ' - detail'}}</title>
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
        <form method="POST" action="{{url('player') . '/' . $player->id . '/update'}}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Voornaam + achternaam</label>
                <input type="text" name="name" required class="form-control" value="{{$player->name}}" id="name">
            </div>
            <div class="form-group">
                <label for="number">Nummer</label>
                <input type="number" name="number" required class="form-control" value="{{$player->number}}" id="number">
            </div>
            <div class="form-group">
                <label for="score">Score</label>
                <input type="number" name="score" required class="form-control" value="{{$player->score}}" id="score">
            </div>
            <div class="form-group">
                <label for="position">Positie</label>
                <select name="position" required class="form-control" id="position" {{ $player->position === 'retired' ? 'readonly' : '' }}>
                    <option selected>{{$player->position}}</option>
                    @foreach($positions as $position)
                        <option>{{$position->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="club">Club</label>
                <select name="club" required class="form-control" id="club">
                    <option selected>{{$player->club_name}}</option>
                    @foreach($clubs as $club)
                        <option>{{$club->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection
