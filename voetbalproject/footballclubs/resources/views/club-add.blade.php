@extends('layout.main')

@section('title')
    <title>New club!</title>
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
        <form method="POST" action="{{url('club/add')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" required class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="rank">Rank</label>
                <input type="number" name="rank" required class="form-control" id="rank">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection
