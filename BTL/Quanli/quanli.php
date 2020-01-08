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
                <li><a class="active" href="#home" style="height: 60px">Ngành học</a></li>
                <li><a href="quanli.php?page=themnganh" >Thêm ngành học</a></li>
               <li><a href="quanli.php?page=themlopmon" >Thêm lớp môn học</a></li>


                <?php
                            // tắt thông báo lỗi 
                          error_reporting(0);
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = " SELECT * FROM `nganh` ";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    $bien = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $bien++;
                                    echo '<li><a href="#news" data-toggle="collapse" data-target="#nganhhoc'.$bien.'" aria-expanded="false" aria-controls="nganhhoc'.$bien.'">'.$row['TenNganh'].'</a></li>';
                                    // echo '   <li><a href="quanli.php?page=themlopmon" class="collapse" id="nganhhoc'.$bien.'" style="color: blue">Thêm lớp môn học</a></li>';
                                        $aa=$row['MaNganh'];
                                        $sqll = "SELECT * FROM `monhoc` WHERE `MaNganh`='$aa'";
                                        mysqli_set_charset($conn,'UTF8');
                                        $resultt = mysqli_query($conn,$sqll);
                                        $bienn=0;
                                        $bienn=$bien*2;
                                        while($row = mysqli_fetch_assoc($resultt)){
                                            echo '<li><a href="#news"  id="nganhhoc'.$bien.'"';  echo' class="collapse" data-toggle="collapse" data-target="#nganhhocc'.$bienn.'" aria-expanded="false" aria-controls=nganhhoc'.$bien.
                                            '" style="color: blue">'.$row['TenMonHoc'].'</a></li>';
                                            echo '  <li><a href="quanli.php?page=giangvien" class="collapse" id="nganhhocc'.$bienn.'" style="color: red;">Danh sách giảng viên</a></li>';
                                            echo'  <li><a href="quanli.php?page=lophp" class="collapse" id="nganhhocc'.$bienn.'"style="color: red;">Danh sách lớp học phần</a></li>'; 
                                                $bienn++;
                                        }
                                }}
                                    else{
                                    }
                            }
                            ?>



          
              </ul>
              
        </div>
       
        <?php
                    if(isset($_GET['page'])){
                        switch ($_GET['page']) {
                            case 'themnganh':
                                include_once('themnganh.php');
                                break;
                            case 'themlopmon':
                                include_once('themlopmon.php');
                                break;
                            case 'giangvien':
                                    include_once('giangvien.php');
                                    break;
                            case 'lophp':
                                include_once('lophp.php');
                                break;
                                
                        }
                    }
              ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     
</body>
</html>