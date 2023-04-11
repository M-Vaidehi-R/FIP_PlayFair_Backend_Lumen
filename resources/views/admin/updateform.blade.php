<!DOCTYPE html>
<html>
<head>
    <title>Volunteer Details</title>
</head>
<body>
    <h1>Volunteer Details</h1>
    <form method="POST" action="/admin/volunteers/{{ $volunteer->id }}">
        <input type="hidden" name="_method" value="PUT">

        <label for="fname">First Name:</label>
        <input type="text" name="fname" value="{{ $volunteer->fname }}"><br>

        <label for="lname">Last Name:</label>
        <input type="text" name="lname" value="{{ $volunteer->lname }}"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $volunteer->email }}"><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" value="{{ $volunteer->phone }}"><br>

        <label for="status">Status:</label>
        <input type="text" name="status" value="{{ $volunteer->status_id }}"><br>

        <button type="submit" name="submit">Update Volunteer</button>
    </form>
</body>
</html>


