@extends('layout.main')

@section('title')
    <title>Add a new player!</title>
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
        <form method="POST" action="{{url('player/add')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" required class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" name="number" required class="form-control" id="number">
            </div>
            <div class="form-group">
                <label for="score">Score</label>
                <input type="number" name="score" required class="form-control" id="score">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <select name="position" required class="form-control" id="position">
                    @foreach($positions as $position)
                        <option>{{$position->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="club">Club</label>
                <select name="club" required class="form-control" id="club">
                    @foreach($clubs as $club)
                        <option {{$clubName === $club->name ? 'selected' : ''}}>{{$club->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Toevoegen</button>
        </form>
    </div>
@endsection
