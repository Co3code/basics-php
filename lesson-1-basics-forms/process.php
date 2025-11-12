<?php
require_once 'config.php';
echo "<h1> FORM RECEIVED!</h1>";
//get form data
$name    = test_input($_POST['username']);
$email   = test_input($_POST['email']);
$message = test_input($_POST['message']);

echo "Hello <strong>$name</strong>!";
echo "Your email <strong>$email</strong>";
echo " Your message <strong>$message</strong>";

echo "<br><h3>SUCCESS!</h3>";
$sql = "INSERT INTO messages (name, email, messages) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === true) {
    echo "<br><h3>success data save to database</h3>";
} else {
    echo "<br><h3>error:" . $conn->error . "</h3> ";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$conn->close();
 