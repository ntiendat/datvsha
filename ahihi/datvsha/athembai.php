<?php
 session_start();
$td = $_POST['tieuDe'];
$h = $_POST['noiDung'];
$a =$_POST['anh'];
$user = $_POST['user'];
GLOBAL $user;
$pass = $_POST['pass'];
GLOBAL $pass;

$conn = mysqli_connect('localhost','root','','userr');

if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );

}
else{
    
    $sql = " INSERT INTO `bai_viet`(`mabv`, `tieude`, `noidung`, `anh`) VALUES ('','$td','$h','$a') ";
    mysqli_set_charset($conn,'UTF8');
    
   if(!$result = mysqli_query($conn,$sql)){
                  echo'that bai';
                  echo $a ;
              

   }
   else{

    
       header("location:thbaiviet.php");
   }
    }
?>