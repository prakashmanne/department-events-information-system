<?php

session_start();

if(isset($_POST['adminlogin']))
{   $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
    $query_run =  mysqli_query($conn, $query);

    if(mysqli_fetch_array($query_run))
    {
        // echo '<script> alert("Admin Logged IN !!") </script>';
        header("Location: index1.php");
    }
    else
    {
        echo '<script> alert("Admin username  or Password is WRONG !!") </script>';
		
    }
}


?>