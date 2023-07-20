<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relaciones</title>
</head>
<body>
    <h3>{{ $user->phoneSim->company}}</h3>
    <ul>
        @foreach ($user->roles as $role)
            <li>ROle: {{ $role->name }} Addedby: {{$role->pivot->added_by}}</li>
        @endforeach
    </ul>
</body>
</html>
