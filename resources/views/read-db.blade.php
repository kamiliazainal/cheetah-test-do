<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Travel Bucket List</h1>
    <h2>Places I'd Like to Visit</h2>
    <ul>
        @foreach ($read_list as $names)
            <li>{{ $names->name }}</li>
        @endforeach
    </ul>

    <h2>Places I've Already Been To</h2>
    <ul>
        @foreach ($read_list as $place)
            <li>{{ $place->visited }}</li>
        @endforeach
    </ul>
</body>
</html>
