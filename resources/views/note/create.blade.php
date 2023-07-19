@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf

        <label>Title:</label>
        <input type="text" name="title" id=""> <br>
        @error('title')
            <p style="color: red"> {{ $message}}</p>
        @enderror


        <label>Description:</label>
        <input type="text" name="description" id="">
        @error('description')
            <p style="color: red"> {{ $message }}</p>
        @enderror


        <input type="submit" value="Create">
    </form>
@endsection
