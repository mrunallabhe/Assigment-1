<?php
// Script 1: Create a Form to Save User Information
// HTML form for user input
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>User Registration</h2>
    <form method="POST" action="save_user.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="Name" name="Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="male" name="Gender" value="Male" required>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="female" name="Gender" value="Female" required>
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <select class="form-control" id="City" name= "City" required>
                <option value="Mumbai">Mumbai</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Chennai">Chennai</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Delhi">Delhi</option>
                <option value="Pune">Pune</option>
                <option value="Nagpur">Nagpur</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Srinagar">Srinagar</option>
                <option value="Raipur">Raipur</option>
                <option value="Bhopal">Bhopal</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>