<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relaciones</title>
</head>
<body>
    <ul>
        @foreach ($user->phones as $phone)
            <li>Prefix: {{ $phone->prefix }}</li>
            <li>Number: {{ $phone->phone_number }}</li>
        @endforeach
    </ul>
</body>
</html>
