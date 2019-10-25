<?php
 session_start();
$bv1 = $_POST['mabv1'];
$bv2 = $_POST['mabv2'];
$bv3 = $_POST['mabv3'];
$bv4 = $_POST['mabv4'];
$bv5 = $_POST['mabv5'];
$conn = mysqli_connect('localhost','root','','userr');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );
}
else{
    $sql = "UPDATE `baivietnoibat` SET `bv1`=".$bv1.",`bv2`=".$bv2.",`bv3`=".$bv3.",`bv4`=".$bv4.",`bv5`=".$bv5 ;
    mysqli_set_charset($conn,'UTF8');
    
   if(!$result = mysqli_query($conn,$sql)){
                  echo'that bai';
   }
   else{
       header("location:btl.php");
   }
    }
?>