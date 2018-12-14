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
$itemvalue = mysqli_real_escape_string($link, $_REQUEST['itemnumber']);


 
// attempt insert query execution
$sql = "INSERT INTO cart (itemvalue) VALUES	 ('$itemvalue')";
if(mysqli_query($link, $sql)){
    header("Location:  shop.html");

    //redirect to home page 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>