<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{    
     $username = $_POST['username'];
     $password = $_POST['password'];
     
     $sql = "INSERT INTO login (username,pass)
     VALUES ('$username','$password')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>