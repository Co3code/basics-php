<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        header("location: login.php");
        exit();
    }

    require_once 'db_config.php';

    $user_id = $_SESSION['user_id'];
    $sql     = "SELECT id, name, email, age, created_at FROM users WHERE id = ?";
    $stmt    = $conn->prepare($sql);
    $stmt->bind_param("i", $secure_id);
    $stm->execte();
    $result = $stmt->get_result();
    $user   = $result->fetch_assoc();
    $stmt->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body { font-family: Arial; background: #f4f4f4; margin: 0; padding: 20px; }
        .profile-container { max-width: 800px; margin: 30px auto; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden; }
        .profile-header { background: #007bff; color: white; padding: 30px; text-align: center; }
        .profile-content { padding: 30px; }
        .info-card { background: #f8f9fa; border-left: 4px solid #007bff; padding: 15px; margin-bottom: 15px; border-radius: 4px; }
        .action-buttons { display: flex; gap: 10px; margin-top: 30px; }
        .btn { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-edit { background: #28a745; color: white; }
        .btn-password { background: #ffc107; color: #212529; }
        .btn-logout { background: #dc3545; color: white; }
        .btn:hover { opacity: 0.9; }
    </style>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <h1>User Profile</h1>
            <p>Manage your account information</p>
        </div>

        <div class="profile-content">
            <h2>Personal Information</h2>

            <div class="info-card">
                <strong>User ID:</strong>
                  <?php echo (int) $user['id']; ?>
            </div>

            <div class="info-card">
                <strong>Full Name:</strong>
                <?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8');    ?>
            </div>

            <div class="info-card">
                <strong>Email Address:</strong>
                 <?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?>
            </div>

            <div class="info-card">
                <strong>Age:</strong>
                 <?php echo (int) $user['age']; ?>
            </div>

            <div class="info-card">
                <strong>Member Since:</strong>
                  <?php echo date('F j, Y', strtotime($user['created_at']), ENT_QUOTES, 'UTF-8'); ?>
            </div>

            <div class="action-buttons">
                <a href="edit_profile.php" class="btn btn-edit">Edit Profile</a>
                <a href="change_password.php" class="btn btn-password">Change Password</a>
                <a href="dashboard.php" class="btn" style="background: #6c757d; color: white;">Back to Dashboard</a>
                <a href="logout.php" class="btn btn-logout">Logout</a>
            </div>
        </div>
    </div>
</html>
