{{-- @extends('layouts.admin')

@section('content')
    <h1>Volunteers</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($volunteers as $volunteer)
            <tr>
                <td>{{ $volunteer->fname }}</td>
                <td>{{ $volunteer->lname }}</td>
                <td>{{ $volunteer->email }}</td>
                <td>{{ $volunteer->phone }}</td>
                <td>{{ $volunteer->status_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection --}}
<!-- resources/views/admin/volunteers.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Volunteers List</title>
</head>
<body>
    <h1>Volunteers List</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                {{-- <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th> --}}
                <th>Status</th>
                <th>ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($volunteers as $volunteer)
                <tr>
                    <td>{{ $volunteer->fname }}</td>
                    {{-- <td>{{ $volunteer->lname }}</td>
                    <td>{{ $volunteer->email }}</td>
                    <td>{{ $volunteer->phone }}</td> --}}
                    <td>{{ $volunteer->status_name }}</td>
                    <td>{{ $volunteer->id}}</td>
                    <td>
                    <button><a href="/admin/volunteers/{{$volunteer->id}}">VIEW DETAILS</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


