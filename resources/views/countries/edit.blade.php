<!DOCTYPE html>
<html>
<head>
    <title>Edit Country</title>
</head>
<body>
    <h1>Edit Country</h1>
    <form action="{{ route('countries.update', $country->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $country->name }}" required>
        <label>Code:</label>
        <input type="text" name="code" value="{{ $country->code }}" maxlength="3" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
