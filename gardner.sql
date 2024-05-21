-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 11:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_enquiry`
--

INSERT INTO `gard_enquiry` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `added_date`) VALUES
(1, 'Rakesh kumar', 'krrakesh014@gmail.com', 9999008877, 'sdfdsf', 'dsdf', '2023-08-08 02:16:24'),
(2, '', '', 9999008877, '', '', '2024-05-08 08:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `gard_login`
--

CREATE TABLE `gard_login` (
  `id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `passwd` text DEFAULT NULL
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
  `name` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_projectcat`
--

INSERT INTO `gard_projectcat` (`id`, `name`, `status`, `added_date`, `modified_date`) VALUES
(1, 'CATEGORY 1', 1, '2023-03-13 12:46:01', '2024-05-08 03:07:01'),
(3, 'CATEGORY 2', 1, '2023-08-08 08:57:03', '2024-05-08 03:07:15'),
(4, 'CATEGORY 3', 1, '2024-05-08 03:07:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gard_projects`
--

CREATE TABLE `gard_projects` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_projects`
--

INSERT INTO `gard_projects` (`id`, `cat_id`, `name`, `image`, `status`, `added_date`, `modified_date`) VALUES
(2, 1, 'Landscaping dfsdfdsf', 'meteeeer.jpg', 1, '2023-03-13 12:58:42', '2024-05-08 04:35:34'),
(3, 1, 'Make Your Home Like Garden', 'cable cutters.jpg', 1, '2023-08-08 01:52:46', '2024-05-08 04:35:54'),
(4, 1, 'dsfdf', 'diodes.jpg', 1, '2023-08-08 01:53:06', '2024-05-08 04:36:26'),
(5, 3, 'sdfdsf', 'cut outs.jpg', 1, '2023-08-08 01:53:16', '2024-05-08 04:36:51'),
(6, 0, '', 'also.jpg', 1, '2024-05-08 04:38:03', '0000-00-00 00:00:00'),
(7, 0, '', 'jackets.jpg', 1, '2024-05-08 04:38:38', '0000-00-00 00:00:00'),
(8, 0, '', 'fuse.jfif', 1, '2024-05-08 04:38:57', '0000-00-00 00:00:00'),
(9, 0, '', 'gear.jpg', 1, '2024-05-08 04:39:32', '0000-00-00 00:00:00'),
(10, 0, '', 'pans.jpg', 1, '2024-05-08 04:39:57', '0000-00-00 00:00:00'),
(11, 0, '', 'supply.jpg', 1, '2024-05-08 04:40:13', '2024-05-08 04:49:22'),
(12, 0, '', 'componentss.jpg', 1, '2024-05-08 04:40:28', '0000-00-00 00:00:00'),
(13, 0, '', 'nice cables.jpg', 1, '2024-05-08 04:40:54', '2024-05-08 04:53:29'),
(14, 0, '', 'package.jpg', 1, '2024-05-08 04:41:37', '0000-00-00 00:00:00'),
(15, 0, '', 'terminals.jpg', 1, '2024-05-08 04:47:23', '2024-05-08 04:53:06'),
(16, 0, '', 'full.jpg', 1, '2024-05-08 04:54:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gard_services`
--

CREATE TABLE `gard_services` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `icon` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_services`
--

INSERT INTO `gard_services` (`id`, `name`, `description`, `icon`, `image`, `status`, `added_date`, `modified_date`) VALUES
(1, 'Installation Services', '<p>Professional installation for safe and efficient electrical distribution equipment setup.</p>', 'padez logo2.jpg', 'fixer.png', 1, '2023-03-13 12:43:15', '2024-05-07 08:58:59'),
(3, 'Consulting and Design Services:', '<p>Expert consultation and customized design for efficient electrical distribution systems.</p>', 'padez logo2.jpg', 'pixelcut-export.jpeg', 1, '2023-08-08 08:50:12', '2024-05-07 09:00:21'),
(4, 'Maintenance and Repair Services', '<p>Timely maintenance and repair to ensure optimal performance and safety.</p>', 'padez logo2.jpg', 'pixelcut-export.png', 1, '2023-08-08 08:50:27', '2024-05-07 09:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `gard_sitesettings`
--

CREATE TABLE `gard_sitesettings` (
  `id` int(11) NOT NULL,
  `phone1` bigint(10) NOT NULL,
  `phone2` bigint(10) NOT NULL,
  `email` text NOT NULL,
  `fb` text NOT NULL,
  `tw` text NOT NULL,
  `insta` text NOT NULL,
  `youtube` text NOT NULL,
  `linkedin` text NOT NULL,
  `address` text NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_sitesettings`
--

INSERT INTO `gard_sitesettings` (`id`, `phone1`, `phone2`, `email`, `fb`, `tw`, `insta`, `youtube`, `linkedin`, `address`, `logo`, `favicon`) VALUES
(1, 81211, 9900990078, 'info@the-digital-oceans.com', 'thedigitaloceans', '#', '#', '#', '#', 'Pitampura', 'padez logo2.jpg', 'padez logo2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gard_slider`
--

CREATE TABLE `gard_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `heading` text NOT NULL,
  `url` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_slider`
--

INSERT INTO `gard_slider` (`id`, `image`, `heading`, `url`, `status`, `added_date`, `modified_date`) VALUES
(1, 'banner first.png', '', '#', 1, '2023-03-13 12:08:34', '2024-05-10 02:54:32'),
(2, 'saferrr.png', '', '#', 1, '2023-03-13 12:08:58', '2024-05-07 07:40:46'),
(4, 'SATATION.png', '', '#', 1, '2023-03-13 12:19:05', '2024-05-07 06:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `gard_team`
--

CREATE TABLE `gard_team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `desgination` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_team`
--

INSERT INTO `gard_team` (`id`, `name`, `desgination`, `image`, `status`, `added_date`, `modified_date`) VALUES
(1, 'Tobby Meki', 'ELECTRICIAN', 'electrician.webp', 1, '2024-05-08 04:59:41', '0000-00-00 00:00:00'),
(2, 'Simeon Musk', 'ASISTANT ELECTRICIAN', 'simeon.jpg', 1, '2024-05-08 05:12:01', '0000-00-00 00:00:00'),
(3, 'Vati Something', 'Maintenance', 'VATI.jpg', 1, '2024-05-08 05:08:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gard_testimonials`
--

CREATE TABLE `gard_testimonials` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `profession` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gard_testimonials`
--

INSERT INTO `gard_testimonials` (`id`, `image`, `name`, `profession`, `description`, `status`, `added_date`, `modified_date`) VALUES
(1, 'cropped_image (7).png', 'Simeon Alfeus', 'Client', '<span>Choosing Padez Distributors for our electrical installation was the best decision. Their team was professional, efficient, and ensured everything was set up perfectly. Couldn\'t be happier with the results!</span>', 1, '2023-03-13 01:17:07', '2024-05-08 05:29:45');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gard_login`
--
ALTER TABLE `gard_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gard_projectcat`
--
ALTER TABLE `gard_projectcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gard_projects`
--
ALTER TABLE `gard_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gard_testimonials`
--
ALTER TABLE `gard_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
