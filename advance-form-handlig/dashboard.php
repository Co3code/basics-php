<?php 
session_start();

if (!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body { font-family: Arial; margin: 0; padding: 0; background: #f4f4f4; }
        .dashboard { max-width: 800px; margin: 30px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .welcome { background: #007bff; color: white; padding: 20px; border-radius: 8px; text-align: center; }
        .user-info { padding: 20px; }
        .logout-btn { background: #dc3545; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block; }
        .logout-btn:hover { background: #c82333; }
        .menu { display: flex; gap: 10px; margin-top: 20px; }
        .menu-item { flex: 1; background: #f8f9fa; padding: 15px; text-align: center; border-radius: 4px; text-decoration: none; color: #333; border: 1px solid #ddd; }
        .menu-item:hover { background: #e9ecef; }
    </style>
</head>
<body>
    
    <div class="dashboard">
        <div class="welcome">
            <h1> welcome,
            <p>You are successfully logged in.</p>
        </div>

        <div class="user-info">
        <h3>Your account information</h3>
        <p><strong>User ID:</strong></p>
        <p><strong>Name:</strong></p>
        <p><strong>Email:</strong></p>
        <div class="menu">
            <a href="edit_profile.php" class="menu_item">edit profile</a>
            <a href="change_password.php" class="menu_item">change password</a>

        </div>
        <br>
        <a href="logout.php" class="logout-btn">logout</a>
        </div>
    </div>





</html>
</body>

