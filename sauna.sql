-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 12:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sauna`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `tenMatHang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLoaiSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `tenMatHang`, `maLoaiSanPham`) VALUES
(1, 'Máy Xông Hơi KingSteam', 1),
(2, 'Máy Xông Hơi Tylo', 2),
(4, 'Phòng Xông Hơi Tia Hồng Ngoại HomeSteam', 4),
(5, 'Thiết Kế  - Thi Công Theo Mẫu', 3),
(6, 'Bồn Tắm Ceaser', 6),
(7, 'Ghế Massage', 7),
(8, 'Giường Massage', 7),
(9, 'Bộ Điều Khiển Nhiệt', 8),
(10, 'Bồn Tắm Massage', 6);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL,
  `tenLoaiSanPham` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `tenLoaiSanPham`) VALUES
(1, 'Máy Xông Hơi Ướt - Steam'),
(2, 'Máy Xông Hơi Khô - Sauna'),
(3, 'Phòng Xông Hơi Khô - Sauna'),
(4, 'Phòng Xông Hơi Hồng Ngoại'),
(6, 'Bồn Tắm - Bồn Massage'),
(7, 'Thiết Bị - Phụ Kiện Xông Hơi'),
(8, 'Hệ Thống Sửi Sàn');

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `tenLoaiTin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`id`, `tenLoaiTin`) VALUES
(1, 'Công Trình'),
(3, 'Tuyển Dụng'),
(4, 'Tin Tức');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomTat` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `noiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLoaiTin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `tieuDe`, `tomTat`, `keyword`, `img`, `date`, `noiDung`, `maLoaiTin`) VALUES
(5, 'LỢI ÍCH CỦA PHÒNG XÔNG HƠI VÀ NHỮNG ĐIỀU CẦN LƯU Ý', 'Theo số liệu thống kê bệnh tim mạch tại Việt Nam, cứ 3 người trưởng thành có 1 người có nguy cơ mắc bệnh tim mạch. Mỗi năm, các bệnh lý về tim mạch cướp đi khoảng 200.000 người. Đây là con số đáng báo động đối với tình trạng sức khỏe của chúng ta hiện nay.', 'a', 'C9Rxjbg1Csp0GfpoDiIQyBTQrHb5tb3jRHGKkPwF.jpeg', '2019-05-06', '<p>Theo số liệu thống k&ecirc; bệnh tim mạch tại Việt Nam, cứ 3 người trưởng th&agrave;nh c&oacute; 1 người c&oacute; nguy cơ mắc bệnh tim mạch.&nbsp;Mỗi năm, c&aacute;c bệnh l&yacute; về tim mạch cướp đi khoảng 200.000 người. Đ&acirc;y l&agrave; con số đ&aacute;ng b&aacute;o động đối với t&igrave;nh trạng sức khỏe của ch&uacute;ng ta hiện nay.</p>', 4),
(6, 'CÔNG DỤNG TỪ ĐÁ MUỐI HIMALAYA TỰ NHIÊN', 'Nổi bật nhất trong số những công dụng kỳ diệu của đá muối Himalaya đó là hỗ trợ tim mạch, hỗ trợ chức năng hô hấp, duy trì ham muốn tình dục lành mạnh, cải thiện lượng đường trong máu, làm giảm dấu hiệu lão hóa và giúp xương cứng cáp hơn.', 'abc', 'OkuPMKNui12bXHMRZLu3KeUlSkd10uTUfa0Cqtt0.jpeg', '2019-05-06', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Nổi bật nhất trong số những c&ocirc;ng dụng kỳ diệu của đ&aacute; muối Himalaya đ&oacute; l&agrave; hỗ trợ tim mạch, hỗ trợ chức năng h&ocirc; hấp, duy tr&igrave; ham muốn t&igrave;nh dục l&agrave;nh mạnh, cải thiện lượng đường trong m&aacute;u, l&agrave;m giảm dấu hiệu l&atilde;o h&oacute;a v&agrave; gi&uacute;p xương cứng c&aacute;p hơn.<br />\r\nNăm 2003, cơ quan bảo vệ người ti&ecirc;u d&ugrave;ng Bayerisches Landesamt f&uuml;r Gesundheit und Lebensmittelsicherheit tiến h&agrave;nh ph&acirc;n t&iacute;ch 15 mẫu vật của c&aacute;c loại được b&aacute;n ở Đức v&agrave; đ&atilde; ph&aacute;t hiện ra 84 kho&aacute;ng chất c&oacute; c&ocirc;ng dụng tốt đối với sức khỏe của con người. Ch&uacute;ng bao gồm 1,2% lưu huỳnh, 0,4% canxi, 0,35% kali, 0,16% magie v&agrave; 80 kho&aacute;ng chất vi lượng kh&aacute;c</span></span></span></p>', 4),
(7, 'LỢI ÍCH TUYỆT VỜI CỦA XÔNG HƠI ĐỐI VỚI SỨC KHOẺ VÀ SẮC ĐẸP', 'Sau một ngày làm việc mệt mỏi chắc hẳn ai cũng muốn có riêng cho mình một không gian để thư giãn, và mỗi người có một cách thư giãn khác nhau như: chơi thể thao, tập Gym, bơi lội...vv. Ngoài ra, hiện nay xông hơi là cách hữu hiệu nhất đáp ứng được nhu cầu giảm căng thẳng mệt mỏi.', 'avc', 'JTLtDuUTJP1cOySCa8XV65W6ziIqvC6Dlx71pPRV.jpeg', '2019-05-06', '<p>Sau một ng&agrave;y l&agrave;m việc mệt mỏi chắc hẳn ai cũng muốn c&oacute; ri&ecirc;ng cho m&igrave;nh một kh&ocirc;ng gian để thư gi&atilde;n, v&agrave; mỗi người c&oacute; một c&aacute;ch thư gi&atilde;n kh&aacute;c nhau như: chơi thể thao, tập Gym, bơi lội...vv. Ngo&agrave;i ra, hiện nay x&ocirc;ng hơi l&agrave; c&aacute;ch hữu hiệu nhất đ&aacute;p ứng được nhu cầu giảm căng thẳng mệt mỏi. Một v&agrave;i năm trở lại đ&acirc;y&nbsp;<a href=\"http://xonghoidanang.com/\" title=\"phòng xông hơi\">ph&ograve;ng x&ocirc;ng hơi</a>&nbsp;đang l&agrave; ti&ecirc;u ch&iacute; của rất nhiều người ti&ecirc;u d&ugrave;ng Việt. X&ocirc;ng hơi kh&ocirc;ng chỉ những giảm căng thẳng mệt mỏi m&agrave; c&ograve;n mang lại những lợi &iacute;ch hữu hiệu chữa được một số bệnh như cảm c&uacute;m, giảm mỡ m&agrave; &iacute;t ai ngờ đến. Sử dụng m&aacute;y x&ocirc;ng hơi thường xuy&ecirc;n v&agrave; đ&uacute;ng c&aacute;ch th&igrave; việc để sở hữu một l&agrave;n da trắng mịn sẽ kh&ocirc;ng c&ograve;n l&agrave; vấn đề qu&aacute; nan giải với chị em phụ nữ. Liệu ph&aacute;p d&ugrave;ng m&aacute;y x&ocirc;ng hơi gia đ&igrave;nh sẽ gi&uacute;p lỗ ch&acirc;n l&ocirc;ng được gi&atilde;n nở, da được l&agrave;m sạch s&acirc;u thẩm thấu đồng thời loại bỏ độc tố tr&ecirc;n da qua đ&oacute; gi&uacute;p da trắng mịn kh&ocirc;ng t&igrave; vết.</p>', 4),
(8, 'NHỮNG ĐIỀU CẦN BIẾT VỀ ĐÁ MUỐI HIMALAYA', 'là sản phẩm được làm từ loại đá muối hồng tinh khiết nhất trên thế giới, được khai thác ở dãy Himalaya (Pakistan) từ độ sâu hơn 2km trong lòng đất. Cách nay 250 triệu năm, các cuộc va chạm thềm lục địa và các cơn đại hồng thủy đã làm vùi lấp các đại dương nhỏ.', 'a', 'CfTuxexrdFRQk8fqdd5ZQfi0Nk68p2B2sbK5Gexk.jpeg', '2019-05-06', '<p>&agrave; sản phẩm được l&agrave;m từ loại đ&aacute; muối hồng tinh khiết nhất tr&ecirc;n thế giới, được khai th&aacute;c ở d&atilde;y Himalaya (Pakistan) từ độ s&acirc;u hơn 2km trong l&ograve;ng đất. C&aacute;ch nay 250 triệu năm, c&aacute;c cuộc va chạm thềm lục địa v&agrave; c&aacute;c cơn đại hồng thủy đ&atilde; l&agrave;m v&ugrave;i lấp c&aacute;c đại dương nhỏ. Dần dần, nước biển của c&aacute;c đại dương n&agrave;y bốc hơi, c&aacute;c tinh thể muối kết hợp với c&aacute;c kho&aacute;ng chất tự nhi&ecirc;n trong l&ograve;ng đất h&igrave;nh th&agrave;nh n&ecirc;n những mỏ đ&aacute; muối hồng Himalaya v&ocirc; c&ugrave;ng qu&yacute; gi&aacute;.<br />\r\nDo đ&oacute; m&agrave; trong đ&aacute; muối hồng Himalaya c&oacute; chứa đến 84 trong tổng số 92 loại kho&aacute;ng chất c&oacute; lợi cho sức khoẻ. Với 85,62 % natri clorua v&agrave; 14,38% kho&aacute;ng chất vi lượng kh&aacute;c như: sunfat, magi&ecirc;, canxi, kali, bicarbonate, &hellip;đ&aacute; muối hồng Himalaya được khoa học chứng minh l&agrave; c&oacute; nhiều c&ocirc;ng dụng cho sức khỏe v&agrave; l&agrave;m đẹp.</p>', 4),
(9, 'Lê Hồng Phong', 'abc', '123', 'iHXTm3wVle1SW1fZQkIinrWtcjQFg64tyrt5cK0L.jpeg', '2019-05-15', '<p>abc</p>', 1),
(10, 'Lê Hồng Phong Tuyển Dụng', 'Lê Hồng Phong Tuyển Dụng', 'Lê Hồng Phong Tuyển Dụng', '6uV4WCCLK76D6b1wj2Mx3yyGqgYB8XokXA5n1Nf5.jpeg', '2019-05-07', '<p>abc</p>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenSP` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomTat` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productDetail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLoaiSanPham` int(11) NOT NULL,
  `maSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenSP`, `tomTat`, `keyword`, `gia`, `img`, `img1`, `img2`, `img3`, `productDetail`, `maLoaiSanPham`, `maSanPham`) VALUES
(7, 'Máy xông hơi ướt KINGSTEAM N45 (4,5KW)', 'Máy xông hơi ướt KINGSTEAM N45 (4,5KW)', 'Máy xông hơi ướt KINGSTEAM N45 (4,5KW)', 8000000, 'kP02MaUtpM2QwyvuD0q73MXNziALqOsqe8ssuDFR.jpeg', 'VLM2dMCsIuzZsXmCbDCU38ByLBMZgV1P4P72pQo0.jpeg', '0EpX8lWHpJsHQdzwoEzULm34EIfPH4sk2jTswtOm.jpeg', '1hpJk0mXVrqsKQU1AcbsbNrQ0bqbCcij11Bvw4SN.jpeg', '<p><strong>T&ecirc;n Sản Phẩm</strong>&nbsp;&nbsp;:<strong>vb</strong></p>\r\n\r\n<p>- M&atilde; Sản Phẩm &nbsp; &nbsp; &nbsp; &nbsp;:a.</p>\r\n\r\n<p>- C&ocirc;ng Suất &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 4500&nbsp;w&nbsp;- ( 4.5 Kw ) .</p>\r\n\r\n<p>- Bảng&nbsp;điều khiển &nbsp; &nbsp; &nbsp;- Bảng Điện Tử ( Hiển thị số v&agrave; t&ugrave;y chỉnh thời&nbsp;gian , nhiệt&nbsp;độ theo y&ecirc;u cầu &nbsp;)&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hoặc &nbsp; &nbsp;- Điều Khiển Cơ ( T&ugrave;y chỉnh theo nhiệt độ v&agrave; kh&ocirc;ng c&oacute; hiển thị số )</p>\r\n\r\n<p>- Điện thế &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 220V - 380V ( Sử&nbsp;dụng&nbsp;điện&nbsp;1 pha hoặc&nbsp;3 pha t&ugrave;y&nbsp;theo c&ocirc;ng tr&igrave;nh&nbsp;)</p>\r\n\r\n<p>- D&ograve;ng điện &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 26 A - 32 A</p>\r\n\r\n<p>- K&iacute;ch thước &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : D&agrave;i 40cm &nbsp;x Rộng 15cm x&nbsp;Cao 40cm&nbsp;</p>\r\n\r\n<p>- Trọng&nbsp;lượng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 6 Kg</p>\r\n\r\n<p>- D&ugrave;ng&nbsp;cho ph&ograve;ng&nbsp;c&oacute;&nbsp;thể&nbsp;t&iacute;ch&nbsp;&nbsp;: 1 &ndash; 3 m3 .</p>\r\n\r\n<p>- Thời&nbsp;gian l&agrave;m n&oacute;ng : 3 - 5 Ph&uacute;t</p>\r\n\r\n<p>- Hệ thống van xả cặn, l&agrave;m sạch&nbsp;m&aacute;y&nbsp;thủ&nbsp;c&ocirc;ng&nbsp;.</p>\r\n\r\n<p><em><strong>Thời gian bảo h&agrave;nh sản phẩm : 18 Th&aacute;ng kể từ ng&agrave;y b&agrave;n giao sử dụng .</strong></em></p>', 1, 1),
(8, 'KingSauna - N60 (6KW)', 'KingSauna - N60 (6KW)', 'KingSauna - N60 (6KW)', 8500000, 'iDR0jg8BdGtnqf5vgehfuHzLjtdcHrR0sFgrtiCk.jpeg', 'eHyN5SJShZJFFuQhcNXAQ2xUiqGHhqD1uh2O5nwd.jpeg', 'RCWwm2dGDIwext4otsOH22rafL4TKE3QeHKl3FOM.jpeg', 'loyGnEoJEo1eRIYgoCssGSuhoAeD0CS4yE6lvvAI.jpeg', '<p><strong>1. T&ecirc;n Sản Phẩm &nbsp;:</strong>&nbsp;<strong><a href=\"http://kingsteamsauna.com/may-xong-hoi-kho-kingsauna\" title=\"Máy Xông Khô \">M&aacute;y X&ocirc;ng Kh&ocirc;&nbsp;</a>KingSauna&nbsp;N - Serial</strong></p>\r\n\r\n<p>- M&atilde; Sản Phẩm &nbsp; &nbsp; &nbsp; &nbsp;:<strong><a href=\"http://kingsteamsauna.com/may-xong-hoi-kho-kingsauna-n60.html\" title=\"KingSauna - N60\">KingSauna - N60</a></strong>&nbsp;.</p>\r\n\r\n<p>- C&ocirc;ng Suất &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 6000&nbsp;w&nbsp;- ( 6 Kw ) .</p>\r\n\r\n<p>- Bảng&nbsp;điều khiển &nbsp; &nbsp; &nbsp;- Bảng Điện Tử ( Hiển thị số v&agrave; t&ugrave;y chỉnh thời&nbsp;gian , nhiệt&nbsp;độ theo y&ecirc;u cầu &nbsp;)&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hoặc &nbsp; &nbsp;- Điều Khiển Cơ ( T&ugrave;y chỉnh theo nhiệt độ v&agrave; kh&ocirc;ng c&oacute; hiển thị số )</p>\r\n\r\n<p>- Điện thế &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 220V - 380V ( Sử&nbsp;dụng&nbsp;điện&nbsp;1 pha hoặc&nbsp;3 pha t&ugrave;y&nbsp;theo c&ocirc;ng tr&igrave;nh&nbsp;)</p>\r\n\r\n<p>- D&ograve;ng điện &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 28 A - 32 A</p>\r\n\r\n<p>- K&iacute;ch thước &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp;D&agrave;i 37cm &nbsp;x Rộng 23cm x&nbsp;Cao 60cm&nbsp;</p>\r\n\r\n<p>- Trọng&nbsp;lượng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 5 Kg</p>\r\n\r\n<p>- D&ugrave;ng&nbsp;cho ph&ograve;ng&nbsp;c&oacute;&nbsp;thể&nbsp;t&iacute;ch&nbsp;&nbsp;: 2 &ndash; 4 m3 .</p>\r\n\r\n<p>- Thời&nbsp;gian l&agrave;m n&oacute;ng : 3 - 5 Ph&uacute;t .</p>', 2, 2),
(9, 'Phòng Xông Hơi Khô KS - C106', 'Phòng Xông Hơi Khô KS - C106', 'Phòng Xông Hơi Khô KS - C106', 10000000, 'ejjbquxCQeuE2Uj6LGyc1zmtcEzOJcj9GcxhffsS.jpeg', 'ZPjimG0N3dNF0jkpeHapOGg6PdyKErqoMLameLKu.jpeg', '7akYAwb1l02q4CVevS1NecjbBHht6pyZ2zJ9roAw.jpeg', 'XrTu6n0pajV7OmJu1yVYzS1nnJm4oyVSxkzUF8M8.jpeg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;được c&aacute;c chuy&ecirc;n gia chăm s&oacute;c sức khỏe đầu ng&agrave;nh khuy&ecirc;n d&ugrave;ng bởi n&oacute; được v&iacute; như một liệu ph&aacute;p chăm s&oacute;c sức khỏe tuyệt vời hiện nay. Kh&ocirc;ng chỉ gi&uacute;p thư gi&atilde;n, giải stress hiệu quả,&nbsp;<strong><a href=\"http://xonghoidanang.com/phong-xong-hoi-kho-sauna\">ph&ograve;ng x&ocirc;ng hơi kh&ocirc;</a></strong>&nbsp;c&ograve;n gi&uacute;p đ&agrave;o thải độc tố , giết chết vi khuẩn k&iacute; sinh trong cơ thể, ti&ecirc;u độc mỡ, chăm s&oacute;c da,&hellip;.</p>', 3, 5),
(10, 'Phòng Xông Hơi Hồng Ngoại HS - 101A', 'Phòng Xông Hơi Hồng Ngoại HS - 101A', 'Phòng Xông Hơi Hồng Ngoại HS - 101A', 18000000, 'sdo4fZnwIwm4MzqR0n3g4wuAtmnZmyxpo5egEinU.jpeg', '6JT8txhMvj1t1wmwqNkfOEwDuYTi0Ugs5xFrxUKR.jpeg', '1fEDfnZJgJZj1JF92hM6RS9tyi6LMSvf33bu1FIF.jpeg', 'enpzGkv2RBCwJ7G3w8fcWxQ3U6hCyaB6I5dnSrhT.jpeg', '<p>Sản xuất bằng Gỗ th&ocirc;ng Phần Lan nhập khẩu .<br />\r\ntốt cho xương cốt .<br />\r\n&ndash; Cửa k&iacute;nh nh&igrave;n ra ngo&agrave;i sang trọng, tinh tế .<br />\r\n&ndash; Đ&egrave;n led chiếu ngo&agrave;i v&agrave; trong .<br />\r\n&ndash; Bản điều khiển điện tử , t&iacute;ch hơp bộ điều khiển đ&egrave;n led v&agrave; m&aacute;y nghe nhạc .<br />\r\n&ndash; Oxi Ionizer (Điều h&ograve;a oxy, duyệt khuẩn bằng Ionizer) .<br />\r\n&ndash; Nhiệt độ hoạt động từ 38 &ndash; 65 độ C .</p>', 4, 4),
(11, 'Bồn tắm massage Nofer PM-1010', 'Bồn tắm massage Nofer PM-1010', 'Bồn tắm massage Nofer PM-1010', 500000, 'qFM2XWUnmn7buNFDuBA0s2h3wMhDTt3mz4NVLziY.jpeg', 'ht1LvhydsD5kcqpk3Qf8HnnXSfqG53lZPa0QL5Cr.jpeg', 'UMN2W2QbmCorj4CWppMBchit8IxIURYsa2YLQISu.jpeg', 'GrczX75HWgBtKFxvU9tykuBSiGFtAzu8Fqb5fXTf.jpeg', '<p>ab</p>', 6, 10),
(12, 'Bồn tắm massage Caesar MT0660C', 'Bồn tắm massage Caesar MT0660C', 'Bồn tắm massage Caesar MT0660C', 800000, 'DGofCYcxsbTvMIotfh7gJ0YlgllcQzwwaDlZAFRw.jpeg', '7ttKW3ZfnAp66tXLLRYpoAQzrYbBHfFb21iHaiQK.jpeg', '4sPveWFBH9l26uiDNBDBbizZQWtUpUvbkzZhvRId.jpeg', 'p9mT5em7k7fv9vwJuKeinIZMyOcd6Md24q9YPcWo.jpeg', '<p>abc</p>', 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '$2y$10$SUh1lzfSrthenGfJICefnOImGAVCiDxqWcVegVdUPHC7oeqoeBxJG', 'Lê Hồng Phong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
