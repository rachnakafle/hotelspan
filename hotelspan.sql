-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 06:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelspan`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `date`, `time`, `venue`, `organizer`) VALUES
(29, 'new event', 'This section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/05.png', '2020-11-13', '10:10:00.000000', 'Nepathya college', 'nepathya college'),
(30, 'new', 'This section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/04t.jpg', '0000-00-00', '14:22:00.000000', 'sidid', 'didiid'),
(31, 'new', 'This section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/03.jpg', '0000-00-00', '14:22:00.000000', 'sidid', 'sss'),
(32, 'new', 'This section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/03.jpg', '2020-11-11', '14:22:00.000000', 'sidid', 'kdjdjd'),
(34, 'new try', 'This section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventThis This section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventThis section will be filled  with  the details about the event filled by admin while uploading an eventwill be filled  with  the details about the event filled by admin while uploading an event', '../uploads/events/Sdev.jpg', '1111-11-11', '11:11:00.000000', 'butwal', 'self'),
(35, 'new', 'lorem ipsum lore Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, iure beatae? Quo, minima veritatis. Consectetur dolore blanditiis cumque similique, tempora quia ipsam. Non similique dolorum minima fuga vitae quas soluta facilis quidem enim? Ullam harum animi incidunt natus consectetur quia repellendus sequi est hic quod mollitia, fugit pariatur itaque? Modi optio, fugit aut minima, dolorum voluptas minus expedita consequuntur, libero amet nobis iusto ullam? Id, eveniet nostrum! Dolore minus temporibus iusto voluptate, aperiam doloremque, similique quos veritatis nihil inventore cumque omnis, magnam reiciendis natus. Ab quam exercitationem amet molestias! Placeat amet, minima perspiciatis iure vel est a eum temporibus tempore.', '../uploads/events/bullet.jpg', '2020-11-11', '10:10:00.000000', 'hotel span', 'self'),
(37, 'New covid-19 awarness program', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequatur doloribus dolorem. Soluta explicabo assumenda, debitis quibusdam minus ipsum harum laudantium fuga numquam excepturi corrupti suscipit doloribus iure, ab consequatur omnis libero sunt. Deleniti corrupti expedita laboriosam illo consectetur, ipsa fugiat nihil temporibus saepe ut consequuntur quidem maiores molestiae in, inventore neque. Debitis placeat aliquid aperiam. Vel debitis inventore ipsam obcaecati magnam voluptate iste, fugit corporis, fugiat quaerat dolorem animi consequuntur consequatur. Voluptatem, aspernatur. Distinctio deserunt obcaecati id numquam alias laudantium dolorem in animi, quasi eos, quisquam commodi, deleniti delectus officiis rerum corrupti eum excepturi quidem? Vel quae excepturi et.', '../uploads/events/barista1.jpg', '2020-04-01', '10:10:00.000000', 'Digital platform: hotelspan  facebook page live', 'Hotel span');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(56, '../uploads/gallery/cocktail1.jpg'),
(57, '../uploads/gallery/cocktail2.jpg'),
(60, '../uploads/gallery/barista1.jpg'),
(62, '../uploads/gallery/about_bg.jpg'),
(66, '../uploads/gallery/room1.jpg'),
(67, '../uploads/gallery/room1_temp.jpg'),
(68, '../uploads/gallery/room2.jpg'),
(69, '../uploads/gallery/room3.jpg'),
(70, '../uploads/gallery/room4.jpg'),
(77, '../uploads/gallery/01.jpg'),
(78, '../uploads/gallery/02.jpg'),
(79, '../uploads/gallery/02-1.jpg'),
(80, '../uploads/gallery/03.jpg'),
(81, '../uploads/gallery/04t.jpg'),
(82, '../uploads/gallery/05.png'),
(83, '../uploads/gallery/06.jpg'),
(84, '../uploads/gallery/one.jpg'),
(85, '../uploads/gallery/three.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(3, 'span', '$2y$10$lkW9x4M36abrtJwelTOTuu8tI.2UpWCGOUD2RzVTX.TqOyTrRrRqu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
