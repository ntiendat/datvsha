

<?php
         $tmn = $_POST['tmn'];
         $ttn = $_POST['ttn'];
      
         $conn = mysqli_connect('localhost','root','','hang');
         if(!$conn){
             die('loi vl'.mysqli_connect_error() );
         }
         else if ($ttn=='' && $tmn==''){
             echo ' chưa nhập gì';
         }
         else{
            $sql = "INSERT INTO `nganh`(`MaNganh`, `TenNganh`) VALUES ('$tmn','$ttn')";
             $result = mysqli_query($conn,$sql);
         }
                            ?>    
<div class="col-lg-10 " style="margin-left: 350px !important;">
<form action="" method="post">
    <br><br><label for="">Mã Ngành </label><br>
    <input type="text" name="tmn" id="">
    <br><br><label for="">Tên Ngành Ngành</label><br>
    <input type="text" name="ttn" id=""> <br><br>
    <button type="submit" class="btn btn-success">Thêm</button></form>
</div>