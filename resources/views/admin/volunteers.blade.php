<!DOCTYPE html>
<html>

<head>
    <title>Volunteers List</title>
</head>

<body>
    <h1 hidden>Volunteers List</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                {{-- <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th> --}}
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($volunteers as $volunteer)
                <tr>
                    <td>{{ $volunteer->fname }}</td>
                    <td>{{ $volunteer->status_name }}</td>
                    <td>
                        <button><a href="/admin/volunteers/{{ $volunteer->id }}/edit">EDIT DETAILS</a></button>

                        <form method="POST" action="/admin/volunteers/{{ $volunteer->id }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">DELETE VOLUNTEER</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <button><a href="/createUser">CREATE VOLUNTEER</a></button>
    </div>
 
</body>

</html>
