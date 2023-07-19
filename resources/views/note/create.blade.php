@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        
        <label>Title:</label>
        <input type="text" name="title" id="">

        <label>Description:</label>
        <input type="text" name="description" id="">

        <input type="submit" value="Create">
    </form>
@endsection
