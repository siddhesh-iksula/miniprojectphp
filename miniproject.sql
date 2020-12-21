-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2020 at 06:17 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
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
-- Database: `testdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `miniproject`
--

CREATE TABLE `miniproject` (
  `FirstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `EmailID` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `Age` int NOT NULL,
  `Image` varchar(350) NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `miniproject`
--

INSERT INTO `miniproject` (`FirstName`, `LastName`, `EmailID`, `ContactNumber`, `Age`, `Image`, `Password`) VALUES
('sachin', 'tendulkar', 'sachin@iksula.com', '1001001001', 44, 'uploads/sachin.jpeg', 'sachin'),
('virat', 'kohli', 'virat@iksula.com', '1818181818', 31, 'uploads/kohli.jpg', 'anushka'),
('Rustom', 'Pavri', 'rustom@iksula.com', '1919191919', 48, 'uploads/pic2.jpg', 'rustom'),
('Tom', 'Cruise', 'tom@gmail.com', '2222444466', 39, 'uploads/pic1.jpg', 'tom'),
('Jethalal', 'Gada', 'jethalal@gokuldham.com', '1234567890', 50, 'uploads/jethalal.JPG', 'jethalal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
