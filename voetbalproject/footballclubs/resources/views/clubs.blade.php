@extends('layout.main')

@section('title')
    <title>Clubs</title>
@endsection

@section('content')
<h1 class="epic-title"> FOOTBALL WEBSITE </h1>
    @if(count($clubs) > 0)
        <ul class="list-group">
            @foreach($clubs as $club)
                <li class="list-group-item">
                    <a href="{{url('club/detail') . '/' . $club->name}}">
                        {{$club->name}}
                    </a>
                    <a href="{{url('club/delete') . '/' . $club->name}}" class="x-class">
                        X
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        No records have been found.
    @endif
    <br/>
    <a href="{{url('club/new')}}" class="btn-epic2">Nieuwe club maken</a>
@endsection
