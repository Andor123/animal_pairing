<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>List Animals</title>
        <style>
            ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <h1>Animal List</h1>
        <a href="">Create a new animal</a><br><br>
        <ul>
            @foreach($animals as $animal)
                <li><b>Animal name:</b> {{ $animal->name }}</li>
                <li><b>Date of birth:</b> {{ $animal->dob }}</li>
                <br>
                <a href="/list_animals/view/{{ $animal->id }}">View</a>
                <a href="/list_animals/update/{{ $animal->id }}">Update</a>
                <a href="">Delete</a>
                <br><br>
            @endforeach
        </ul>
    </body>
</html>