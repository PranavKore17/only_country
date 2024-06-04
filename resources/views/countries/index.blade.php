<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Country CRUD</title>
</head>
<body>
    <h1>Countries</h1>
    <a href="{{ route('countries.create') }}">Add Country</a>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Actions</th>
        </tr>
        @foreach ($countries as $country)
            <tr>
                <td>{{ $country->id }}</td>
                <td>{{ $country->name }}</td>
                <td>{{ $country->code }}</td>
                <td>
                    <a href="{{ route('countries.show', $country->id) }}">Show</a>
                    <a href="{{ route('countries.edit', $country->id) }}">Edit</a>
                    <form action="{{ route('countries.destroy', $country->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
