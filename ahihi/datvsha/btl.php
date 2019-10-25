<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Trang chủ</title>
</head>
<body>
  <div class="body">
    <?php include "header.php"; ?>
    <div class="container">
      <div class="mb1">
        <div class="row">
          <div class="col-md-9">
            <a class="td" href="" style="font-size: 30px "> <u style="color:rgb(231, 172, 84)"> Tin tức </u> </a>
            <div class="row">
              <div class="col-md-4">
               





              <?php 
                $conn = mysqli_connect('localhost','root','','userr');
if(!$conn){
    die('lỗi kết nối '.mysqli_connect_error() );
}
else{
  $mabv=null;
  $sql = "SELECT * FROM `baivietnoibat` ";
  mysqli_set_charset($conn,'UTF8');
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
          $mabv=$row['bv1'];
      }
    }
    $sql = "SELECT * FROM `bai_viet` WHERE mabv = $mabv  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<img src="img/imgbv/'.$row['anh'].'">';
            echo  ' <a href=""> <b>'.$row['tieude'].'</b>
        </a>';
            echo'<p>'.$row['noidung'].'<p>';
        }
        }
        else{
                echo 'lỗi SQL';
        }}       
              ?>









              </div>
              <div class="col-md-4">
              <?php 
                $conn = mysqli_connect('localhost','root','','userr');
if(!$conn){
    die('lỗi kết nối '.mysqli_connect_error() );
}
else{
  $mabv=null;
  $sql = "SELECT * FROM `baivietnoibat` ";
  mysqli_set_charset($conn,'UTF8');
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
          $mabv=$row['bv2'];
      }
    }
    $sql = "SELECT * FROM `bai_viet` WHERE mabv = $mabv  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<img src="img/imgbv/'.$row['anh'].'">';
            echo  ' <a href=""> <b>'.$row['tieude'].'</b>
        </a>';
            echo'<p>'.$row['noidung'].'<p>';
        }
        }
        else{
                echo 'lỗi SQL';
        }}       
              ?>


              </div>
              <div class="col-md-4">
              <?php 
                $conn = mysqli_connect('localhost','root','','userr');
if(!$conn){
    die('lỗi kết nối '.mysqli_connect_error() );
}
else{
  $mabv=null;
  $sql = "SELECT * FROM `baivietnoibat` ";
  mysqli_set_charset($conn,'UTF8');
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
          $mabv=$row['bv3'];
      }
    }
    $sql = "SELECT * FROM `bai_viet` WHERE mabv = $mabv  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<img src="img/imgbv/'.$row['anh'].'">';
            echo  ' <a href=""> <b>'.$row['tieude'].'</b>
        </a>';
            echo'<p>'.$row['noidung'].'<p>';
        }
        }
        else{
                echo 'lỗi SQL';
        }}       
              ?>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <a class="td" href="" style="font-size: 30px"> <u style="color:rgb(231, 172, 84)">Media </u> </a>
            <iframe width="270" height="140" src="https://www.youtube.com/embed/iZ1EUr2DAMs" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <ul>
              <li><a href=""> Nguyễn Tất Thành - 20 năm 1 trặng đường</a></li>
              <li><a href=""> Nguyễn Tất Thành - 20 năm 1 trặng đường</a></li>
              <li><a href=""> Nguyễn Tất Thành - 20 năm 1 trặng đường</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="mb2">
        <div class="row">
          <div class="col-md-4">




          
            <a class="td" href="" style="font-size: 30px"> <u style="color:rgb(231, 172, 84)"> Hợp tác quốc tế </u> </a>
            <?php 
                $conn = mysqli_connect('localhost','root','','userr');
if(!$conn){
    die('lỗi kết nối '.mysqli_connect_error() );
}
else{
  $mabv=null;
  $sql = "SELECT * FROM `baivietnoibat` ";
  mysqli_set_charset($conn,'UTF8');
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
          $mabv=$row['bv4'];
      }
    }
    $sql = "SELECT * FROM `bai_viet` WHERE mabv = $mabv  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<img src="img/imgbv/'.$row['anh'].'">';
            echo  ' <a href=""> <b>'.$row['tieude'].'</b>
        </a>';
            echo'<p>'.$row['noidung'].'<p>';
        }
        }
        else{
                echo 'lỗi SQL';
        }}       
              ?>





          </div>
          <div class="col-md-4">
            <a class="td" href="" style="font-size: 30px"> <u style="color:rgb(231, 172, 84)"> Môi trường hoạt động </u>
            </a>
            <?php 
                $conn = mysqli_connect('localhost','root','','userr');
if(!$conn){
    die('lỗi kết nối '.mysqli_connect_error() );
}
else{
  $mabv=null;
  $sql = "SELECT * FROM `baivietnoibat` ";
  mysqli_set_charset($conn,'UTF8');
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
          $mabv=$row['bv5'];
      }
    }
    $sql = "SELECT * FROM `bai_viet` WHERE mabv = $mabv  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<img src="img/imgbv/'.$row['anh'].'">';
            echo  ' <a href=""> <b>'.$row['tieude'].'</b>
        </a>';
            echo'<p>'.$row['noidung'].'<p>';
        }
        }
        else{
                echo 'lỗi SQL';
        }}       
              ?>
          </div>
          <div class="col-md-4">
            <a class="td" href="" style="font-size: 30px"> <u style="color:rgb(231, 172, 84)"> Sự Kiện nổi bật </u> </a>
            <ul class="list-unstyled">
              <li class="media event">
                <div class="d-flex align-items-center mr-3 thumb c-white">
                  <span class="inner text-center w-100">
                    Sep<br>
                    <b>14</b>
                  </span>
                </div>
                <div class="media-body">
                  <h5 class="title mt-0"><a href="/web/su-kien/le-ky-ket-hop-tac-voi-tap-chi-dan-chu-phap-luat">Lễ ký
                      kết hợp tác với Tạp chí Dân chủ &amp; Pháp luật</a></h5>
                  <ul class="breadcrumb mb-0 bgm-white">
                    <li class="breadcrumb-item col-xs-auto time">
                      <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>08:00
                    </li>
                    <li class="breadcrumb-item col-xs-auto">Phòng họp 1 - Cơ sở An Phú Đông</li>
                  </ul>
                </div>
              </li>
              <li class="media event">
                <div class="d-flex align-items-center mr-3 thumb c-white">
                  <span class="inner text-center w-100">
                    Sep<br>
                    <b>14</b>
                  </span>
                </div>
                <div class="media-body">
                  <h5 class="title mt-0"><a href="/web/su-kien/hop-mat-giang-vien-thuc-hanh-khoa-luat">Họp mặt giảng
                      viên thực hành Khoa Luật</a></h5>
                  <ul class="breadcrumb mb-0 bgm-white">
                    <li class="breadcrumb-item col-xs-auto time">
                      <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>08:00
                    </li>
                    <li class="breadcrumb-item col-xs-auto">Phòng họp 1 - Cơ sở An Phú Đông</li>
                  </ul>
                </div>
              </li>
              <li class="media event">
                <div class="d-flex align-items-center mr-3 thumb c-white">
                  <span class="inner text-center w-100">
                    Sep<br>
                    <b>11</b>
                  </span>
                </div>
                <div class="media-body">
                  <h5 class="title mt-0"><a
                      href="/web/su-kien/chuong-trinh-dong-hanh-cung-suc-khoe-hoc-duong-tu-van-cham-soc-dieu-tri-cac-ben-ve-da-nam-2019">Chương
                      trình "Đồng hành cùng sức khỏe học đường: Tư vấn, chăm sóc, điều trị các bện về da" năm 2019</a>
                  </h5>
                  <ul class="breadcrumb mb-0 bgm-white">
                    <li class="breadcrumb-item col-xs-auto time">
                      <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                    </li>
                    <li class="breadcrumb-item col-xs-auto">Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4,
                      TP. HCM</li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php include "footer.php"; ?>
    </div>
  </div>
  </div>
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>