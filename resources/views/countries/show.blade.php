<!DOCTYPE html>
<html>
<head>
    <title>Show Country</title>
</head>
<body>
    <h1>Country Details</h1>
    <p>ID: {{ $country->id }}</p>
    <p>Name: {{ $country->name }}</p>
    <p>Code: {{ $country->code }}</p>
    <a href="{{ route('countries.index') }}">Back</a>
</body>
</html>
