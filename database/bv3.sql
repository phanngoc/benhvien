-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2016 at 08:19 AM
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

--
-- Dumping data for table `benhnhan`
--

INSERT INTO `benhnhan` (`id`, `hoten`, `ngaysinh`, `diachi`, `CMND`, `gioitinh`, `sodienthoai`, `email`) VALUES
(1, 'Phan Nhan', '2016-04-06 00:00:00', 'Hoa Khanh, Da Nang', 1664810222, 0, 1664810141, 'phann123@yahoo.com'),
(2, 'Tuan Anh', '2016-04-04 00:00:00', 'Tuyen Son, Quang Nam', 122482201, 1, 916333242, 'tuananh@gmail.com');

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

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`id`, `benhvien_id`, `tenkhoa`, `hinhanh`, `thongtin`) VALUES
(1, 1, 'Phòng Tổ Chức Cán Bộ', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(2, 1, 'Phòng Kế Hoạch Tổng Hợp', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(3, 1, 'Phòng Điều Dưỡng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(4, 1, 'Phòng Vật Tư Thiết Bị Y Tế', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(5, 1, 'Phòng Hành Chính Quản Trị', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(6, 1, 'Phòng Chỉ Đạo Tuyến', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(7, 1, 'Phòng Tài Chính - Kế Toán', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(8, 1, 'Phòng Quản Lý Chất Lượng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(9, 1, 'Phòng Công Nghệ Thông Tin', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(10, 1, 'Khoa Dược', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(11, 1, 'Khoa Khám Bệnh', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(12, 1, 'Khoa Hồi Sức Tích Cực - Chống Độc', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(13, 1, 'Khoa Nội Tim Mạch', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(14, 1, 'Khoa Nội Hô Hấp - Miễn Dịch Dị Ứng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(15, 1, 'Khoa Nội Tiêu Hóa - Gan Mật', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(16, 2, 'Phòng Tổ Chức Cán Bộ', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(17, 2, 'Phòng Kế Hoạch Tổng Hợp', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(18, 2, 'Phòng Điều Dưỡng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(19, 2, 'Phòng Vật Tư Thiết Bị Y Tế', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(20, 2, 'Phòng Hành Chính Quản Trị', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(21, 2, 'Phòng Chỉ Đạo Tuyến', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(22, 2, 'Phòng Tài Chính - Kế Toán', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(23, 2, 'Phòng Quản Lý Chất Lượng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(24, 2, 'Phòng Công Nghệ Thông Tin', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(25, 2, 'Khoa Dược', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(26, 2, 'Khoa Khám Bệnh', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(27, 2, 'Khoa Hồi Sức Tích Cực - Chống Độc', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(28, 2, 'Khoa Nội Tim Mạch', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(29, 2, 'Khoa Nội Hô Hấp - Miễn Dịch Dị Ứng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(30, 2, 'Khoa Nội Tiêu Hóa - Gan Mật', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(31, 3, 'Phòng Tổ Chức Cán Bộ', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(32, 3, 'Phòng Kế Hoạch Tổng Hợp', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(33, 3, 'Phòng Điều Dưỡng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(34, 3, 'Phòng Vật Tư Thiết Bị Y Tế', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(35, 3, 'Phòng Hành Chính Quản Trị', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(36, 3, 'Phòng Chỉ Đạo Tuyến', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(37, 3, 'Phòng Tài Chính - Kế Toán', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(38, 3, 'Phòng Quản Lý Chất Lượng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(39, 3, 'Phòng Công Nghệ Thông Tin', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(40, 3, 'Khoa Dược', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(41, 3, 'Khoa Khám Bệnh', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(42, 3, 'Khoa Hồi Sức Tích Cực - Chống Độc', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(43, 3, 'Khoa Nội Tim Mạch', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(44, 3, 'Khoa Nội Hô Hấp - Miễn Dịch Dị Ứng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.'),
(45, 3, 'Khoa Nội Tiêu Hóa - Gan Mật', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.');

-- --------------------------------------------------------

--
-- Table structure for table `loaidichvu`
--

CREATE TABLE `loaidichvu` (
  `id` int(11) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `tendichvu` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaidichvu`
--

INSERT INTO `loaidichvu` (`id`, `benhvien_id`, `tendichvu`, `giatien`) VALUES
(1, 1, 'Khám Sản, Khám Phụ Khoa', 200000),
(2, 1, 'Khám Nhi', 200000),
(3, 1, 'Khám Nội Khoa', 200000),
(4, 1, 'Nội Soi', 200000),
(5, 1, 'Siêu Âm', 200000),
(6, 2, 'Khám Sản, Khám Phụ Khoa', 200000),
(7, 2, 'Khám Nhi', 200000),
(8, 2, 'Khám Nội Khoa', 200000),
(9, 2, 'Nội Soi', 200000),
(10, 2, 'Siêu Âm', 200000),
(11, 3, 'Khám Sản, Khám Phụ Khoa', 200000),
(12, 3, 'Khám Nhi', 200000),
(13, 3, 'Khám Nội Khoa', 200000),
(14, 3, 'Nội Soi', 200000),
(15, 3, 'Siêu Âm', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(300) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`id`, `name`, `icon`, `benhvien_id`, `created_at`, `updated_at`) VALUES
(1, 'Tin hằng ngày', '', 1, '2016-04-06 13:09:42', '0000-00-00 00:00:00'),
(2, 'Giải pháp', '', 1, '2016-04-06 13:09:45', '0000-00-00 00:00:00'),
(3, 'Lời khuyên hữu ích', '', 1, '2016-04-06 13:09:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phongkham`
--

CREATE TABLE `phongkham` (
  `id` int(11) NOT NULL,
  `dichvu_id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `bacsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phongkham`
--

INSERT INTO `phongkham` (`id`, `dichvu_id`, `ten`, `bacsi`) VALUES
(1, 1, 'Phòng Khám 1', 'Trần Đình Lâm'),
(2, 1, 'Phong kham 2', 'Trần Đình Tuan'),
(3, 1, 'Phong kham 3', 'Tran Duc Tuan'),
(4, 1, 'Phong kham 4', 'Dương Văn Lực'),
(5, 2, 'Phòng Khám 1', 'Trần Đình Lâm'),
(6, 2, 'Phong kham 2', 'Trần Đình Tuan'),
(7, 2, 'Phong kham 3', 'Tran Duc Tuan'),
(8, 2, 'Phong kham 4', 'Dương Văn Lực'),
(9, 3, 'Phòng Khám 1', 'Trần Đình Lâm'),
(10, 3, 'Phong kham 2', 'Trần Đình Tuan'),
(11, 3, 'Phong kham 3', 'Tran Duc Tuan'),
(12, 3, 'Phong kham 4', 'Dương Văn Lực');

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
(1, 1, 'efrgth sdsfs', 'dwefgr@sd.asdsa', 'defw', 1, '2016-04-02 06:39:21', '2016-03-31 06:38:42'),
(2, 2, 'efrgt efrg', 'efrgt@dfgh.sdf', 'wdergethy', 1, '2016-04-02 06:39:23', '2016-04-01 20:42:56'),
(3, 1, 'Nhan Duong', 'nhanduong@gmail.com', 'Cau nay rat hay', 1, '2016-04-02 06:39:16', '0000-00-00 00:00:00'),
(4, 1, 'Tuan Anh', 'tuananh@gmail.com', 'Day la y kien rat hay', 1, '2016-04-02 06:39:16', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `benhvien`
--
ALTER TABLE `benhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `loaidichvu`
--
ALTER TABLE `loaidichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phongkham`
--
ALTER TABLE `phongkham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
