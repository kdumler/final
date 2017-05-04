<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Faculty</title>


</head>
<body>
<ul>
    <h1>Faculty List</h1>

    <ul></ul>
    @foreach($facultyList as $person)
        <li>{{ $person }}</li>
    @endforeach
</ul>
<p>{{ count($facultyList) }}</p>

</body>
</html>
