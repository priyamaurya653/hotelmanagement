<?php
session_start();
include_once('db_conn.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $_SESSION['email'] =  $_POST['email'];
    if( $email == ""){
        $_SESSION['error'] = "Please fill email and password.";
        header('location:ragistration.php');
    }
    else{
            $sql1 = "insert into persons(name,email,phone) values('$name','$email',$phone)";
            $result1 = mysqli_query($conn,$sql1);
            header('location:ragistration.php');    
        }   
}
else{
    header('location:alluser.php');
}
?>