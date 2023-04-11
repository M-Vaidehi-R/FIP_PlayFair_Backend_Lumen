<!DOCTYPE html>
<html>

<head>
    <title>Volunteers List</title>
</head>

<body>
    <h1>Volunteers List</h1>
    <div class="user_detail_info">
      <div class="user_info">
          <p class="label"><span>First Name:</span> {{ $volunteer->fname }}</p><br>
          <p class="label"><span>Last Name:</span> {{ $volunteer->lname }}</p><br>
          <p class="label"><span>Email:</span> {{ $volunteer->email }}</p><br>
          <p class="label"><span>Phone:</span> {{ $volunteer->phone }}</p><br>
          <p class="label"><span>Status Id:</span> {{ $volunteer->status_id}}</p><br>
      </div>
  </div>

  <div>
    <button><a href="/admin/volunteers/{{ $volunteer->id }}">Update User</a></button>
    <button><a href="">Delete User</a></button>
    
  </div>

</body>

</html>

