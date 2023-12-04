-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 06:01 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nameuser` varchar(200) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `nameuser`, `idpro`, `ngaybinhluan`) VALUES
(10, 'xịn', 1, 'dohongquan', 12, '10:58:50am 23/11/2023'),
(12, 'hàng tốt lắm ạ', 1, 'dohongquan', 40, '07:34:22am 29/11/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(64, 1, 39, 'uploads/samsung-galaxy-z-flip5.jpg', 'Samsung galaxy Z filp 5', 18600000, 1, 18600000, 52),
(65, 1, 39, 'uploads/samsung-galaxy-z-flip5.jpg', 'Samsung galaxy Z filp 5', 18600000, 1, 18600000, 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`) VALUES
(1, 'Điện thoại Iphone'),
(2, 'Điện thoại Oppo'),
(3, 'Điện thoại Nokia'),
(4, 'Điện thoại Sony'),
(9, 'Điện thoại Samsung'),
(11, 'Điện thoại Vivo'),
(12, 'Điện thoại Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL,
  `total` int(10) NOT NULL,
  `bill_status` tinyint(1) NOT NULL,
  `receive_name` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_tel` varchar(50) NOT NULL,
  `ngaydathang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `ngaydathang`) VALUES
(52, 1, 'dohongquan', 'Quảng Bình', '0123456789', 'quando952@gmail.com', 0, 18600000, 0, '', '', '', '02:24:02pm 29/11/2023'),
(53, 1, 'dohongquan', 'Quảng Bình', '0123456789', 'quando952@gmail.com', 0, 18600000, 0, '', '', '', '02:24:22pm 29/11/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(10) NOT NULL,
  `tenhh` varchar(200) NOT NULL,
  `dongia` double NOT NULL DEFAULT 0,
  `hinhanh` varchar(250) DEFAULT NULL,
  `mota` varchar(1250) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `hinhanh`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'iphone 14 promax ', 24000000, 'iphone-14promax.jpg', 'okk', 0, 1),
(5, 'iphone 11 ', 9200000, 'iphone11.jpg', 'ok', 0, 1),
(6, 'iphone 15 promax', 32000000, 'iphone15promax.jpg', 'ok', 0, 1),
(7, 'iphone 12 ', 13600000, 'iphone12.jpg', 'ok', 0, 1),
(8, 'iphone 14', 19000000, 'iPhone14.jpg', 'ok', 0, 1),
(9, 'iphone 15', 21000000, 'iphone15.jpg', '123456', 0, 1),
(10, 'iphone 15 plus', 25000000, 'iphone15plu.jpg', 'ưertyuj', 0, 1),
(11, 'Samsung galaxy S23 Ultra', 24000000, 'samsunggalaxys23ultra.jpg', 'ok', 0, 9),
(12, 'Samsung galaxy S22 Ultra', 17000000, 'SamsungGalaxyS22Ultra.jpg', 'ok', 0, 9),
(13, 'Samsung galaxy S23 FE', 13400000, 'samsung-galaxy-s23-fe.jpg', 'ok', 0, 9),
(14, 'Oppo Reno 10', 9700000, 'oppo-reno10.jpg', 'ok', 0, 2),
(15, 'Oppo Reno 8 pro', 14000000, 'oppo-reno8-pro.jpg', 'loll', 0, 2),
(16, 'Oppo Reno 8T', 7100000, 'oppo-reno8t-4g.jpg', 'ok', 0, 2),
(17, 'Oppo Find N2 Flip 5G', 18000000, 'oppo-find-n2-flip.jpg', 'ok', 0, 2),
(18, 'Oppo A79 5G', 8000000, 'oppo-a79-5g.jpg', 'ok', 0, 2),
(19, 'Oppo FInd N3 5G', 45000000, 'oppo-find-n3.jpg', 'ok', 0, 2),
(20, 'Oppo A58', 5690000, 'oppo-a58-4g.jpg', 'ok', 0, 2),
(21, 'Xiaomi 13T 5G', 11000000, 'xiaomi-13-t.jpg', 'ok', 0, 12),
(22, 'Xiaomi Redmi 12', 3600000, 'xiaomi-redmi-12.jpg', 'ok', 0, 12),
(23, 'vivo y36', 5500000, 'vivo-y36.jpg', 'ok', 0, 11),
(24, 'Nokia 8.3', 3000000, 'nokia-83.jpg', 'ok', 0, 3),
(25, 'Nokia 5.3', 2500000, 'nokia-53.jpg', 'ok', 0, 3),
(26, 'Nokia C01', 1800000, 'nokia c01.jpg', 'ok', 0, 3),
(27, 'Nokia 8210', 1400000, 'Nokia 8210.jpg', 'ok', 0, 3),
(28, 'Vivo v27e', 8200000, 'vivo-v27e.jpg', 'ok', 0, 11),
(29, 'vivo v29', 13000000, 'vivo-v29.jpg', 'ok', 0, 11),
(30, 'vivo v25 pro 5G', 9500000, 'vivo-v25-pro-5g.jpg', 'ok', 0, 11),
(31, 'vivo v29e 5G', 9000000, 'vivo-v29e.jpg', 'ok', 0, 11),
(32, 'Nokia 215', 600000, 'nokia-215.jpg', 'ok', 0, 3),
(33, 'Nokia 105 4G', 650000, 'nokia-105-4g.jpg', 'ok', 0, 3),
(34, 'vivo y22s', 4200000, 'vivo-y22s.jpeg', 'ok', 0, 11),
(35, 'Vivo y17s', 4000000, 'vivo-y17.jpg', 'ok', 0, 11),
(36, 'Nokia 110', 780000, 'nokia-110-4g.jpg', 'ok', 0, 3),
(37, 'Samsung galaxy Z fold 5', 31500000, 'samsung-galaxy-z-fold5.jpg', 'ok', 0, 9),
(38, 'Samsung galaxy S23', 17000000, 'samsung-galaxy-s23.jpg', 'ok', 0, 9),
(39, 'Samsung galaxy Z filp 5', 18600000, 'samsung-galaxy-z-flip5.jpg', 'ok', 0, 9),
(40, 'Samsung galaxy S21 FE', 10000000, 'Samsung-Galaxy-S21-FE.jpg', 'ok', 0, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'dohongquan', 'quan', '1', 'quando952@gmail.com', 'Quảng Bình', '0123456789', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
