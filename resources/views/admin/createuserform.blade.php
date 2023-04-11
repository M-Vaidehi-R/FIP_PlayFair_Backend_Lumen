<!DOCTYPE html>
<html>
<head>
    <title>Volunteer Details</title>
</head>
<body>
    <h1>Create Form</h1>


<form method="POST" action="/admin/volunteers/create">
 
    
    <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname" required>
    
    <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required>
    
    <button type="submit">Create Volunteer</button>
  </form>


</body>
</html>
  