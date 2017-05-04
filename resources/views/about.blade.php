<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>


</head>
<body>
<ul>
    <h1>List of Routes</h1>

    <ul></ul>
        <li>{{ $routes }}</li>
</ul>
*<p>{{ count($facultyList) }}</p>

</body>
</html>
