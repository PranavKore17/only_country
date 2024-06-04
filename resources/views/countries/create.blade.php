<!DOCTYPE html>
<html>
<head>
    <title>Add Country</title>
</head>
<body>
    <h1>Add Country</h1>
    <form action="{{ route('countries.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Code:</label>
        <input type="text" name="code" maxlength="3" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>
