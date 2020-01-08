<div style="margin-left: 187px" class="col-lg-10">
    <br>
    <br>
        <form style="text-align: center" class="ahihi"  action="" method="post">
            MÃ SV :<input style="width: 113px" type="text" name="msv" >
            Điểm QT:<input style="width: 113px" type="text" name="dqt" >
            Điểm Thi:<input style="width: 113px" type="text" name="dt" >
            TS qt:<input style="width: 113px" type="text" name="tsqt" >
            TS t:<input style="width: 113px" type="text" name="tst" >
            Mã Môn:<input style="width: 113px" type="text" name="mm" >
            <input style="text-align: center" type="submit" value="nhập">

        </form>
        <?php
         $msv = $_POST['msv'];
         $dqt = $_POST['dqt'];
         $dt = $_POST['dt'];
         $tsqt = $_POST['tsqt'];
         $tst = $_POST['tst'];
         $dtk = ($dqt*($tsqt/100))+($dt*($tst/100));
        
         $mm = $_POST['mm'];
         $conn = mysqli_connect('localhost','root','','hang');
         if(!$conn){
             die('loi vl'.mysqli_connect_error() );
         }
         else{
            $sql = "INSERT INTO `diem` VALUES ('$msv','$dqt','$dt','$dtk','$mm')";
             $result = mysqli_query($conn,$sql);
         }
                            ?>
        
        <table style="text-align: center" class="table table-hover">
            <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã SV</th>
            <th scope="col">Điểm QT</th>
            <th scope="col">Điểm CK</th>
            <!-- <th scope="col">Trọng số ĐQT</th>
            <th scope="col">Trọng số ĐCK</th> -->
            <th scope="col">Điểm KT</th>
            <th scope="col">Ma Mon</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                  $diem = substr($_GET['page'],4,10);
                    
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = "SELECT d.MaSinhVien, d.DiemQt, d.DiemThi, d.DiemKT, d.MaMonHoc from diem d join sinhvien sv JOIN lop l on d.MaSinhVien=sv.MaSinhVien AND sv.MaLop=l.MaLop  where l.TenLop='$diem' ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                        echo'<tr><th scope="row">'.$bien.'</th>
                                        <td>'.$row['MaSinhVien'].'</th>
                                        <td>'.$row['DiemQt'].'</td><td>'.$row['DiemThi'].'</td><td>'.$row['DiemKT'].'</td><td>'.$row['MaMonHoc'].'</td></tr>';
                                    }}
                                    else{
                                    }
                            }
                            ?>
            </tr>
          
            
        </tbody>
        </table>
 </div>