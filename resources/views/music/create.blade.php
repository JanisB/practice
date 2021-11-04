@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('music.index') }}">Back</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Group</th>
                <th scope="col">File</th>
            </tr>
        </thead>
        <tbody>
        <form action="{{ route('music.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <tr>
                <th><input type="text" name="name" id="name"></th>
                <td><input type="text" name="group" id="group"></td>
                <td>
                    <input type="file" name="file" id="file">
                    <input type="submit" value="Upload Music" name="submit">
                </td>
            </tr>
        </form>
        </tbody>
    </table>
</div>
@endsection
