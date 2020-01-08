<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="giangvien.css">
</head>
<body>
    <h3>Quản lý sinh viên</h3>
    <div class="container-fluid">
        <div class="col-lg-2">
            <ul>
           
                <li><a class="active" href="#home" style="height: 60px">Quản lí học phần</a></li>
               
                <?php
                            // tắt thông báo lỗi 
                          error_reporting(0);
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = " SELECT * FROM `lop`   ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                   echo ' <li><a href="#news" data-toggle="collapse" data-target="#hocphan'.$bien.'" aria-expanded="false" aria-controls="hocphan'.$bien.'">'.$row['TenLop'].'</a></li>' ;
                                    echo ' <li><a href="giangvien.php?page=sinhvien'.$row['TenLop'].'" class="collapse" id="hocphan'.$bien.'">Danh sách sv </a></li>
                                          <li><a href="giangvien.php?page=diem'.$row['TenLop'].'" class="collapse" id="hocphan'.$bien.'">Quản lí điểm</a></li>';        
                                }}
                                    else{
                                    }
                            }
                            ?>

              </ul>
              
        </div>
        <?php
       
                    if(isset($_GET['page'])){

                        if(substr($_GET['page'],0,8)=='sinhvien'){
                            include_once('sinhvien.php');
                        }
                        elseif(substr($_GET['page'],0,4)=='diem'){
                            include_once('diem.php');
                            
                        }
                    }
              ?>
        

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     
</body>
</html>