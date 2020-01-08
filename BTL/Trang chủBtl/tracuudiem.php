<!doctype html>
<html lang="en">

<head>
    <title>Tra Cứu Điểm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-1.css">
</head>

<body>
    <div class="container-fluid" id="button-2">
        <div class="row">
            <div class="col-md-12">
                <img src="./img/logo.png" id="logo2">
                <h1>Tra Cứu Điểm</h1>
                <form class="form" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Giai đoạn:</p>
                            <select name="giaidoan">
                               
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                               
                            </select>
                        </div>
                        <div class="col-md-4">
                            <p>Học kì:</p>
                            <select name="hocki">
                              
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option>Học kì song song</option>
                                
                            </select>
                        </div>
                        <div class="col-md-4">
                            <p>Năm học</p>
                            <select name="namhoc">
                               
                                    <option value="2019-2020">2019-2020</option>
                                    <option value="2018-2019">2018-2019</option>
                                
                            </select>
                        </div>
                    </div>
                </div>
                <p>Mã sinh viên:</p>
                <input type="text" id="text-1"name="msv"><br>
                <p>Chứng minh thư:</p>
                <input type="text" id="text-1" name="cmt"> <br>
                <br>
                <button>Kiểm tra</button>
                </form>
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr class="tr-1">
                        <td>Mã sinh viên</td>
                        <td>Điểm Quá Trình</td>
                        <td>Điểm Thi</td>
                        <td>Điểm Kết Thúc</td>
                        <td>Mã Môn</td>
                    </tr>
                    <?php
                          error_reporting(0);
                            $giaidoan = $_POST['giaidoan'];
                            $hocki = $_POST['hocki'];
                            $namhoc = $_POST['namhoc'];
                            $msv = $_POST['msv'];
                            $cmt = $_POST['cmt'];
                            $conn = mysqli_connect('localhost','root','','hang');
                            if(!$conn){
                                die('loi vl'.mysqli_connect_error() );
                            }
                            else{
                                $sql = " SELECT d.MaSinhVien, d.DiemQt, d.DiemThi, d.DiemKT, d.MaMonHoc from diem d join monhoc mh join sinhvien sv on d.MaSinhVien=sv.MaSinhVien AND d.MaMonHoc=mh.MaMonHoc where sv.ChungMinhThu='$cmt' AND sv.MaSinhVien='$msv' and mh.GiaiDoan='$giaidoan' and mh.HocKi='$hocki' and mh.NamHoc='$namhoc'  ";
                
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                if (mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                   echo '<tr><td>'.$row['MaSinhVien'].'</td><td>'.$row['DiemQt'].'</td><td>'.$row['DiemThi'].'</td><td>'.$row['DiemKT'].'</td><td>'.$row['MaMonHoc'].'</td></tr>';
                                    
                                }}
                                    else{
                                        
                                    }
                            }
                            ?>
                   
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <form action="#" method="post">


        

</body>

</html>