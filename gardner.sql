-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 04:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardner`
--

-- --------------------------------------------------------

--
-- Table structure for table `gard_enquiry`
--

CREATE TABLE `gard_enquiry` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_enquiry`
--

INSERT INTO `gard_enquiry` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `added_date`) VALUES
(1, 'Rakesh kumar', 'krrakesh014@gmail.com', 9999008877, 'sdfdsf', 'dsdf', '2023-08-08 02:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `gard_login`
--

CREATE TABLE `gard_login` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passwd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_login`
--

INSERT INTO `gard_login` (`id`, `username`, `passwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gard_projectcat`
--

CREATE TABLE `gard_projectcat` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_projectcat`
--

INSERT INTO `gard_projectcat` (`id`, `name`, `status`, `added_date`, `modified_date`) VALUES
(1, 'Completed Projects', 1, '2023-03-13 12:46:01', '2023-03-13 12:51:06'),
(3, 'Ongoing Projects', 1, '2023-08-08 08:57:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gard_projects`
--

CREATE TABLE `gard_projects` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_projects`
--

INSERT INTO `gard_projects` (`id`, `cat_id`, `name`, `image`, `status`, `added_date`, `modified_date`) VALUES
(2, 1, 'Landscaping dfsdfdsf', 'service-1.jpg', 1, '2023-03-13 12:58:42', '2023-03-13 01:04:45'),
(3, 1, 'Make Your Home Like Garden', '1613340.jpg', 1, '2023-08-08 01:52:46', '0000-00-00 00:00:00'),
(4, 1, 'dsfdf', '2018-tata-nexon-geneva-edition-4k-hd-e0d8.jpg', 1, '2023-08-08 01:53:06', '0000-00-00 00:00:00'),
(5, 3, 'sdfdsf', '22_10.jpg', 1, '2023-08-08 01:53:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gard_services`
--

CREATE TABLE `gard_services` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_services`
--

INSERT INTO `gard_services` (`id`, `name`, `description`, `icon`, `image`, `status`, `added_date`, `modified_date`) VALUES
(1, 'Landscaping 34few', '<span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>', 'icon-3.png', '2013_skoda_rapid_5.jpg', 1, '2023-03-13 12:43:15', '0000-00-00 00:00:00'),
(3, 'Service2', 'sddsf', '', '2018-tata-nexon-geneva-edition-4k-hd-e0d8.jpg', 1, '2023-08-08 08:50:12', '0000-00-00 00:00:00'),
(4, 'Service3', 'sdfdsf', '', '48734_Maruti_Suzuki_Ertiga_2019_006.jpg', 1, '2023-08-08 08:50:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gard_sitesettings`
--

CREATE TABLE `gard_sitesettings` (
  `id` int(11) NOT NULL,
  `phone1` bigint(10) NOT NULL,
  `phone2` bigint(10) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_sitesettings`
--

INSERT INTO `gard_sitesettings` (`id`, `phone1`, `phone2`, `email`, `fb`, `tw`, `insta`, `youtube`, `linkedin`, `address`, `logo`, `favicon`) VALUES
(1, 9900887766, 9900990078, 'info@the-digital-oceans.com', 'thedigitaloceans', '#', '#', '#', '#', 'Pitampura', 'logo.png', 'favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `gard_slider`
--

CREATE TABLE `gard_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_slider`
--

INSERT INTO `gard_slider` (`id`, `image`, `heading`, `url`, `status`, `added_date`, `modified_date`) VALUES
(1, 'carousel-1.jpg', 'Make Your Home Like Garden', '#', 1, '2023-03-13 12:08:34', NULL),
(2, 'carousel-2.jpg', 'Make Your Home Like Garden', '#', 1, '2023-03-13 12:08:58', NULL),
(4, '1.jpg', 'sdfsdfasd', '#', 1, '2023-03-13 12:19:05', '2023-03-13 12:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `gard_team`
--

CREATE TABLE `gard_team` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desgination` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_team`
--

INSERT INTO `gard_team` (`id`, `name`, `desgination`, `image`, `status`, `added_date`, `modified_date`) VALUES
(1, 'Doris Jordan ewfsdfds', 'Landscape Designer', 'team-1.jpg', 1, '2023-03-13 01:12:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gard_testimonials`
--

CREATE TABLE `gard_testimonials` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_testimonials`
--

INSERT INTO `gard_testimonials` (`id`, `image`, `name`, `profession`, `description`, `status`, `added_date`, `modified_date`) VALUES
(1, 'testimonial-2.jpg', 'Rahul Goyal ewfdsfds', 'Web Developer', '<span>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</span>', 1, '2023-03-13 01:17:07', '2023-03-13 01:22:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gard_enquiry`
--
ALTER TABLE `gard_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_login`
--
ALTER TABLE `gard_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_projectcat`
--
ALTER TABLE `gard_projectcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_projects`
--
ALTER TABLE `gard_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_services`
--
ALTER TABLE `gard_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_sitesettings`
--
ALTER TABLE `gard_sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_slider`
--
ALTER TABLE `gard_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_team`
--
ALTER TABLE `gard_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gard_testimonials`
--
ALTER TABLE `gard_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gard_enquiry`
--
ALTER TABLE `gard_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gard_login`
--
ALTER TABLE `gard_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gard_projectcat`
--
ALTER TABLE `gard_projectcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gard_projects`
--
ALTER TABLE `gard_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gard_services`
--
ALTER TABLE `gard_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gard_sitesettings`
--
ALTER TABLE `gard_sitesettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gard_slider`
--
ALTER TABLE `gard_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gard_team`
--
ALTER TABLE `gard_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gard_testimonials`
--
ALTER TABLE `gard_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
