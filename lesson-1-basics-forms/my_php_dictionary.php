<?php
// /*
//  * MY PHP CODE DICTIONARY
//  * Created by: Co3code with Seek
//  * Updated: Today's Date
//  * Purpose: My personal guide to PHP syntax!
//  */

// // ========================
// // FILE INCLUSION
// // ========================
// require_once 'file.php'; // - MUST have this file (STOPS if missing)
// include 'file.php';      // - WANT this file (CONTINUES if missing)
// require_once 'file.php'; // - MUST have but load ONLY ONCE

// // ========================
// // DATABASE CONNECTIONS
// // ========================
// $conn = new mysqli(); // - Create NEW database connection object
// $conn->connect_error; // - Property: Check if connection failed
// $conn->close();       // - Method: Close the connection

// // ========================
// // DATABASE OPERATIONS
// // ========================
// $conn->query($sql); // - Run SQL commands (INSERT, SELECT, etc.)
// $conn->error;       // - Property: Get last error message
// $sql = "INSERT..."; // - SQL query string to save data

// // ========================
// // SECURITY FUNCTIONS
// // ========================
// trim($data);             // - Remove spaces from start/end of string
// stripslashes($data);     // - Remove backslashes (\) from string
// htmlspecialchars($data); // - Convert < > & " ' to safe HTML entities

// // ========================
// // FORM HANDLING
// // ========================
// $_POST['field'];    // - Get data from form with POST method
// $_GET['parameter']; // - Get data from URL parameters
// test_input($data);  // - Custom function to clean user input

// // ========================
// // OUTPUT & DISPLAY
// // ========================
// echo "text";    // - Print/output text to browser
// echo "<br>";    // - HTML line break
// echo $variable; // - Display variable value

// // ========================
// // VARIABLES & SYNTAX
// // ========================
// $variable = "value"; // - Create variable (always starts with $)
// $conn->method();     // - Arrow (->): Access object's method/function
// // Comment here             // - Double slash: Single-line comment
// /* Multi-line comment */// - Slash-asterisk: Multi-line comment

// // ========================
// // ERROR HANDLING
// // ========================
// die("message");   // - STOP everything and show message
// if (condition) {}// - IF statement: Make decisions
// //===               // - Triple equals: Check value AND type
// 

// $result-> num_rows // count number of rows result 
// $row = $result->fetch_assoc()// get the next  rowas associative array
// $row['colum_name']//     access   colum value from row
// SELECT * FROM table //get all data form table



?>
