<?php
 session_start();
$id = $_POST['article_id']
$title = $_POST['title'];
$content = $_POST['content'];
$image =$_POST['images'];

$conn = mysqli_connect('localhost','root','','ntt');

if(!$conn){
    die('can not connect'.mysqli_connect_error() );
}
else{
    $sql = "INSERT INTO `articles`(`article_id`, `title`, `content`, `images`)
            VALUES ('$id','$title','$content','$image') ";
    mysqli_set_charset($conn,'UTF8');
    if(!$result = mysqli_query($conn,$sql)){
        echo'failed';
    }
    else{
       header("location:NTTadmin.php");
    }
}
?>