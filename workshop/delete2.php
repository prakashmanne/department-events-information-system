<?php
$conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM workshop WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        // echo '<script> alert("Data Deleted"); </script>';
        header("location: view.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>