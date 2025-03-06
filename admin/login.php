<?php
require_once './connect_db.php';

// Get user and pass 
$getuser = $_POST['username'];
$getpass = $_POST['password'];

// Query get data from DB
$query = "SELECT * FROM adminlogin";

$result = mysqli_query($conn, $query);



if (empty($getuser)) {
    header("location:./index.php");
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($getuser == $row['username']) {
            if ($getpass == $row['password']) {
                // echo $row['username'].'-'.$row['password'].'-'.$getuser.'-'.$getpass;
                header("location:./dashboard/index.php?username=$getuser&password=$getpass");
            } else {
                header('location:./index.php');
            }
        } else {
            header('location:./index.php');
        }
    }
}
