-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2025 at 11:32 PM
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
-- Database: `rota42luanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwrd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `full_name`, `username`, `email`, `passwrd`) VALUES
(1, 'Gilson Chipombo', 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `cadetes`
--

CREATE TABLE `cadetes` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `distrit` varchar(255) DEFAULT NULL,
  `passwrd` varchar(255) DEFAULT NULL,
  `phone` int(9) DEFAULT NULL,
  `stop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cadetes`
--

INSERT INTO `cadetes` (`id`, `full_name`, `username`, `email`, `city`, `distrit`, `passwrd`, `phone`, `stop_id`) VALUES
(3, 'Gilson Br', 'flags', 'fernandochipombo@gmail.com', 'Dangereux', 'Cazenga', '827ccb0eea8a706c4c34a16891f84e7b', 935626001, 4),
(4, 'Diogo', 'Diogo', 'diogo@gmail.com', 'Morro Bento', 'Cazenga', '827ccb0eea8a706c4c34a16891f84e7b', 944626001, 8);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `distrit` varchar(250) DEFAULT NULL,
  `passwrd` varchar(250) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` int(9) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `validate` date DEFAULT NULL,
  `license_number` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `exp_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `full_name`, `username`, `city`, `distrit`, `passwrd`, `photo`, `phone`, `birthday`, `validate`, `license_number`, `category`, `exp_time`) VALUES
(2, 'Gilson Chipombo', 'gbravo-f', 'Luanda', 'Cacuaco', '827ccb0eea8a706c4c34a16891f84e7b', '', 939285464, '2001-07-11', '2025-07-20', 254847, 'Profissional', 5),
(3, 'Mauro Gunza da Silva', 'mgunza', 'Dangereux', 'Belas', 'e10adc3949ba59abbe56e057f20f883e', '', 939285465, '2024-10-20', '2024-10-20', 548763, 'Profissional', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mini_bus`
--

CREATE TABLE `mini_bus` (
  `id` int(11) NOT NULL,
  `car_registration` varchar(20) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mini_bus`
--

INSERT INTO `mini_bus` (`id`, `car_registration`, `color`, `brand`, `driver_id`, `model`) VALUES
(2, 'LA45-43', 'Branco', 'TOYOTA', 2, 'VX'),
(4, 'LD-65-76', 'Branco', 'HYUNDA', 2, 'X90');

-- --------------------------------------------------------

--
-- Table structure for table `mini_bus_stop`
--

CREATE TABLE `mini_bus_stop` (
  `id` int(11) NOT NULL,
  `stop_name` varchar(255) DEFAULT NULL,
  `distrit` varchar(255) DEFAULT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mini_bus_stop`
--

INSERT INTO `mini_bus_stop` (`id`, `stop_name`, `distrit`, `latitude`, `longitude`) VALUES
(4, 'Vila Gamek', 'Icolo-e-Bengo', -8.820075, 13.281097),
(6, 'Vila de Cacuaco', 'Cacuaco', -8.777427, 13.368404),
(7, 'Vila de Cacuaco', 'Quiçama', -8.700363, 13.455231),
(8, 'Marçal', 'Cazenga', -8.820968, 13.259137);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadetes`
--
ALTER TABLE `cadetes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `stop_id` (`stop_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mini_bus`
--
ALTER TABLE `mini_bus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `mini_bus_stop`
--
ALTER TABLE `mini_bus_stop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cadetes`
--
ALTER TABLE `cadetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mini_bus`
--
ALTER TABLE `mini_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mini_bus_stop`
--
ALTER TABLE `mini_bus_stop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cadetes`
--
ALTER TABLE `cadetes`
  ADD CONSTRAINT `cadetes_ibfk_1` FOREIGN KEY (`stop_id`) REFERENCES `mini_bus_stop` (`id`);

--
-- Constraints for table `mini_bus`
--
ALTER TABLE `mini_bus`
  ADD CONSTRAINT `mini_bus_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
