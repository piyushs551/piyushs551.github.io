<?php
    session_start();
    
    // connect to the database
    $db = mysqli_connect("localhost", "root", "", "login");
    
    
            
            //session_start();
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
            

             //Hash password before storing for security purpose
            $sql = "SELECT name FROM user WHERE username='$username' AND pass='$password'";
            $result = mysqli_query($db, $sql);
            $numberrows = 0;
            $numberrows = mysqli_num_rows($result);
            
         if($numberrows > 0)    {
                $_SESSION['message'] = "You are now logged in";
                $_SESSION['username'] = $username;
                ?>
                alert("you are logged in");
                <?php
                echo " hey".$_SESSION['name'];
                header("location: main_Shubham_Patel.html");
                //redirect to home page
        }
            else{
                header("location: error.html");
            }
    
    
?>