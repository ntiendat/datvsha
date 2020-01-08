
<div  class="col-lg-10">
    <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col" >Tên lớp học phần</th>
            <th scope="col">Năm học</th>
            <th scope="col">Học kì</th>
            <th scope="col">Giai đoạn</th>
            <th scope="col">Giảng viên</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input type="text" name="" id="" ></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td>
               <select name="" id="">
                   <option value="">LE VAN A</option>
                   <option value="">LE VAN B</option>
                   <option value="">LE VAN C</option>
               </select> 
            </td> 
            <td><button type="button" class="btn btn-success">Thêm</button></td>
            
            </tr>
           
        </tbody>
        </table>

        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên lớp học phần</th>
            <th scope="col">Năm học</th>
            <th scope="col">Học kì</th>
            <th scope="col">Giai đoạn</th>
            <th scope="col">Giảng viên</th>
            <th scope="col">Ghi chú</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td >1</td>
            <td >INT 12345</td>
            <td>2018-2019</td>
            <td>Học kì 1</td>
            <td>Giai đoạn</td>
            <td>LE VAN A</td>
            <td><button type="button" class="btn btn-danger" style="height: 25px; width:40px; font-size: 10px;">Sửa</button>
            <button type="button" class="btn btn-warning"style="height: 25px; width:40px; font-size: 10px;">Xóa</button></td>
            </tr>
            
        </tbody>
        </table>
 </div>

 SELECT sv.MaSinhVien,sv.ChungMinhThu,sv.HoTen from diem d join monhoc mh join sinhvien sv on d.MaSinhVien=sv.MaSinhVien AND d.MaMonHoc=mh.MaMonHoc where mh.TenMonHoc='Công nghệ web'