-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 04, 2022 lúc 01:27 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'BÃ¡nh má»³', '2021-12-01 00:00:00', '2021-12-12 11:32:46'),
(2, 'Hotdog1', '2021-12-02 00:00:00', '2021-12-12 11:37:46'),
(3, 'XÃºc xÃ­ch', '2021-12-08 08:03:06', '2021-12-12 11:41:46'),
(4, 'Hotdog', '2021-12-08 09:36:26', '2021-12-12 11:46:46'),
(5, 'xÃ´i', '2021-12-31 06:58:33', '2021-12-31 06:58:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `text` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_login`, `text`) VALUES
(1, 1, 'hàng ngon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `SOHD` int(11) NOT NULL,
  `id_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `idnv` int(11) NOT NULL,
  `Tennhanvien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dienthoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`idnv`, `Tennhanvien`, `Diachi`, `Dienthoai`) VALUES
(1, 'nam', 'hanoi', 432432);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenkhach` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mahoadon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, 'user', '123', 'user'),
(7, 'nam95', '1', 'user'),
(15, 'admin1', '1', 'user'),
(16, 'admin1', '1', 'user'),
(17, 'admin1', '2', 'user'),
(18, 'admin1', '2', 'user'),
(19, 'admin1', '2', 'user'),
(20, 'nam01', '1', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `id_category` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `thumbnail`, `content`, `id_category`, `created_at`, `updated_at`) VALUES
(15, 'ngon tuyá»‡t vá»i vá»›i nhÃ¢n trá»©ng.Sáº©n pháº©m Ä‘Æ°á»£c Ä‘á»“ng giÃ¡ 30k', 22222, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxzN6wMF-q-Iq7bXWKanEqTkAncKdvY67Q_g&usqp=CAU', '', 0, '2021-12-10 08:34:29', '2021-12-10 08:34:29'),
(16, 'ok chÆ°a', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhhZgJ54RlotuWjmRUruyH00wP4ZY6vbQBzw&usqp=CAU', '', 2, '2021-12-10 08:58:29', '2021-12-10 08:58:29'),
(17, 'ngon', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxzN6wMF-q-Iq7bXWKanEqTkAncKdvY67Q_g&usqp=CAU', '', 2, '2021-12-10 10:45:54', '2021-12-10 10:45:54'),
(19, 'tuyá»‡t\r\n', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhhZgJ54RlotuWjmRUruyH00wP4ZY6vbQBzw&usqp=CAU', '', 3, '2021-12-12 05:54:13', '2021-12-12 05:54:13'),
(20, 'okay', 22, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxzN6wMF-q-Iq7bXWKanEqTkAncKdvY67Q_g&usqp=CAU', '', 1, '2021-12-12 13:00:43', '2021-12-12 13:00:43'),
(21, 'wqewq', 2000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLshR27-kPsFk181URtz9zVxzReZyTyWksBg&usqp=CAU', '', 2, '2021-12-13 19:58:36', '2021-12-13 19:58:36'),
(22, 'xÃºc xÃ­ch nhÃ  lÃ m ngon vl', 10000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuyDzOB7PuWDYwNT98YeVihVdhaL3ay8AhSQ&usqp=CAU', '', 3, '2021-12-13 19:36:57', '2021-12-13 19:36:57'),
(23, 'XÃ´i Ä‘áº­u phá»ng hay XÃ´i Äáº­u Phá»™ng hoáº·c XÃ´i Láº¡c cáº¥p tá»‘c thÆ¡m dá»«a, XÃ´i dáº»o vÃ  khÃ´ng bá»‹ nÃ¡t.MÃ³n XÃ´i lÃ  mÃ³n cÃ³ thá»ƒ Äƒn vÃ o báº¥t ..', 22220, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNSP5XWfZ07C8Cl0amlO3Tj3KAyLrsiGRHsw&usqp=CAU', '', 5, '2021-12-13 20:00:08', '2021-12-13 20:00:08'),
(24, 'Hotdog lÃ  má»™t mÃ³n thá»©c Äƒn nhanh Ä‘Æ°á»£c nhiá»u thá»±c khÃ¡ch HÃ  Ná»™i chá»n lá»±a cho nhá»¯ng bá»¯a Äƒn cá»§a mÃ¬nh. MÃ³n bÃ¡nh nÃ y khÃ¡ dá»… Äƒn vÃ  cÃ³ má»©c giÃ¡ cÅ©ng há»£p lÃ­, máº·t ', 365646, 'hotdog1.jpg', '', 4, '2021-12-14 04:34:43', '2021-12-14 04:34:43'),
(25, 'giiughoio\r\n', 233132, 'xu2.png', '', 0, '2021-12-14 04:04:44', '2021-12-14 04:04:44'),
(26, '2121', 21, 'xu.png', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '12321', 21, 'xu2.png', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '2121', 321, 'xu.png', '', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'ngon tuyá»‡t vá»i vá»›i nhÃ¢n trá»©ngngon tuyá»‡t vá»i vá»›i nhÃ¢n trá»©ngngon tuyá»‡t vá»i vá»›i nhÃ¢n trá»©ngngon tuyá»‡t vá»i vá»›i nhÃ¢n trá»©ngngon tuyá»‡t vá»i vá»›i nhÃ¢n trá»©ngngon tuyï¿', 2132, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxzN6wMF-q-Iq7bXWKanEqTkAncKdvY67Q_g&usqp=CAU', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`SOHD`,`id_category`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
