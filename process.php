<?php
@session_start();
include "server.php";

if(isset($_POST['sub'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


$sql = "INSERT INTO `todo_day2` (`fname`, `email`, `username`, `password`, `cpassword`)
VALUE ('$fname', '$email', '$username', '$password', '$cpassword')";
$result = $conn->query($sql);

if($result == True){
    echo "Registration Successfull";
}else{
    die($conn->error);
}
}

// .....................................................login logic..............................................

if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$sql = "SELECT * FROM `todo_day2` WHERE `username`='$username'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $_SESSION['username'] = $username;
    header("location: index.php");
}else{
    echo "Invalid user details";
}
}

?>