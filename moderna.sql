-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 05:36 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna`
--

-- --------------------------------------------------------

--
-- Table structure for table `inputs`
--

CREATE TABLE `inputs` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `_id` varchar(255) DEFAULT NULL,
  `placeholder` varchar(255) DEFAULT NULL,
  `data-rule` varchar(255) DEFAULT NULL,
  `data-msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inputs`
--

INSERT INTO `inputs` (`id`, `type`, `class`, `name`, `_id`, `placeholder`, `data-rule`, `data-msg`) VALUES
(1, 'text', 'form-control', 'name', 'name', 'თქვენი სახელი', 'minlen:4', 'Please enter at least 4 chars'),
(2, 'email', 'form-control', 'email', 'email', 'იმეილი', 'email', 'Please enter a valid email'),
(3, 'text', 'form-control', 'subject', 'subject', 'თემა', 'minlen:4', 'Please enter at least 8 chars of subject');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(1, 'მთავარი', '/'),
(2, 'ბლოგი', 'blog'),
(3, 'კონტაქტი', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `middle`
--

CREATE TABLE `middle` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `middle`
--

INSERT INTO `middle` (`id`, `title`, `icon`, `text`) VALUES
(1, 'პირველი სათაური', 'glyphicon glyphicon-cloud', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.'),
(2, 'მეორე სათაური', 'fa fa-github', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.'),
(3, 'მესამე სათაური', 'fa fa-anchor', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.'),
(4, 'მეოთხე სათაური', 'fa fa-umbrella', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `int` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`int`, `title`, `text`, `img`) VALUES
(1, 'პირველი სლაიდი', 'ტექსტიტექსტიტექსტიტექსტიტექს', 's1.jpg'),
(2, 'მეორე სლაიდი', 'ტექსტიტექსტიტექსტიტექსტიტ', 's2.jpg'),
(3, 'მესამე სლაიდი', 'ტექსტიტექსტიტექსტიტექსტიტექსტიტექს', 's3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `img`, `text`) VALUES
(1, 'Work 1', 'w1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.'),
(2, 'Work 2', 'w2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.'),
(3, 'Work 3', 'w3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.'),
(4, 'Work 4', 'w4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputs`
--
ALTER TABLE `inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `middle`
--
ALTER TABLE `middle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputs`
--
ALTER TABLE `inputs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `middle`
--
ALTER TABLE `middle`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `int` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
