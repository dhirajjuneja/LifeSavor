-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 07:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup_table`
--

CREATE TABLE `bloodgroup_table` (
  `sno` int(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodgroup_table`
--

INSERT INTO `bloodgroup_table` (`sno`, `bloodgroup`, `status`) VALUES
(14, 'A--', 'inactive'),
(15, 'B-', 'active'),
(16, 'O+', 'active'),
(17, 'B+', 'active'),
(18, 'AB+', 'active'),
(19, 'AB-', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bloodregistration`
--

CREATE TABLE `bloodregistration` (
  `sno` int(100) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_no` bigint(100) NOT NULL,
  `r_bdate` varchar(100) NOT NULL,
  `r_gen` varchar(100) NOT NULL,
  `r_addr` varchar(200) NOT NULL,
  `r_grp` varchar(100) NOT NULL,
  `r_city` varchar(100) NOT NULL,
  `r_weight` bigint(100) NOT NULL,
  `r_temp` bigint(100) NOT NULL,
  `status` int(1) NOT NULL,
  `trustname` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `donorDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodregistration`
--

INSERT INTO `bloodregistration` (`sno`, `r_name`, `r_email`, `r_no`, `r_bdate`, `r_gen`, `r_addr`, `r_grp`, `r_city`, `r_weight`, `r_temp`, `status`, `trustname`, `password`, `donorDate`) VALUES
(57, 'ram', 'ram@gmail.com', 8976546767, '1999-11-11', 'male', 'Mumbai', 'O+', 'Navi-Mumbai', 78, 89, 1, '8', 'ram', '2023-06-19'),
(58, 'Rama', 'r@gmail.com', 8765433355, '1990-11-11', 'female', 'Punjab', 'AB+', 'Kharar', 78, 98, 0, '12', 'rama', '2023-01-11'),
(59, 'Suraj', 'su@gmail.com', 63846937732, '1889-12-11', 'male', 'Bihar', 'AB+', 'patna', 67, 100, 0, '12', 'suraj', '2023-06-08'),
(60, 'Rajan', 'rajan@gmail.com', 99996937732, '1889-04-24', 'male', 'Bihar', 'AB+', 'patna', 67, 100, 1, '12', 'rajan', '2023-06-20'),
(61, 'Raman', 'raman@gmail.com', 99996937732, '1889-04-24', 'male', 'Bihar', 'AB+', 'patna', 67, 100, 0, '12', 'raman', '2023-06-19'),
(62, 'Rahul', 'rahul@gmail.com', 9999693700, '1889-04-24', 'male', 'Bihar', 'AB-', 'patna', 67, 100, 0, '12', 'rahul', '2022-05-29'),
(63, 'Kanahaiya', 'kanhaiya@gmail.com', 99996937732, '1999-04-24', 'male', 'Mumbai', 'AB+', 'ulbe', 67, 100, 0, '12', '12345', '2023-04-23'),
(64, 'Juhi', 'juhi@gmial.com', 8790756430, '1997-11-11', 'female', 'Samastipur', 'A+', 'Samstipur', 45, 98, 1, '13', 'juhi', '2023-06-19'),
(65, 'Raja', 'raja@gmail.com', 9658739856, '2001-04-23', 'male', 'Ayodhaya', 'A+', 'Ayodhaya,', 56, 96, 1, '13', '12345', '2023-06-02'),
(72, 'Chandan', 'Chandan@gmail.com', 9833485840, '2001-04-23', 'male', 'UP', 'A+', 'Lucknow', 76, 98, 1, '13', '12345', '2023-06-03'),
(73, 'Shubham', 'shubham@gmail.com', 9057658746, '2001-11-11', 'male', 'Rajasthan', 'O-', 'Jaipur', 67, 90, 0, '13', 'shubham', '2023-06-03'),
(74, 'Manshi', 'manshi@gmial.com', 9873214342, '2001-11-11', 'female', 'Delhi', 'B-', 'delhi', 67, 90, 1, '13', '98797', '2023-06-03'),
(75, 'Sanjay', 'sanjay@gmail.com', 9238675948, '1996-11-12', 'male', 'UP', 'A+', 'Kanpur', 67, 96, 0, '8', '1234', NULL),
(76, 'Sandhya', 'sandhya@gmail.com', 8475479957, '2023-06-29', '', 'Bihar', 'B-', 'Muzaffarpur', 54, 98, 1, '13', '12345', '2023-06-17'),
(77, 'Sandhya', 'sandhya@gmail.com', 8475479957, '2023-06-29', '', 'Bihar', 'B-', 'Muzaffarpur', 54, 98, 0, '13', '12345', NULL),
(78, 'Sandhya', 'sandhya@gmail.com', 8475479957, '2023-06-29', '', 'Bihar', 'B-', 'Muzaffarpur', 54, 98, 0, '13', '12345', NULL),
(79, 'Sandhya', 'sandhya@gmail.com', 8475479957, '2023-06-29', '', 'Bihar', 'B-', 'Muzaffarpur', 54, 98, 1, '13', '12345', '2023-06-17'),
(80, 'Sandhya', 'sandhya@gmail.com', 8475479957, '2023-06-29', '', 'Bihar', 'B-', 'Muzaffarpur', 54, 98, 0, '13', '12345', NULL),
(81, 'Sandhya', 'sandhya@gmail.com', 8475479957, '2023-06-29', '', 'Bihar', 'B-', 'Muzaffarpur', 54, 98, 1, '13', '12345', '2023-06-19'),
(82, 'Sandhya', 'sandhya@gmail.com', 8475479957, '2023-06-29', 'female', 'Bihar', 'B-', 'Muzaffarpur', 54, 98, 1, '13', '12345', '2023-06-17'),
(83, 'sdfgh', 'sdfghjmks', 3456789, '2023-06-03', 'female', '45678ijuhgfds', 'AB+', 'Mohali', 67, 90, 0, '12', '12345', NULL),
(84, 'df', 'g@gmail.com', 768438658, '2023-06-16', 'female', '7itygh', 'AB+', 'bvnbcxz', 10, 100, 0, '34', '', NULL),
(85, 'wsedrftghyd', 'fgh@gmail.com', 23456789765, '2023-06-21', 'female', '4etgfc', 'AB+', 'dcfvbgnh', 78, 90, 0, '29', '325648736', NULL),
(86, 'dfghj', 'dfghj@gmail.com', 8765432, '2023-06-14', 'female', '3werdf', 'A+', 'fdv', 78, 90, 0, '31', '2456', NULL),
(87, 'dcfvgbhnj', 'dfcgvbnhjmk@gmail.com', 9876543, '2023-06-15', 'female', '4refdvc', 'AB-', 'dcv ', 78, 90, 0, '32', '', NULL),
(88, 'dfghf', 'gh@gmail.com', 78654321, '2023-06-07', 'female', 'retfgh', 'O', 'Muzaffarpur', 89, 90, 0, '31', '46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blood_information`
--

CREATE TABLE `blood_information` (
  `sno` int(200) NOT NULL,
  `grp_name` varchar(10) NOT NULL,
  `grp_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_information`
--

INSERT INTO `blood_information` (`sno`, `grp_name`, `grp_detail`) VALUES
(1, 'O+', 'O+ can donate red blood cells to anybody. It\'s the universal donor.'),
(2, 'O-', 'O negative universal blood type can only receive O negative blood(Heroes for Babies at the Red Cross because it is the safest blood for transfusions for immune deficient newborns'),
(3, 'A+', 'What is special about A+ blood? A+ is a powerful blood type because it is the second most common blood type. Since 36% of the population is A+ it is among the blood types transfused most often. The mo'),
(4, 'A-', 'A- blood group: rare type, A antigen present, Rh antigen absent. Compatible for transfusions with A-, A+, O-, O+.'),
(5, 'B+', 'B+ blood group: B antigen present, Rh antigen present. Compatible for transfusions with B+, B-, O+, O-. Important for blood typing and transfusion supply.'),
(6, 'B-', 'B- blood group: B antigen present, Rh antigen absent. Compatible for transfusions with B-, O-. Important for blood typing and transfusion purposes.'),
(7, 'AB+', 'AB+ blood group: A and B antigens present, Rh antigen present. Universal recipient, can receive blood from all types.'),
(8, 'AB-', 'AB- blood group: A and B antigens present, Rh antigen absent. Universal plasma donor, limited availability.');

-- --------------------------------------------------------

--
-- Table structure for table `camp_list`
--

CREATE TABLE `camp_list` (
  `sno` int(100) NOT NULL,
  `trust_name` varchar(200) NOT NULL,
  `camp_name` varchar(200) NOT NULL,
  `camp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp_list`
--

INSERT INTO `camp_list` (`sno`, `trust_name`, `camp_name`, `camp_date`) VALUES
(6, 'efdv', 'CU Save Iife sdad', '0000-00-00'),
(7, 'Sukanksha', 'dfg', '0000-00-00'),
(8, 'Manish', 'dfg', '2023-06-21'),
(9, 'Aadhar', 'sdfghj', '2023-06-15'),
(10, 'dcfvbs', 'sdfghjkl;./lkjhgfdxcfvgbhnm,mnbvcxcvbn m', '2023-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `contactpage`
--

CREATE TABLE `contactpage` (
  `sno` int(200) NOT NULL,
  `donor_name` varchar(200) NOT NULL,
  `donor_email` varchar(200) NOT NULL,
  `donor_num` bigint(11) NOT NULL,
  `donor_sub` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactpage`
--

INSERT INTO `contactpage` (`sno`, `donor_name`, `donor_email`, `donor_num`, `donor_sub`) VALUES
(1, 'abhishek', 'abhishek@gmail.com', 12345678901, 'sadfghjmtnfdl;gkjviusdhvuiewksvoi'),
(2, 'aman', 'aman@12345', 987654322, '                    sdjvhdsuiojvouiwhesuovjipwjsoivjweksvkijiowdjsvkklwdjsvio'),
(3, 'aman', 'aman@12345', 987654322, '                    sdjvhdsuiojvouiwhesuovjipwjsoivjweksvkijiowdjsvkklwdjsvio'),
(14, 'abhishek', 'abaipsjdflkds', 2345623456, 'jasdjkncajscklmaskjchjasncjhiojaklcmsazhjjksabchj'),
(15, 'sdfghjk', 'asdfgh@gmail.com', 23456789045, 'dfvgbnm,. vc                    '),
(19, 'dfgdfg', 'gdf@gmail.com', 98567545465, '          fhhvc          '),
(21, 'sdfgfh', 'fgfdhfd@gmail.com', 7867356425, '               5etsdgcxb      '),
(22, 'sdfgfh', 'fgfdhfd@gmail.com', 7867356425, '               5etsdgcxb      '),
(23, 'gergfgfd', 'fg@gmail.com', 0, '  tgfrbv                   '),
(24, 'tgrrfgf', 'fggh@gmail.com', 987654321345, '                  4trgcv   ');

-- --------------------------------------------------------

--
-- Table structure for table `donar_date`
--

CREATE TABLE `donar_date` (
  `donor_id` int(30) NOT NULL,
  `donar_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_gallery`
--

CREATE TABLE `donor_gallery` (
  `id_gallery` int(40) NOT NULL,
  `img_gallery` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `sno` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`sno`, `user_name`, `password_name`) VALUES
(1, 'abhishek_1234', 'abhishek'),
(2, 'sweta', '12345'),
(3, 'raman_3456', 'raman'),
(4, 'kamal_5678', 'kamal');

-- --------------------------------------------------------

--
-- Table structure for table `trust_registattion`
--

CREATE TABLE `trust_registattion` (
  `t_id` int(30) NOT NULL,
  `t_name` varchar(40) NOT NULL,
  `t_addr` varchar(200) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `t_num` bigint(50) NOT NULL,
  `t_reg` varchar(50) NOT NULL,
  `t_certi` varchar(200) NOT NULL,
  `t_logo` blob NOT NULL,
  `t_auth` varchar(50) NOT NULL,
  `status` int(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trust_registattion`
--

INSERT INTO `trust_registattion` (`t_id`, `t_name`, `t_addr`, `t_email`, `t_num`, `t_reg`, `t_certi`, `t_logo`, `t_auth`, `status`, `password`) VALUES
(28, 'Aadhar foundation Mukati', 'Jaipur', 'aadhar@gmail.com', 9876578439, '42334aadhar', '', 0x4243415f3654485f53454d5f4d532e6a706567, 'Sweta', 1, 'aadhar'),
(29, 'Seva Trust', 'Bihar', 'seva1@gmail.com', 8975642133, '3467yuo', '', 0x70696335306a7065672e6a706567, 'fgvb', 1, '1234'),
(30, 'swdfg', 'sdfghb', 'sdfgh@gmail.com', 8346238373, '4rtg', '', 0x6a6176615f43657274696669636174652e6a706567, 'rtfg', 1, 'rtfgb'),
(31, 'dcfvbs', 'cfvb', 'df@gmail.com', 5678909876, '23wedfvc', '', 0x6d63613173745f6d732e6a706567, 'dscxv', 1, '21345'),
(32, 'efdv', 'fdcvx', 'dvc@gmail.com', 8765432344, 'werdsfcxv', '', 0x4d43415f3173745f73656d5f6d732e6a706567, 'werdcs', 1, 'erfdcv'),
(34, 'gjhgjhj', 'ghj', 'gj@gmail.com', 6856646456, '54rtfg', '', 0x63616d70312e706e67, 'tuhgf', 1, 'gfjhngj'),
(35, 'dfvgbh', 'fghjk', 'fgh@gmail.com', 4576854745, 'fghnjm', '', 0x4243415f3654485f53454d5f4d532e6a706567, 'hfd', 1, 'fhfd'),
(36, 'sxdfgv', 'dfgb', 'sa@gmail.com', 876543345676, 'edsfc', '', 0x70705f53776574612e6a7067, '45tyhujm', 0, 'gthjnmk'),
(37, 'lkhj', 'hjj', 'hg@gmail.com', 76543213, '234ertgf', '', 0x4243415f3654485f53454d5f4d532e6a706567, 'nbm', 0, 'jmhn'),
(38, 'sdf', 'dfgb@gmail.com', 'dfgb@gmail.com', 234567898765, 'dfgvhbj', '', 0x416e67756c61722e696e666f7369732e706466, 'sdxcfg', 0, 'sdfghj'),
(39, '4etrfdcvx', 'dfsxcv', 'dfcxv@gmail.com', 3245678, '345tryughj', '', 0x4d43415f3173745f73656d5f6d732e6a706567, 'fdvbn', 0, 'dfgnhm'),
(40, 'sfcds', 'dxfc', 'fh@gmail.com', 8765432232, 'dcvb', '', 0x70616e2e6a706567, 'fdbvn', 0, 'gvbch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup_table`
--
ALTER TABLE `bloodgroup_table`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `bloodregistration`
--
ALTER TABLE `bloodregistration`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `blood_information`
--
ALTER TABLE `blood_information`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `camp_list`
--
ALTER TABLE `camp_list`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contactpage`
--
ALTER TABLE `contactpage`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `donar_date`
--
ALTER TABLE `donar_date`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `donor_gallery`
--
ALTER TABLE `donor_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `trust_registattion`
--
ALTER TABLE `trust_registattion`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup_table`
--
ALTER TABLE `bloodgroup_table`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bloodregistration`
--
ALTER TABLE `bloodregistration`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `blood_information`
--
ALTER TABLE `blood_information`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `camp_list`
--
ALTER TABLE `camp_list`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactpage`
--
ALTER TABLE `contactpage`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `donar_date`
--
ALTER TABLE `donar_date`
  MODIFY `donor_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_gallery`
--
ALTER TABLE `donor_gallery`
  MODIFY `id_gallery` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loginpage`
--
ALTER TABLE `loginpage`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trust_registattion`
--
ALTER TABLE `trust_registattion`
  MODIFY `t_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
