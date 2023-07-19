@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" id="" value="{{ $note->title }}">

        <label>Description:</label>
        <input type="text" name="description" id="" value="{{ $note->description }}">

        <input type="submit" value="Update">
    </form>
@endsection
