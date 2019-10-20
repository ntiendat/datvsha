<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$_SESSION["username"]="";
$conn = mysqli_connect('localhost','root','','ntt');

if(!$conn){
    die('can not connect'.mysqli_connect_error() );
}
else{
    $sql = " SELECT * FROM users where '$user' = username and '$pass' = pass  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['admin']=='1'){
                    session_start();
                //    session_register("username");
                   $_SESSION["username"]=$user;
                   header("location:NTTadmin.php");
            }else{
                header("location:index.php");
            }
        }
    }
    else{
        header("location:index.php");
    }
}
?>