<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bot";
$conn = mysqli_connect($servername, $username, $password, $database);

// if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//     }
//    echo "Connected successfully";
// Uploads files
if (isset($_POST['save']))
 { // if save button on the form is clicked
    // name of the uploaded file
    $queries = $_POST['queries'];
    // echo $quries; 
    $replies = $_POST['replies'];
            
    $sql = "INSERT INTO chatbot (queries,replies) VALUES ('$queries','$replies')";
            if (mysqli_query($conn, $sql)) {
                echo "Data inserted successfully";
            }else {
            echo "Failed.";
        }
 }
 ?>