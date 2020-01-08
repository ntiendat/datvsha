<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Qltaikhoan.css">
</head>
<body>
    <h3>Quản lý tài khoản</h3>
    <div class="container-fluid">
    <form action="" method="post">
        <div class="row" id="taikhoan">
            <div class="col-lg-10">
            <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col">Mã tài khoản</th>
            <th scope="col">Tên tài khoản</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Nhóm quyền</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input type="number" name="" id="" ></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td> 
            <td>
            <select>
                <option value="Quản lí">Quản lí</option>
                <option value="Sinh viên">Sinh viên</option>
                <option value="Giảng viên">Giảng viên</option>
            </select>
            </td>
            </tr>
        </tbody>
        </table>
        </div>
        <div  class="col-lg-2 them">
            <button  type="button" class="btn btn-danger" style=" font-size: 10px;">Thêm tài khoản</button><br>
            
        </div>
        </div>
        </form>
        <div class="row" id="danhsach"  >
        <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col">Mã tài khoản</th>
            <th scope="col">Tên tài khoản</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Nhóm quyền</th>
            <th scope="col">Ghi chú</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>175A071407</td>
            <td>Nguyễn Thị A</td>
            <td>01234455</td>
            <td>Sinh viên</td>
            <td>
            <button  type="button" class="btn btn-secondary" style=" font-size: 10px;">Sửa</button>
            <button  type="button" class="btn btn-warning" style=" font-size: 10px;">Xóa</button>
            </td>
            </tr>
            <tr>
            <td>175A071407</td>
            <td>Nguyễn Thị A</td>
            <td>01234455</td>
            <td>Sinh viên</td>
            <td>
            <button  type="button" class="btn btn-secondary" style=" font-size: 10px;">Sửa</button>
            <button  type="button" class="btn btn-warning" style=" font-size: 10px;">Xóa</button>
            </td>
            </tr>
            <tr>
            <td>175A071407</td>
            <td>Nguyễn Thị A</td>
            <td>01234455</td>
            <td>Sinh viên</td>
            <td>
            <button  type="button" class="btn btn-secondary" style=" font-size: 10px;">Sửa</button>
            <button  type="button" class="btn btn-warning" style=" font-size: 10px;">Xóa</button>
            </td>
            </tr>
            <tr>
            <td>175A071407</td>
            <td>Nguyễn Thị A</td>
            <td>01234455</td>
            <td>Sinh viên</td>
            <td>
            <button  type="button" class="btn btn-secondary" style=" font-size: 10px;">Sửa</button>
            <button  type="button" class="btn btn-warning" style=" font-size: 10px;">Xóa</button>
            </td>
            </tr>  
            </tbody>
        </table>
        </div>
        
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>