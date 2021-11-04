@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('music.create') }}">Create</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Group</th>
                <th scope="col">Media</th>
            </tr>
        </thead>
        <tbody>
        @foreach($musicList as $music)
            <tr>
                <th scope="row">{{ $music->id }}</th>
                <td>{{ $music->name }}</td>
                <td>{{ $music->group }}</td>
                <td>
                <audio controls>
                    <source src="{{asset('/storage/music/'.$music->link)}}" type="audio/mpeg">
                </audio>  
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
