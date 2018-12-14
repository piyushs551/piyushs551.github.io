<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);

 
// attempt insert query execution
$sql = "INSERT INTO user (name, email, username, pass) VALUES ('$name', '$email', '$username', '$pass')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";

    $_SESSION['user'] = '$name';
    
    header("Location:  main_Shubham_Patel.html");

    ?>
    alert("new user created");
    <?php
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>