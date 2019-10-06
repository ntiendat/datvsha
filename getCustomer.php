<?php

//quy trinh 5 bước
//bước 1 
//tạo biến conn để check kết nói đc ko (1-0,t-f)
 $conn = mysqli_connect('localhost','root','220913','art');
 // sử lý lỗi
 if(!$conn){
     // câu lệnh bắt lỗi
     die('co loi xay ra'.mysqli_connect_error() )
 }
 else{
     echo ' khong co loi' ;
     
     
 
 $sql = " SELECT * FROM Custommers";
 mysqli_set_charset($row,'UTFB');
 $result = mysqli_query($conn,$sql);

 // bước 4 
 if (mysqli_num_row($result)>0){
    while(mysqli($row = mysqli_fetch_assoc($result))){
        echo $row['FirstName'].' '.$row['LastName'].'<br>';
    }
    }

 }

 mysqli_close($row);
     