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
<h1>Animal Data</h1>
<ul>
    <li><b>Animal name:</b> {{ $animal->name }}</li>
    <li><b>Date of birth:</b> {{ $animal->dob }}</li>
    <li><b>Female?:</b> {{ $animal->female }}</li>
    <li><b>Father:</b> {{ $animal->father }}</li>
    <li><b>Mother:</b> {{ $animal->mother }}</li>
    <li><b>Active?:</b> {{ $animal->active }}</li>
    <li><b>Owned?:</b> {{ $animal->own }}</li>
</ul>
</body>
</html>