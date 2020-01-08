
<?php
$mmh = $_POST['mmh'];
$tmh = $_POST['tmh'];
$stc = $_POST['stc'];
$hk = $_POST['hk'];
$gd = $_POST['gd'];
$nh = $_POST['nh'];
$mn = $_POST['mn'];
$conn = mysqli_connect('localhost','root','','hang');
if(!$conn){
    die('loi vl'.mysqli_connect_error() );
}
else{
    echo'kết nối thành công';
  if($mmh==''){
  }
  else{
   $sql = "INSERT INTO `monhoc`(`MaMonHoc`, `TenMonHoc`, `SoTinChi`, `HocKi`, `GiaiDoan`, `NamHoc`, `MaNganh`) VALUES ('$mmh','$tmh','$stc','$hk','$gd','$nh','$mn')";
    echo $sql;
   $result = mysqli_query($conn,$sql);
   if(!$result){
       echo 'thất bại';
      
   }
  }
  
}
                   ?>
<div class="col-lg-10 " style="    margin-left: 257px !important;
    text-align: center;">
    <form action="" method="post">
    <br><label for="">Mã môn học</label>
   <input type="text" name="mmh">
    <br><br><label for="">Tên môn học</label>
   <input type="text" name="tmh">
    <br><br><label for="">Số Tín Chỉ</label>
    <input type="text" name="stc" id=""> 
    <br><br><label for="">Học kỳ</label>
    <input type="text" name="hk" id=""> 
    <br><br><label for="">Giai Đoạn</label>
    <input type="text" name="gd" id="">
    <br><br><label for=""> Năm Học</label>
    <input type="text" name="nh" id="">
    <br><br><label for="">Mã Ngành</label>
    <select name="mn">
          <?php     
        
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = "SELECT * FROM `nganh`";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo '<option value="'.$row['MaNganh'].'">'.$row['MaNganh'].'</option>';
                                       }}
                                    else{
                                    }
                            }
                            ?>
            </select> <br><br>
    <button type="submit" class="btn btn-success">Thêm</button>
    </form>
</div> 