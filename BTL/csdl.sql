-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 07:15 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `MaSinhVien` varchar(10) NOT NULL,
  `DiemQt` float DEFAULT NULL,
  `DiemThi` float DEFAULT NULL,
  `DiemKT` float DEFAULT NULL,
  `MaMonHoc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`MaSinhVien`, `DiemQt`, `DiemThi`, `DiemKT`, `MaMonHoc`) VALUES
('175A071407', 4, 5, NULL, 'M1'),
('175A07555', 5, 8, NULL, 'M3'),
('175A071407', 5, 8, NULL, 'M2'),
('175A071205', 5, 8, NULL, 'M4'),
('175A071407', 5, 6, 2, 'M3'),
('175A071407', 9, 9, 9, 'M4'),
('175A071407', 6, 8, 6, 'M2'),
('175A071407', 6, 8, 7.2, 'M2'),
('175A07555', 6, 3, 4.2, 'M1'),
('175A07555', 10, 4, 5.8, 'M2'),
('175A07555', 6, 9, 8.4, 'M3');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGiangVien` varchar(10) NOT NULL,
  `TenGiangVien` varchar(30) DEFAULT NULL,
  `SĐT` int(11) DEFAULT NULL,
  `MaMonHoc` varchar(10) DEFAULT NULL,
  `TenTaiKhoan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGiangVien`, `TenGiangVien`, `SĐT`, `MaMonHoc`, `TenTaiKhoan`) VALUES
('GV1', 'Nguyễn Văn A', 1234567, 'M1', ''),
('GV2', 'Đào Thị B', 112367, 'M1', '');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(30) DEFAULT NULL,
  `MaSinhVien` varchar(10) NOT NULL,
  `MaMonHoc` varchar(10) NOT NULL,
  `MaGiangVien` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaSinhVien`, `MaMonHoc`, `MaGiangVien`) VALUES
('L1', 'CSE1', '175A071407', 'M2', 'GV2'),
('L2', 'CSE2', '175A071407', 'M1', 'GV1');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` varchar(10) NOT NULL,
  `TenMonHoc` varchar(30) DEFAULT NULL,
  `SoTinChi` int(11) DEFAULT NULL,
  `HocKi` varchar(20) DEFAULT NULL,
  `GiaiDoan` int(11) DEFAULT NULL,
  `NamHoc` varchar(20) DEFAULT NULL,
  `MaNganh` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`, `SoTinChi`, `HocKi`, `GiaiDoan`, `NamHoc`, `MaNganh`) VALUES
('M1', 'Công nghệ web', 3, '1', 2, '2018-2019', 'N1'),
('M2', 'Phân tích thiết kế', 3, '2', 2, '2018-2019', 'N2'),
('M3', 'Lý Thuyết Tính toán', 3, '2', 2, '2018-2019', 'N3'),
('M4', 'Phân tích yêu cầu phần mềm', 3, '1', 1, '2019', 'N1');

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` varchar(10) NOT NULL,
  `TenNganh` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`MaNganh`, `TenNganh`) VALUES
('N1', 'Kỹ thuật phầm mềm'),
('N2', 'Công nghệ thông tin'),
('N3', 'Hệ Thống Thông Tin');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSinhVien` varchar(10) NOT NULL,
  `ChungMinhThu` varchar(10) DEFAULT NULL,
  `HoTen` varchar(30) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(20) DEFAULT NULL,
  `MaLop` varchar(10) DEFAULT NULL,
  `TenTaiKhoan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSinhVien`, `ChungMinhThu`, `HoTen`, `NgaySinh`, `DiaChi`, `MaLop`, `TenTaiKhoan`) VALUES
('123A071212', '12421312', 'Phạm Thọ Hiên', '1999-09-12', 'Hà Nội 2', 'L2', NULL),
('175A071205', '071045737', 'Nguyễn Thị Hạnh', '0000-00-00', 'Nam Định', 'L2', 'NguyenTienDat'),
('175A071235', '34631543', 'Phạm Thọ Ha', '1999-09-12', 'Hà Nội 2', 'L1', NULL),
('175A071407', '11111111', 'Hoàng Thị Trang', '0000-00-00', 'Hà Nội', 'L1', ''),
('175A071409', '111111', 'Phạm Thọ Ha', '1999-09-12', 'Hà Nội 2', 'L2', NULL),
('175A07555', '2222222', 'Dương Quốc Bảo', '1999-03-02', 'Nam Định', 'L1', '');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenTaiKhoan` varchar(30) NOT NULL,
  `MatKhau` varchar(30) DEFAULT NULL,
  `Nhomquyen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TenTaiKhoan`, `MatKhau`, `Nhomquyen`) VALUES
('NguyenTienDat', '55555', 'GV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD KEY `MaMonHoc` (`MaMonHoc`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGiangVien`),
  ADD KEY `MaMonHoc` (`MaMonHoc`),
  ADD KEY `TenTaiKhoan` (`TenTaiKhoan`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`),
  ADD KEY `MaNganh` (`MaNganh`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`MaNganh`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSinhVien`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `TenTaiKhoan` (`TenTaiKhoan`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenTaiKhoan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`),
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`TenTaiKhoan`) REFERENCES `taikhoan` (`TenTaiKhoan`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`),
  ADD CONSTRAINT `sinhvien_ibfk_3` FOREIGN KEY (`TenTaiKhoan`) REFERENCES `taikhoan` (`TenTaiKhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
