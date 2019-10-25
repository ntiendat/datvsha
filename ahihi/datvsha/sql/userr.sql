-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2019 lúc 04:17 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `userr`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `mabv` int(11) NOT NULL,
  `tieude` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `noidung` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `anh` varchar(1000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`mabv`, `tieude`, `noidung`, `anh`) VALUES
(5, 'T?ng b?ng ng?y h?i ??nh h??ng cho t?n sinh vi?n Vi?n ??o t?o qu?c t? NIIE kh?a 2019', 'NTTU - N?m trong khu?n kh? c?c s? ki?n ch?o ??n sinh vi?n kh?a m?i, trong hai ng?y 07 v? 08/10 v?a qua Vi?n ??o t?o qu?c t? Tr??ng ?H Nguy?n T?t Th?nh (NIIE) ?? t? ch?c ng?y h?i ??nh h??ng cho t?n sinh vi?n v?i nhi?u ho?t ??ng h?p d?n v? thi?t th?c  Ph?t bu?i t?i bu?i l?, ??i di?n Ban gi?m hi?u nh? tr??ng, TS. Nguy?n Tu?n Anh ? Vi?n tr??ng vi?n NIIE ?? g?i l?i ch?c m?ng ??n c?c b?n t?n sinh vi?n, nh?ng th?nh vi?n m?i c?a ??i gia ??nh ?H Nguy?n T?t Th?nh n?i chung v? Vi?n ??o t?o Qu?c t? NIIE n?i ri?ng. ??ng th?i chia s? v? nh?ng ?i?u ki?n h?c t?p c?ng nh? nh?ng th?ch th?c m? c?c b?n c? th? g?p ph?i tr?n su?t ch?ng ???ng s?p t?i', 'img4.jpg'),
(6, 'Gi?o s? danh d? ng?nh V?t l? y khoa ?H Nguy?n T?t Th?nh tr? th?nh m?t trong 100 nh? khoa h?c ch?u ? n?m 2019', 'NTTU - Asian Scientist Magazine ? t?p ch? uy t?n v? khoa h?c, c?ng ngh? ch?u ?, n?i truy?n c?m h?ng b?ng nh?ng c?u chuy?n v? khoa h?c, c?ng ngh? ? ch?u ? ??n ??c gi? to?n th? gi?i. T? n?m 2016, h?ng n?m Asian Scientist Magazine ??u t?p h?p v? vinh danh c?c nh? khoa h?c ch?u ? c? t?m ?nh h??ng v? nh?ng ??ng g?p t?ch c?c cho n?n khoa h?c ch?u l?c. N?m nay, c?ng v?i c?c nh? khoa h?c ??n t? c?c qu?c gia v? v?ng l?nh th? kh?c trong ch?u l?c, GS Ng Kwan Hoong (Malaysia), gi?o s? danh d? ng?nh V?t l? Y khoa ?H Nguy?n T?t Th?nh vinh d? tr? th?nh m?t  trong 100 nh? khoa h?c ch?u ? n?m 2019 do t?p ch? n?y b?nh ch?n', 'img1.jpg'),
(7, '1. Xuân Trường', 'Người hâm mộ bóng đá chắc chắn không còn xa lạ với cái tên Lương Xuân Trường, chàng trai sinh năm 1995 đến từ Tuyên Quang, anh được cộng đồng mạng yêu mến đặt cho biệt danh \"Trường Híp\". Không những có diện mạo sáng láng, đôi mắt một mí giống trai Hàn Quốc, Xuân Trường còn là chàng tiền vệ tài ba trên sân cỏ, sở hữu một lượng fans đông đảo trong làng bóng đá Việt Nam.', 'img2.jpg'),
(8, 'Tưng bừng ngày hội định hướng cho tân sinh viên Viện đào tạo quốc tế NIIE khóa 2019', 'NTTU - Nằm trong khuôn khổ các sự kiện chào đón sinh viên khóa mới, trong hai ngày 07 và 08/10 vừa qua Viện đào tạo quốc tế Trường ĐH Nguyễn Tất Thành (NIIE) đã tổ chức ngày hội định hướng cho tân sinh viên với nhiều hoạt động hấp dẫn và thiết thực', '53539899_675250849559101_7331364833306083328_n.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Ho` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Admin` int(2) NOT NULL,
  `Code` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Ho`, `Ten`, `Email`, `Pass`, `Admin`, `Code`) VALUES
('nguyen', 'hanh', 'hanh@gmail.com', 'hanhhanh', 1, NULL),
('nguyen', 'dat', 'dat@gmail.com', 'datdat', 1, NULL),
('nguyen', 'ha', 'ha@gmail.com', 'haha', 0, NULL),
('nguyen', 'tienanh', 'tienanh@gmail.com', 'tientien', 0, NULL),
('bui', 'trang', 'trang@gmail.com', 'trangtrang', 0, NULL),
('duong', 'thuytien', 'thuytien@gmail.com', 'tientien', 0, NULL),
('duong', 'quyen', 'quyen@gmail.com', 'quyenquyen', 0, NULL),
('nguyen', 'hoa', 'hoa@gmail.com', '123123', 0, NULL),
('nguyen', 'son', 'son@gmail.com', 'sonson', 0, NULL),
('nghiem', 'thuy', 'thuy@gmail.com', 'thuythuy', 0, NULL),
('nguyen', 'quangtu', 'tu081099@gmail.com', 'Iloveyou123', 0, NULL),
('dang', 'linh trang', 'trang@gmail.com', '19081999', 1, NULL),
('trau', 'hieu', 'hieu@gmail.com', 'hieuhieu', 1, NULL),
('pham', 'hien', 'hien@gmail.com', 'hienhien', 1, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`mabv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `mabv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
