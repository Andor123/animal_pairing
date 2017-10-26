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
<h1>Animal Update</h1>
<form method="post" action="/list_animals">
    {!! csrf_field() !!}
    <label for="name">Animal name:</label><br>
    <input type="text" name="name" id="name" value="{{ $animal->name }}"><br><br>
    <label for="dob">Date of birth:</label><br>
    <input type="number" name="dob" id="dob" value="{{ $animal->dob }}"><br><br>
    <label for="female">Female?:</label><br>
    <input type="number" name="female" id="female" max="1" min="0" value="{{ $animal->female }}"><br><br>
    <label for="father">Father:</label><br>
    <input type="number" name="father" id="father" value="{{ $animal->father }}"><br><br>
    <label for="mother">Mother:</label><br>
    <input type="number" name="mother" id="mother" value="{{ $animal->mother }}"><br><br>
    <label for="active">Active?:</label><br>
    <input type="number" name="active" id="active" max="1" min="0" value="{{ $animal->active }}"><br><br>
    <label for="own">Owned?:</label><br>
    <input type="number" name="own" id="own" max="1" min="0" value="{{ $animal->own }}"><br><br>
    <input type="submit" name="submit" id="submit" value="Update">
</form>
</body>
</html>