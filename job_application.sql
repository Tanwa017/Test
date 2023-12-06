-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 05:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_work`
--

CREATE TABLE `apply_work` (
  `id_work` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sername` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameEN` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_position` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desired_salary` int(10) NOT NULL,
  `money_month` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_work`
--

INSERT INTO `apply_work` (`id_work`, `name`, `sername`, `nameEN`, `nickname`, `sex`, `apply_position`, `desired_salary`, `money_month`) VALUES
(1, 'คธาวุฒิ', 'นาคหัสดี', 'Khathawut  Nakhasssadi', 'Tanwa', 'ชาย', 'web developer', 75000, 'เดือน'),
(2, 'นูรฮายาตี', 'อารงค์', 'Asher', 'Asher', 'หญิง', 'เลขานุการ', 50000, 'เดือน'),
(3, 'ธนาพร', 'ภูลายยาว', 'Phoenix', 'Phoenix', 'หญิง', 'หัวหน้าฝ่ายบริหารผู้มีอำนาจเต็ม', 65000, 'เดือน'),
(4, 'อุดม', 'โปษะกฤษณะ', 'UDOM  POSHAKRISHNA', 'Silas', 'ชาย', 'ผู้จัดการฝ่ายเทคนิค', 75000, 'เดือน'),
(5, 'กษาน', 'จาติกวนิช', 'KASADN  CHARTIKAUANS', 'Ryder', 'หญิง', 'เลขาผู้บริหาร', 65000, 'เดือน'),
(6, 'จรัส', 'สุวรรณเวลา', 'CHARAS  SUWANWELA', 'Jude', 'ชาย', 'ประธาน', 500000, 'เดือน'),
(7, 'ธํารงรัตน์', 'แก้วกาญจน์', 'THAMRONGRAT  KEOKARN', 'Finn', 'ชาย', 'ที่ปรึกษาอาวุโส', 20000, 'เดือน'),
(8, 'เฉลี่ย', 'วัชรพุกก์', 'CHALIA  VAJRABUKKA', 'Kai', 'ชาย', 'หัวหน้าแผนก', 45000, 'เดือน'),
(9, 'ลิ้ม', 'คุณวิศาล', 'LIM  KOONVISAL', 'Ronan', 'ชาย', 'ผู้จัดการทั่วไป', 35000, 'เดือน'),
(10, 'สัมพันธ์', 'ตันติวงศ์', 'SAMPANDH  TANTIWONGSE', 'Orion', 'ชาย', 'หัวหน้าแผนก', 45000, 'เดือน'),
(11, 'กิจจา', 'สินธวานนท์', 'KIJJA  SINDHVANANDA', 'Beckham', 'ชาย', 'ผู้จัดการทั่วไป', 85000, 'เดือน'),
(12, 'พิสิฎฐ์', 'วิเศษกุล', 'PISITH  VISESHAKUL', 'Maddox ', 'ชาย', 'ผู้จัดการฝ่ายโรงงาน', 30000, 'เดือน'),
(13, 'นที', 'รักษ์พลเมือง', 'NATEE  RUKSPOLLMUANG', 'Roman', 'หญิง', 'ผู้จัดการฝ่ายขาย', 25000, 'เดือน'),
(14, 'รุ่งธรรม', 'ลัดพลี ', 'RONGTAM  LADPLI', 'Reid', 'ชาย', 'คณะบริหาร', 35000, 'เดือน'),
(15, 'วิชัย', 'บํารุงผล', 'VICHAI  BAMRUNGPHOL', 'Knox', 'ชาย', 'กรรมการ', 45000, 'เดือน'),
(16, 'กัมพล', 'ประจวบเหมาะ', 'KAMPOL  PRACHUABMOH', 'Luca', 'หญิง', 'ผู้จัดการฝ่ายผลิตภัณฑ์', 55000, 'เดือน'),
(17, 'เสนอ', 'อินทรสุขศรี ', 'SNOE  INDRASUKHSRI', 'Wilder', 'ชาย', 'กรรมการ', 65000, 'เดือน'),
(18, 'พลภัทร', 'ตาละลักษมณ์', 'POLPATT  TALALAK', 'Bodhi', 'ชาย', 'ผู้จัดการฝ่ายส่งออก', 75000, 'เดือน'),
(19, 'ไพบูลย์', 'สุทธิวรรณ', 'PHAIBUL  SUTTHIWAN', 'Cruz', 'ชาย', 'คณะบริหาร', 85000, 'เดือน'),
(20, 'ถาวร', 'จรูญสมิทธ์', 'THAVORN  CHAROONSMITH', 'Callum', 'ชาย', 'ผู้จัดการสาขา', 95000, 'เดือน'),
(21, 'สิริ', 'สถาวระ', 'SIRI  SATHAVARA', 'Ezra', 'หญิง', 'Account Executive', 150000, 'เดือน'),
(22, 'สมัค', 'พุกกะณะเสน', 'SOMAK  BUKKANASEN', 'Lachlan', 'หญิง', 'Project Coordinator', 130000, 'เดือน'),
(23, 'ชิน', 'บูรณธรรม', 'CHIN  BURANADHAM', 'Jasper', 'ชาย', 'รองประธานกรรมการ', 170000, 'เดือน'),
(24, 'ระเบียบ', 'ฤกษ์เกษม', 'RABIEB  RERKASEM', 'Kieran', 'ชาย', 'Graphic Designer', 300000, 'เดือน'),
(25, 'เปรม', 'บุรี', 'PREM  BURI', 'Finnegan', 'ชาย', 'ผู้จัดการฝ่ายบัญชี', 200000, 'เดือน'),
(26, 'A', 'B', 'A  B', 'A', 'หญิง', 'อาจารย์', 45000, 'เดือน'),
(27, 'team', '', '', '', '', '', 0, ''),
(28, 'team', 'Nakhatsadi', 'team Nakhatsadi', 'TK', 'ชาย', 'HR', 2500, ''),
(29, 'team', 'Nakhatsadi', 'team Nakhatsadi', 'TK', 'ชาย', 'HR', 2500, 'วัน'),
(30, 'team', 'Nakhatsadi', 'team Nakhatsadi', 'TK', 'ชาย', 'HR', 2500, 'วัน'),
(31, 'team', 'Nakhatsadi', 'team Nakhatsadi', 'TK', 'ชาย', 'HR', 2500, 'วัน'),
(32, 'team', 'Nakhatsadi', 'team Nakhatsadi', 'TK', 'ชาย', 'HR', 2500, 'วัน'),
(33, 'team', 'Nakhatsadi', 'team Nakhatsadi', 'TK', 'ชาย', 'HR', 2500, 'วัน');

-- --------------------------------------------------------

--
-- Table structure for table `family_history`
--

CREATE TABLE `family_history` (
  `id_history` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marriage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_wh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_workplace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_studying` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_education` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_history`
--

INSERT INTO `family_history` (`id_history`, `id_work`, `status`, `marriage`, `name_wh`, `name_workplace`, `position`, `child`, `child_studying`, `child_education`) VALUES
(1, 1, 'โสด', '', '', '', '', '', '', ''),
(3, 2, 'โสด', '', '', '', '', '', '', ''),
(4, 3, 'โสด', '', '', '', '', '', '', ''),
(5, 4, 'โสด', '', '', '', '', '', '', ''),
(6, 5, 'โสด', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sername` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_events` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `username`, `password`, `name`, `sername`, `address`, `telephone`, `email`, `interest`, `special_events`, `hobby`, `payment`) VALUES
(97, 'senashin19@gmail.com', '0000', 'team', 'Nakhatsadi', 'สำราญราษฎร์, พระนคร, กรุงเทพมหานคร, 10200', '0910102205', 'khathawutoon1@gmail.com', 'นอน', 'นอน', 'นอน', 'bank_transfer'),
(98, '1164304620241@mail.rmutt.ac.th', '0000', 'team', 'Nakhatsadi', 'สำราญราษฎร์, พระนคร, กรุงเทพมหานคร, 10200', '0910102205', 'khathawutoon1@gmail.com', '', '', '', ''),
(99, 'd310', '0000', 'team', 'Nakhatsadi', 'สำราญราษฎร์, พระนคร, กรุงเทพมหานคร, 10200', '0910102205', 'khathawutoon1@gmail.com', '', '', '', ''),
(100, 'd310', '0000', '', '', '', '', '', '', '', '', ''),
(101, '0000', '0000', '', '', '', '', '', '', '', '', ''),
(102, 'K', '4578', 'G', 'R', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `id_work` int(11) NOT NULL,
  `house_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `age` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_issue` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_card` date NOT NULL,
  `tax_number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `security_number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `military` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id_personal`, `id_work`, `house_address`, `current_address`, `telephone`, `mobile`, `email`, `home`, `birthday`, `age`, `height`, `weight`, `nationality`, `nation`, `religion`, `id_card`, `place_issue`, `expired_card`, `tax_number`, `security_number`, `military`) VALUES
(1, 1, 'พิษณุโลก', 'ปทุมธานี', '', '0910102205', 'khathawutoon1@gmail.com', 'หอพัก', '2000-12-17', '23', '165', '52', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'พิษณุโลก', '2023-10-31', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(2, 2, 'ลพบุรี', 'สมุทรปราการ', '', '0637780483', 'gu_indy_2@hotmail.com', 'บ้านตัวเอง', '2023-10-08', '30', '176', '65', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ลพบุรี', '2023-10-14', '1234567895236', '2365987412587', 'ปลดเป็นทหารกองหนุน'),
(3, 3, 'นนทบุรี', 'กรุงเทพมหานคร', '', '0932122621', 'choccolate_dogey@sanook.com', 'หอพัก', '2023-10-01', '28', '170', '69', 'ไทย', 'ไทย', 'พุทธ', '1568522224587', 'นนทบุรี', '2023-10-28', '2587456939999', '2589631478569', 'ปลดเป็นทหารกองหนุน'),
(4, 4, 'สิงห์บุรี', 'ปทุมธานี', '', '0637780483', 'life_m_2@hotmail.com', 'หอพัก', '2024-01-27', '30', '176', '52', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'สิงห์บุรี', '2023-10-28', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(5, 5, 'ตราด', 'กรุงเทพมหานคร', '', '0932122621', 'zeonixpsycho@hotmail.com', 'หอพัก', '2023-10-01', '28', '170', '58', 'ไทย', 'ไทย', 'พุทธ', '1568522224587', 'ตราด', '2023-10-28', '2587456939999', '2589631478569', 'ได้รับการยกเว้น'),
(6, 6, 'นครศรีธรรมราช', 'กรุงเทพมหานคร', '', '0616462860', 'man_narak_40054@hotmail.com', 'หอพัก', '2014-10-29', '23', '176', '52', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'นครศรีธรรมราช', '2023-11-30', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(7, 7, 'ระยอง', 'กรุงเทพมหานคร', '', '0924178164', 'arpub@mthai.com', 'หอพัก', '2004-06-29', '19', '180', '70', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ระยอง', '2023-11-30', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(8, 8, 'สระบุรี', 'กรุงเทพมหานคร', '', '0981368324', 'realra_488@hotmail.com', 'หอพัก', '2009-10-19', '30', '182', '75', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'สระบุรี', '2028-11-30', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(9, 9, 'มุกดาหาร', 'ปทุมธานี', '', '0652097346', 'bizarre_breezer@hotmail.com', 'หอพัก', '2005-05-06', '33', '174', '61', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'มุกดาหาร', '2026-01-20', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(10, 10, 'สกลนคร', 'กรุงเทพมหานคร', '', '0944915472', 'peam_28@hotmail.com', 'หอพัก', '2015-08-23', '27', '167', '55', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'สกลนคร', '2029-09-30', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(11, 11, 'จันทบุรี', 'นนทบุรี', '', '0935530044', 'nabilaloves@hotmail.com', 'หอพัก', '2011-12-20', '27', '172', '65', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'จันทบุรี', '2027-01-03', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(12, 12, 'ลพบุรี', 'สมุทรปราการ', '', '0649922255', 'deckyd8b9@hotmail.com', 'หอพัก', '2010-10-29', '35', '169', '60', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ลพบุรี', '2024-11-30', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(13, 13, 'อุบลราชธานี', 'กรุงเทพมหานคร', '', '0987654321', 'homo-dyz@hotmail.com', 'หอพัก', '1997-08-12', '26', '175', '54', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'อุบลราชธานี', '2025-09-09', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(14, 14, 'ชัยนาท', 'กรุงเทพมหานคร', '', '0615390937', 'essentials_may@hotmail.com', 'หอพัก', '1998-10-29', '25', '178', '50', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ชัยนาท', '2027-04-18', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(15, 15, 'จันทบุรี', 'กรุงเทพมหานคร', '', '0934103032', 'Ne_Nekino@hotmail.com', 'หอพัก', '1999-10-29', '24', '165', '48', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'จันทบุรี', '2029-06-13', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(16, 16, 'ตราด', 'กรุงเทพมหานคร', '', '0935737034', 'frindclub@hotmail.com', 'หอพัก', '2004-10-29', '19', '172', '50', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ตราด', '2030-07-30', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(17, 17, 'ชลบุรี', 'กรุงเทพมหานคร', '', '0984709890', 'diary_prince@hotmail.com', 'หอพัก', '2000-10-29', '23', '181', '73', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ชลบุรี', '2029-12-30', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(18, 18, 'ศรีสะเกษ', 'กรุงเทพมหานคร', '', '0959125645', 'beer_nobody_n@hotmail.com', 'หอพัก', '2000-01-29', '23', '176', '60', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ศรีสะเกษ', '2000-02-24', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(19, 19, 'อำนาจเจริญ', 'กรุงเทพมหานคร', '', '0820472818', 'Chu_kee@hotmail.com', 'หอพัก', '2000-10-11', '23', '168', '48', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'อำนาจเจริญ', '2033-05-25', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(20, 20, 'แม่ฮ่องสอน', 'กรุงเทพมหานคร', '', '0945305876', 'G_Girlll@hotmail.com', 'หอพัก', '1997-05-05', '26', '177', '57', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'แม่ฮ่องสอน', '2032-04-19', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(21, 21, 'อุทัยธานี', 'กรุงเทพมหานคร', '', '0634154366', 'june_re@hotmail.com', 'หอพัก', '1996-06-13', '27', '169', '49', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'อุทัยธานี', '2029-12-31', '', '', 'ได้รับการยกเว้น'),
(22, 22, 'ชัยภูมิ', 'นนทบุรี', '', '0943634554', 'tongchai@yahoo.com', 'หอพัก', '1995-11-11', '28', '174', '55', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ชัยภูมิ', '2028-11-30', '', '', 'ได้รับการยกเว้น'),
(23, 23, 'นครสวรรค์', 'กรุงเทพมหานคร', '', '0971203104', 'Songkrot25@hotmail.com', 'หอพัก', '2000-04-04', '23', '176', '58', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'นครสวรรค์', '2033-07-07', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(24, 24, 'ตาก', 'กรุงเทพมหานคร', '', '0614585232', 'p_Gz7@hotmail.com', 'หอพัก', '2000-03-03', '23', '180', '65', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'ตาก', '2030-06-28', '1234567895236', '2365987412587', 'ได้รับการยกเว้น'),
(25, 25, 'กำแพงเพชร', 'กรุงเทพมหานคร', '', '0823578082', 'str4wb3rry_1@hotmail.com', 'หอพัก', '2000-01-01', '23', '169', '55', 'ไทย', 'ไทย', 'พุทธ', '1659900000000', 'กำแพงเพชร', '2031-02-01', '1234567895236', '2365987412587', 'ได้รับการยกเว้น');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_work`
--
ALTER TABLE `apply_work`
  ADD PRIMARY KEY (`id_work`);

--
-- Indexes for table `family_history`
--
ALTER TABLE `family_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_work` (`id_work`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `id_work` (`id_work`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_work`
--
ALTER TABLE `apply_work`
  MODIFY `id_work` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `family_history`
--
ALTER TABLE `family_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `family_history`
--
ALTER TABLE `family_history`
  ADD CONSTRAINT `family_history_ibfk_1` FOREIGN KEY (`id_work`) REFERENCES `apply_work` (`id_work`);

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_work`) REFERENCES `apply_work` (`id_work`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
