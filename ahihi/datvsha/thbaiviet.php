<?php
    session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
        <?php include "header.php" ?>
        <?php
//quy trinh 5 bước
//bước 1 
//tạo biến conn để check kết nói đc ko (1-0,t-f)
 $conn = mysqli_connect('localhost','root','','userr');
 // sử lý lỗi
 if(!$conn){
     // câu lệnh bắt lỗi
     die('co loi xay ra'.mysqli_connect_error() );
 } 
 else{
     
 $sql = " SELECT * FROM bai_viet";
 mysqli_set_charset($conn,'UTF8');
 $result = mysqli_query($conn,$sql);
 // bước 4 lay ra danh sach
 if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      echo '<div class="row">
      <div class="col-md-3">'.'<img src="img/imgbv/'.$row['anh'].'">'.'  </div>
      <div class="col-md-9">'.'<p class="td"  style="font-size: 30px"  >'.$row['tieude']."</p></br>".$row['noidung'].'  </div>
      </div>';
    }
    }
 }
 mysqli_close($conn);
     ?>
              <?php include "footer.php" ?>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>