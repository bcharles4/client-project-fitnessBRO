-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 13, 2024 at 11:12 PM
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
-- Database: `fitnessbro`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `height` int(32) NOT NULL,
  `weight` int(32) NOT NULL,
  `body` varchar(256) NOT NULL,
  `exercise` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`ID`, `userID`, `height`, `weight`, `body`, `exercise`) VALUES
(40, 26, 163, 46, 'Muscle Gain', 'cardio'),
(41, 26, 163, 46, 'Muscle Gain', 'cardio'),
(42, 26, 0, 0, '', ''),
(43, 26, 0, 0, '', ''),
(44, 26, 0, 0, '', ''),
(45, 26, 0, 0, '', ''),
(46, 26, 163, 46, 'Muscle Gain', 'balance'),
(47, 26, 163, 54, 'Muscle Gain', 'cardio'),
(48, 26, 163, 54, 'Muscle Gain', 'cardio'),
(49, 26, 163, 54, 'Muscle Gain', 'strength'),
(50, 26, 163, 54, 'Muscle Gain', 'strength'),
(51, 26, 162, 43, 'Muscle Gain', 'Strength'),
(52, 26, 162, 43, 'Muscle Gain', 'Strength'),
(53, 26, 162, 43, 'Muscle Gain', 'Cardio'),
(54, 26, 162, 411, 'Muscle Gain', 'Cardio'),
(55, 26, 162, 411, 'Muscle Gain', 'Cardio'),
(56, 26, 163, 411, 'Muscle Gain', 'Balance'),
(57, 26, 163, 411, 'Weight Loss', 'Strength'),
(58, 26, 163, 411, 'Weight Loss', 'Balance'),
(59, 32, 162, 54, 'Cardiovascular Health', 'Strength'),
(60, 32, 162, 54, 'Cardiovascular Health', 'Balance'),
(61, 32, 163, 54, 'Weight Loss', 'Balance'),
(62, 32, 163, 54, 'Weight Loss', 'Balance'),
(63, 26, 163, 54, 'Weight Loss', 'Balance'),
(64, 26, 163, 54, 'Weight Loss', 'Cardio'),
(65, 26, 163, 54, 'Weight Loss', 'Cardio'),
(66, 26, 163, 54, 'Weight Loss', 'Strength'),
(67, 26, 163, 54, 'Weight Loss', 'Cardio'),
(68, 26, 163, 54, 'Weight Loss', 'Balance'),
(69, 26, 163, 54, 'Weight Loss', 'Cardio'),
(70, 26, 163, 54, 'Weight Loss', 'Cardio'),
(71, 26, 163, 54, 'Weight Loss', 'Cardio'),
(72, 26, 163, 54, 'Weight Loss', 'Cardio'),
(73, 26, 163, 54, 'Weight Loss', 'Balance'),
(74, 26, 163, 54, 'Weight Loss', 'Cardio'),
(75, 26, 158, 55, 'Car', 'Cardio'),
(76, 26, 158, 55, 'Car', 'Balance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fName` varchar(256) NOT NULL,
  `fUsername` varchar(256) NOT NULL,
  `fEmail` varchar(256) NOT NULL,
  `fPassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fName`, `fUsername`, `fEmail`, `fPassword`) VALUES
(8, 'Mitra, Charles Brian C.', 'aaa', 'charlesb614@gmail.com', 'ewankoba'),
(17, 'yow', 'yow', 'charles@gmail.com', '$2y$10$gk3a56UAiYuCSk2UY2C/Wu8YkuGtU5wPcO4Oq34hDft7JIzYD1NsO'),
(18, 'Lanz', 'lanz ', '2120585@ub.edu.ph', '$2y$10$umOvPPwqPs1a83R9bV9J4e8HJYNFpFylYqRF9caHAzb0dUHOUcCEq'),
(19, 'Mitra, Charles Brian C.', 'banky_moon', 'charlesb614@gmail.com', '$2y$10$2xo0UX1A45UwnKdKnYryveWITacYAzWKbiODSykyrBsLhs8oqHRHi'),
(20, 'Jerick', 'jer', 'ganggang@ub.edu', '$2y$10$7ec3/oF3BMc7eDUz0jnTIezpKthbR/5pwdZLp0XlJAZN/4Rl7nXn2'),
(21, 'Jerick', 'jer', 'ganggang@ub.edu', '$2y$10$TbFi0r8Q2GHZ317myP20ye57I/WGN3WOrIcnebsvEMlq1Lyat4VEC'),
(22, 'shet', 'shet', 'bryanmitra17@gmail.com', '$2y$10$QYwI6.Xp0n.Z1Lb88uIpAeDANoMfzhsU2jww5eGf9fxyqcrSJaXFm'),
(23, 'shet', 'shet', 'bryanmitra17@gmail.com', '$2y$10$0D0.6vRlLTvU/3CdD4a19OS59BuvZyDfPm.hFDOkdcnLZe/Lczj0y'),
(24, 'Alyssa ', 'aly', 'ganggang@ub.edu', '$2y$10$H9HbS/WQ5WKfkNwMl5W8W.Vz38BBGL9hKIfacZa4mi4CergXroy7O'),
(25, 'Jeffrey Madera Sayno', 'jeff', 'saynojeffrey0@gmail.com', '$2y$10$bX1/MHU2GtSOITE/25uU0e0R/YV/LhvtRcCNVMzbrdbtOrCtuG146'),
(26, 'Snoop', 'asd', 'banky@gmail.com', '$2y$10$Ng4NPJXIFiA83JAOqwudeuvUCydBJAOP2CqKw8vx9uaztFXCgP83.'),
(27, 'HINDI KO ALMA', 'banky_moon', 'charlesb614@gmail.com', '$2y$10$9AzyAtl1PHDQgpTb3PDrzO6rcQvDdm2SPefF5SUqfZXR8d5wBWjtm'),
(28, 'YOW', 'qwe', 'saynojeffrey0@gmail.com', '$2y$10$Y9ikpAi6TlrZCEI34BJp6erhw./f.0zrqdqNOCsxy.qoLa2JflYb2'),
(29, '123', 'asd', 'charlesb614@gmail.com', '$2y$10$qlS4Uxl8c3QkQry4hOopKOHTvtfKRxqkgaNT5cuPUW8bNZ9qllj1i'),
(30, 'asdasdasd', 'asdasdasd', 'asdasdasd@gmail.com', '$2y$10$BscrRoFTRy5Z1h6pzoGuGu3p8kIFLWf4RIJqCCzXJP/yE8RYq./5e'),
(31, 'Lanz', 'Lanz', 'asdasdasd@gmail.com', '$2y$10$yNToGV822LxBuCFmH7FoBu9AmAMyTfMjwzrsyvckxSBd7BNCsSG7y'),
(32, 'Lanz', 'Lanz21', 'charlesb614@gmail.com', '$2y$10$XSLYzFHC3E/VMplkGtGYEeAPoffhISjDzdl/3nLdKbg7HEdFVrUD.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `connect` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `connect` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
