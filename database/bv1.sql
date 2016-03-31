-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2016 at 08:58 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `benhnhan`
--

CREATE TABLE `benhnhan` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `CMND` int(11) NOT NULL,
  `gioitinh` tinyint(4) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `benhvien`
--

CREATE TABLE `benhvien` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `thongtin` text NOT NULL,
  `macode` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benhvien`
--

INSERT INTO `benhvien` (`id`, `ten`, `diachi`, `hinhanh`, `sodienthoai`, `email`, `thongtin`, `macode`, `created_at`, `updated_at`) VALUES
(1, 'Bệnh viện đa khoa Đà Nẵng', '', '', '', '', 'Tổ chức Y tế thế giới WHO xếp các loại thịt chế biến như xúc xích, thịt xông khóa… vào nhóm thực phẩm có khả năng gây ung thư cao tương đương với formaldehyde, thuốc lá, bức xạ gamma. Thịt đỏ cũng là một thực phẩm dễ gây ung thư. Các chuyên gia cho biết, khẩu phần ăn chứa 50 g thịt chế biến sẵn mỗi ngày khiến tăng 18% nguy cơ mắc ung thưa. Tuy nhiên, nhiều người vẫn tranh cãi rằng, mức độ rủi ro có thể không nghiêm trọng đến vậy.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Bệnh viện C Đà Nẵng', '', '', '', '', 'Tổ chức Y tế thế giới WHO xếp các loại thịt chế biến như xúc xích, thịt xông khóa… vào nhóm thực phẩm có khả năng gây ung thư cao tương đương với formaldehyde, thuốc lá, bức xạ gamma. Thịt đỏ cũng là một thực phẩm dễ gây ung thư. Các chuyên gia cho biết, khẩu phần ăn chứa 50 g thịt chế biến sẵn mỗi ngày khiến tăng 18% nguy cơ mắc ung thưa. Tuy nhiên, nhiều người vẫn tranh cãi rằng, mức độ rủi ro có thể không nghiêm trọng đến vậy.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bệnh viện Phụ sản Đà Nẵng', '', '', '', '', 'Tổ chức Y tế thế giới WHO xếp các loại thịt chế biến như xúc xích, thịt xông khóa… vào nhóm thực phẩm có khả năng gây ung thư cao tương đương với formaldehyde, thuốc lá, bức xạ gamma. Thịt đỏ cũng là một thực phẩm dễ gây ung thư. Các chuyên gia cho biết, khẩu phần ăn chứa 50 g thịt chế biến sẵn mỗi ngày khiến tăng 18% nguy cơ mắc ung thưa. Tuy nhiên, nhiều người vẫn tranh cãi rằng, mức độ rủi ro có thể không nghiêm trọng đến vậy.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `id` int(11) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `tenkhoa` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `thongtin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaidichvu`
--

CREATE TABLE `loaidichvu` (
  `id` int(11) NOT NULL DEFAULT '0',
  `benhvien_id` int(11) NOT NULL,
  `tendichvu` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Tin hằng ngày', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Giải pháp', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Lời khuyên hữu ích', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phongkham`
--

CREATE TABLE `phongkham` (
  `id` int(11) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `bacsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkham`
--

CREATE TABLE `thongtinkham` (
  `id` int(11) NOT NULL,
  `benhnhan_id` int(11) NOT NULL,
  `phongkham_id` int(11) NOT NULL,
  `dichvu_id` int(11) NOT NULL,
  `thoigiankham` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `thumbnail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ykienphanhoi`
--

CREATE TABLE `ykienphanhoi` (
  `id` int(11) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `hoten` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ykien` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ykienphanhoi`
--

INSERT INTO `ykienphanhoi` (`id`, `benhvien_id`, `hoten`, `email`, `ykien`, `status`, `updated_at`, `created_at`) VALUES
(1, 0, 'efrgth sdsfs', 'dwefgr@sd.asdsa', 'defw', 0, '2016-03-31 06:38:42', '2016-03-31 06:38:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benhvien`
--
ALTER TABLE `benhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaidichvu`
--
ALTER TABLE `loaidichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phongkham`
--
ALTER TABLE `phongkham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtinkham`
--
ALTER TABLE `thongtinkham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ykienphanhoi`
--
ALTER TABLE `ykienphanhoi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `benhvien`
--
ALTER TABLE `benhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phongkham`
--
ALTER TABLE `phongkham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thongtinkham`
--
ALTER TABLE `thongtinkham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ykienphanhoi`
--
ALTER TABLE `ykienphanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
