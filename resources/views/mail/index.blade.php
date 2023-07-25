<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send me mail</title>
    <style>
        a {
            text-decoration: none;
            background-color: aquamarine;
            padding: 15px;
            border-radius: 10px;
            color: gray;
            cursor: pointer;
            margin: 15px;
        }

        a:hover{
            background-color: cadetblue;
        }
    </style>
</head>
<body>
    <a href="{{ route( 'mailme' ) }}">Mail me</a>
</body>
</html>

