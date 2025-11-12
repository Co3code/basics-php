<?php
    /*
 * FILE: view_messages.php
 * PURPOSE: Display all contact form messages from database
 * AUTHOR: Co3code with Seek
 */
    // Include database connection - NEED database to get messages
    require_once 'config.php';

    //sql query to GET data from datavase (SELECT = read data)
    $sql = "SELECT * FROM messages ORDER BY id DESC";
    // SELECT * = get all columns
    // FROM messages = from our messages table
    // ORDER BY id DESC = show newest messages first

    // Execute the query and store result
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message-inbox admin panel</title>
    <style>
        body{
            font-family:Arial, sans-serif;
            margin:40px;
        }
        .messages{
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            background-color: #f9f9f9;

        }
        .header{
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>messages inbox</h1>
        <p>all contact form submissions</p>
    </div>
    <?php
        // Check if we have any messages
        if ($result->num_rows > 0) {
            // num_rows = count how many messages we have

            // Loop through each message and display it
            while ($row = $result->fetch_assoc()) {

                // fetch_assoc() = get next row as associative array
                // $row['name'] gets the name column value
                // $row['email'] gets the email column value
                // $row['messages'] gets the message column value
            ?>
       <div class="messages">
        <h3>  👤                                                                 <?php echo $row['name']; ?></h3>
        <p><strong>📧 email:</strong>                                                                                                                                                         <?php echo $row['email']; ?></p>
        <p><strong> 💬messages</strong><?php echo $row['messages']; ?></p>
        <small><em>🕒 RECEIVED</em></small>
       </div>
       <?php

               }

           } else {
               //if no message in database
               echo "<p> no messages yet. tell people to use contact form</p>";
           }
           //close the database connection
           $conn->close();
       ?>
       <br>
        <a href="contact.php">back to contact form </a>
</body>
</html>