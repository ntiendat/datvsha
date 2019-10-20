<?php
 session_start();
$name = $_POST['name'];
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conn = mysqli_connect('localhost','root','','ntt');

if(!$conn){
    die('can not connect'.mysqli_connect_error() );
}
else{
        $sql = "INSERT INTO `users`(`name`, `username`, `pass`, `email`, `admin`) 
                VALUES ('$name','$user','$pass','$email',0)";
        mysqli_set_charset($conn,'UTF8');
        if(!$result = mysqli_query($conn,$sql)){
            echo'failed';
        }
        else{
            header("location:NTTadmin.php");
        }
    }
?>