<?php
// Script 2: Save User Information to the Database
// Ensure you've created a MySQL database and table for this purpose.
// Replace the database connection details with your own.

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "users";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['Name'];
        if($name==''){
            echo "Name should not be empty!".'<br>';
        }
        $email = $_POST['Email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo 'Email should be valid!'.'<br>';
        }
        $gender = $_POST['Gender'];
        if(!isset($gender)){
            echo "Please select a gender!".'<br>';
        }
        $city = $_POST['City'];

        $stmt = $conn->prepare("INSERT INTO users (name,email,gender,city) VALUES (?, ?, ?, ?)");
        //$stmt = $PDO->prepare($sql);
        $stmt->execute([$name, $email, $gender, $city]);

        // Redirect to the list page or display a success message
        header('Location: list_user.php');
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>