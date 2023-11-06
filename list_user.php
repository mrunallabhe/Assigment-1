<?php
// Script 3: Display User Information in an HTML Table
// Replace database connection details as before.

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "users";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>User List</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['Name']; ?></td>
                <td><?php echo $user['Email']; ?></td>
                <td><?php echo $user['Gender']; ?></td>
                <td><?php echo $user['City']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>