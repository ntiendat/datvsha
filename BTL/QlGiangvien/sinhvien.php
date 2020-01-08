
<div class="col-lg-10">
<button  id="create" type="button" class="btn btn-primary "data-toggle="modal" data-target="#myModal" >Thêm sinh viên</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form action="" method="post">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Thêm sinh viên</h5>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Mã sinh viên :</label>
          <input type="text" class="form-control" name="msv" id="" aria-describedby="helpId" placeholder="">
          <label for="">Họ Tên :</label>
          <input type="text" class="form-control" name="ht" id="" aria-describedby="helpId" placeholder="">
          <label for="">Ngày sinh :</label>
          <input type="text" class="form-control" name="ns" id="" aria-describedby="helpId" placeholder="">
          <label for="">Địa Chỉ :</label>
          <input type="text" class="form-control" name="dc" id="" aria-describedby="helpId" placeholder="">
          <label for="">Chứng Minh Thư :</label>
          <input type="number" class="form-control" name="cmt" id="" aria-describedby="helpId" placeholder="">
          <label for="">Lớp : </label>
          <input style="border: 0px soild while" type="text" name="" id="">
          <select name="l">
          <?php 
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = "SELECT * FROM `lop`  ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo '<option value="'.$row['MaLop'].'">'.$row['MaLop'].'</option>';
                                       }}
                                    else{
                                    }
                            }
                            ?>
            </select>
        </div>
      </div>
      <div class="modal-footer" class="btn btn-primary" value="Thêm">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    
  </form>
  </div>
</div>

                          
<?php

         $msv = $_POST['msv'];
         $ht = $_POST['ht'];
         $ns = $_POST['ns'];
         $dc = $_POST['dc'];
         $cmt = $_POST['cmt'];
         $l = $_POST['l'];
         $conn = mysqli_connect('localhost','root','','hang');
         if(!$conn){
             die('loi vl'.mysqli_connect_error() );
         }
         else{
           if($msv==''){

           }
           else{
            $sql = "INSERT INTO `sinhvien` VALUES ('$msv','$cmt','$ht','$ns','$dc','$l',null)";
            $result = mysqli_query($conn,$sql);
           }
           
         }
                            ?>
<?php
         $smsv = $_POST['smsv'];
         $sht = $_POST['sht'];
         $sns = $_POST['sns'];
         $sdc = $_POST['sdc'];
         $scmt = $_POST['scmt'];
         $slop = $_POST['slop'];
         $an = $_POST['an'];
         $conn = mysqli_connect('localhost','root','','hang');
         if(!$conn){
             die('loi vl'.mysqli_connect_error() );
         }
         else{
            $sql = "UPDATE `sinhvien` SET `MaSinhVien`='$smsv',`ChungMinhThu`='$scmt',`HoTen`='$sht',`NgaySinh`='$sns',`DiaChi`='$sdc',`MaLop`='$slop',`TenTaiKhoan`= null WHERE `MaSinhVien`='$an' ";
            $result = mysqli_query($conn,$sql);
            }

                            ?>
                   <?php
         $anxoa = $_POST['anxoa'];
         $conn = mysqli_connect('localhost','root','','hang');
         if(!$conn){
             die('loi vl'.mysqli_connect_error() );
         }
         else{
            $sql = " DELETE FROM `sinhvien` WHERE `MaSinhVien`='$anxoa' ";
            $result = mysqli_query($conn,$sql);
            echo $anxoa;
           
         }
                            ?>
        <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col">Số thứ tự</th>
            <th scope="col">Mã sinh viên</th>
            <th scope="col">Họ Tên</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Ghi chú</th>
            </tr>
           </thead>
        <tbody>
            
            <?php 
                  $tenlop = substr($_GET['page'],8,10);
                  
               
                   
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = "SELECT sv.MaSinhVien,sv.HoTen,sv.DiaChi,sv.NgaySinh,sv.ChungMinhThu  FROM  sinhvien sv JOIN lop l ON sv.MaLop=l.MaLop WHERE l.TenLop='$tenlop'    ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo '<form method="POST">';
                                        echo ' <tr>
                                        <th scope="row">'.$bien.'</th>
                                        <td id="smsv'.$bien.'">'.$row['MaSinhVien'].'</td>
                                        <td id="sht'.$bien.'">'.$row['HoTen'].'</td>
                                        <td id="sdc'.$bien.'">'.$row['DiaChi'].'</td>
                                        <td id="sns'.$bien.'">'.$row['NgaySinh'].'</td>
                                        <td id="scmt'.$bien.'">'.$row['ChungMinhThu'].'</td>
                                        <td>
                                        <button  id="'.$bien.'" onclick="sua(this.id)" data-toggle="modal" data-target="#suasv" type="button" class="btn  btn-danger " style=" font-size: 10px;">Sửa</button>
                                        <button  id="'.$bien.'"  onclick="xoa(this.id)" data-toggle="modal" data-target="#xoasv" type="button" class="btn btn-warning" style=" font-size: 10px;">Xóa</button>
                                        </td>';
                                        echo '</form>  </tr>';
                                       }}
                                    else{
                                    }
                            }
                            ?>
                            <tr>
                            </tr>
        </tbody>
        </table>
        

<!-- Modal -->
<div class="modal fade" id="suasv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form action="" method="post">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">sửa sinh viên</h5>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <p id="aha" >Mã sinh viên :</p>
          <input type="text" class="form-control" name="smsv" id="masvv" aria-describedby="helpId" placeholder="">
          <input type="text" hidden  class="form-control" name="an" id="masinhvien" aria-describedby="helpId" placeholder="">
          <label for="">Họ Tên :</label>
          <input type="text" class="form-control" name="sht"  id="htv" aria-describedby="helpId" placeholder="">
          <label for="">Ngày sinh :</label>
          <input type="text" class="form-control" name="sns" id="nsv" aria-describedby="helpId" placeholder="">
          <label for="">Địa Chỉ :</label>
          <input type="text" class="form-control" name="sdc" id="dcv" aria-describedby="helpId" placeholder="">
          <label for="">Chứng Minh Thư :</label>
          <input type="number" class="form-control" name="scmt" id="cmtv" aria-describedby="helpId" placeholder="">
          <label for="">Lớp : </label>
         
          <select name="slop">
          <?php     
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = "SELECT * FROM `lop` ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo '<option value="'.$row['MaLop'].'">'.$row['MaLop'].'</option>';
                                       }}
                                    else{
                                    }
                            }
                            ?>
            </select>
        </div>
      </div>
      <div class="modal-footer" class="btn btn-primary" value="Thêm">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    
  </form>
  </div>

 </div>

 <div class="modal fade" id="xoasv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form action="" method="post">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Xóa sinh viên</h5>
      </div>
      <input type="text"  hidde  class="form-control" name="anxoa" id="maxoa" aria-describedby="helpId" placeholder="">
     <p style="    text-align: center;color: red;font-weight: bold;font-size: 23px;" >Bạn có muốn xóa sinh viên này ko ?</p>
      <div class="modal-footer" class="btn btn-primary" value="Thêm">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Xóa</button>
      </div>
    </div>
    
  </form>
  </div>

 </div>
 <script src="js.js" ></script>
 