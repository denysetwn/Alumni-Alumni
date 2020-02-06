-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 04:12 PM
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
-- Database: `saintek_alumni_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_global`
--

CREATE TABLE `chat_global` (
  `id_chat` int(128) NOT NULL,
  `id_sender` int(128) NOT NULL,
  `chat_content` varchar(128) NOT NULL,
  `chat_date` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_global`
--

INSERT INTO `chat_global` (`id_chat`, `id_sender`, `chat_content`, `chat_date`) VALUES
(6, 9, 'test', '1578940347'),
(7, 8, 'hai', '1578940395'),
(8, 9, 'bye', '1578985661'),
(9, 7, 'iya', '1578985786'),
(10, 7, 'iya', '1578985786'),
(11, 7, 'joss', '1579185883');

-- --------------------------------------------------------

--
-- Table structure for table `chat_group`
--

CREATE TABLE `chat_group` (
  `id_chat` int(255) NOT NULL,
  `id_sender` int(255) NOT NULL,
  `id_group` int(255) NOT NULL,
  `chat_content` varchar(255) NOT NULL,
  `chat_date` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_group`
--

INSERT INTO `chat_group` (`id_chat`, `id_sender`, `id_group`, `chat_content`, `chat_date`) VALUES
(7, 9, 1, 'hai', '1578940449'),
(8, 9, 1, 'hello', '1578940454'),
(9, 8, 1, 'hai', '1578940575'),
(10, 8, 1, 'hei', '1578985647'),
(11, 7, 1, 'iya', '1578985774'),
(12, 7, 1, 'test', '1579185818'),
(13, 9, 1, 'hei', '1579241715');

-- --------------------------------------------------------

--
-- Table structure for table `chat_personal`
--

CREATE TABLE `chat_personal` (
  `id_chat` int(255) NOT NULL,
  `id_sender` varchar(128) NOT NULL,
  `id_receiver` int(128) NOT NULL,
  `chat_content` mediumtext NOT NULL,
  `chat_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_personal`
--

INSERT INTO `chat_personal` (`id_chat`, `id_sender`, `id_receiver`, `chat_content`, `chat_date`) VALUES
(34, '8', 9, 'hallo', '1578939963'),
(35, '9', 8, 'hai', '1578939998'),
(36, '8', 9, 'selamat datang', '1578985613'),
(37, '9', 8, 'selamat pagi', '1578985637'),
(38, '8', 9, 'test', '1579022038'),
(39, '8', 9, 'kdgfs', '1579022046'),
(40, '8', 9, 'bkdhb', '1579022068'),
(41, '8', 2, 'jkbdkfb', '1579023510'),
(42, '8', 2, 'bd', '1579023513'),
(43, '9', 2, 'hallo', '1579243237'),
(44, '2', 9, 'hai', '1579243261');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(128) NOT NULL,
  `id_posting` int(128) NOT NULL,
  `id_sender` int(128) NOT NULL,
  `comment_content` varchar(128) NOT NULL,
  `date` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_posting`, `id_sender`, `comment_content`, `date`) VALUES
(13, 0, 7, 'hai', 1578149996),
(14, 6, 7, 'hai', 1578150252),
(15, 6, 8, 'hallo', 1578150485),
(16, 7, 7, 'nice  post', 1578150552),
(17, 7, 8, 'thanks', 1578150571),
(18, 8, 8, 'gud picture', 1578155042),
(19, 8, 7, 'thanks', 1578155291),
(20, 8, 7, 'bye', 1578407406),
(21, 9, 9, 'hei', 1578497464),
(22, 9, 9, 'yes', 1578497482),
(27, 6, 9, 'test', 1578929395),
(28, 10, 9, 'gud', 1578929557),
(29, 10, 9, 'test', 1578929563),
(30, 9, 11, 'jkbdk', 1578929580),
(31, 8, 7, 'great', 1578930046),
(32, 11, 10, 'hallo', 1578985526),
(33, 11, 8, 'haii', 1578985539),
(34, 11, 9, 'test', 1578985594),
(35, 12, 7, 'this is my photo', 1578985824),
(36, 13, 9, 'test', 1579241678),
(37, 15, 7, 'test posting', 1579713939);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_access` int(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `name`, `image`, `id_access`, `url`, `is_active`) VALUES
(1, 'Teknik Informatika', '', 3, 'percakapan/group', 1),
(2, 'Teknik Industri', '', 3, 'percakapan/group', 1),
(3, 'Matematika', '', 3, 'percakapan/group', 1),
(4, 'Fisika', '', 3, 'percakapan/group', 1),
(5, 'Kimia', '', 3, 'percakapan/group', 1),
(6, 'Biologi', '', 3, 'percakapan/group', 1),
(7, 'Pendidikan Matematika', '', 3, 'percakapan/group', 1),
(8, 'Pendidikan Fisika', '', 3, 'percakapan/group', 1),
(9, 'Pendidikan Kimia', '', 3, 'percakapan/group', 1),
(10, 'Pendidikan Biologi', '', 3, 'percakapan/group', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(128) NOT NULL,
  `id_sender` int(128) NOT NULL,
  `content_upload` varchar(128) NOT NULL,
  `content_file` varchar(128) NOT NULL,
  `date` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `id_sender`, `content_upload`, `content_file`, `date`) VALUES
(6, 7, 'selamat datang', 'Essay.docx', 1578149851),
(7, 8, 'selamat pagi', 'Assessment_AI.docx', 1578150534),
(8, 7, 'this is my picture', 'WhatsApp_Image_2019-12-22_at_7_36_24_PM.jpeg', 1578150944),
(10, 9, 'check', 'lvq.xlsx', 1578929520),
(11, 8, 'hallo saintek', 'Essay1.docx', 1578985496),
(12, 7, 'check', 'WhatsApp_Image_2019-12-22_at_7_36_24_PM1.jpeg', 1578985814),
(13, 9, 'check', '', 1579241664),
(14, 9, 'selamat pagi', 'testprofile.png', 1579243031),
(15, 7, 'posting', 'testprofile1.png', 1579713920);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_menu`
--

CREATE TABLE `sidebar_menu` (
  `id` int(20) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `id_access` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidebar_menu`
--

INSERT INTO `sidebar_menu` (`id`, `menu`, `id_access`) VALUES
(3, 'Grup Chat', 1),
(4, 'Grup Chat', 2),
(5, 'Teman', 2),
(6, 'Admin Access', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_sub_menu`
--

CREATE TABLE `sidebar_sub_menu` (
  `id` int(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_access` int(20) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uri_segment`
--

CREATE TABLE `uri_segment` (
  `id` int(255) NOT NULL,
  `chat_id` int(255) NOT NULL,
  `id_sender` int(255) NOT NULL,
  `id_receiver` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_jurusan` int(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `id_access` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `id_jurusan`, `jurusan`, `role_id`, `url`, `is_active`, `id_access`, `date_created`) VALUES
(1, 'anonim3', 'anonim3@gmail.com', 'testprofile.png', '$2y$10$93PNxfGG631QY5FDC4s77urOFkt53fJhxahZhYMkydeIA9CX4gIDK', 2, 'Teknik Industri', 2, 'percakapan/personal', 1, 5, 1575986370),
(2, 'anonim4', 'anonim4@gmail.com', 'testprofile.png', '$2y$10$cZPcQ/vSgJm82HcGb4Mts.35I.gJoNhcUhz/t3BBnD3V2oFQ7SrzS', 1, 'Teknik Informatika', 2, 'percakapan/personal', 1, 5, 1578498766),
(7, 'Deny Setiawan', 'denysetiawan.7.ds@gmail.com', 'photo1.JPG', '$2y$10$hGf3bi2F87/2NDYI3J4iReUWXp16YaYETqXkyj6Bb48izfhuHQl8e', 0, 'admin', 1, '', 1, 0, 1575033496),
(8, 'dawud', 'anonim@gmail.com', 'testprofile.png', '$2y$10$pSzvCuEqLxk/co3XOsDuJ.RrX7FbbovsH/Vf2ZLVAjGJy0v.//RtW', 1, 'Teknik Informatika', 2, 'percakapan/personal', 1, 5, 1575228563),
(9, 'anonim2', 'anonim2@gmail.com', 'testprofile.png', '$2y$10$/4atUOv6zlDCWNiSe7raO.ZWGGfFr7TxmkxalpRob6lRa7C00TW7y', 1, 'Teknik Informatika', 2, 'percakapan/personal', 1, 5, 1575624956);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_global`
--
ALTER TABLE `chat_global`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `chat_group`
--
ALTER TABLE `chat_group`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `chat_personal`
--
ALTER TABLE `chat_personal`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`);

--
-- Indexes for table `sidebar_menu`
--
ALTER TABLE `sidebar_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_sub_menu`
--
ALTER TABLE `sidebar_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uri_segment`
--
ALTER TABLE `uri_segment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_global`
--
ALTER TABLE `chat_global`
  MODIFY `id_chat` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chat_group`
--
ALTER TABLE `chat_group`
  MODIFY `id_chat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chat_personal`
--
ALTER TABLE `chat_personal`
  MODIFY `id_chat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sidebar_menu`
--
ALTER TABLE `sidebar_menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sidebar_sub_menu`
--
ALTER TABLE `sidebar_sub_menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uri_segment`
--
ALTER TABLE `uri_segment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
