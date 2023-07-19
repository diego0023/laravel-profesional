@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" id="" value="{{ $note->title }}">
        @error('title')
            <p style="color: red"> {{ $message}}</p>
        @enderror

        <label>Description:</label>
        <input type="text" name="description" id="" value="{{ $note->description }}">
        @error('description')
            <p style="color: red"> {{ $message}}</p>
        @enderror

        <input type="submit" value="Update">
    </form>
@endsection
