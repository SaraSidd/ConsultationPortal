-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 02:48 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebsagrop_ocs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminId` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Cnic` bigint(13) NOT NULL,
  `Mobile` bigint(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Name`, `Cnic`, `Mobile`) VALUES
(1, 'rao fahim', 4230161786253, 3337309969);

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `ComId` int(6) NOT NULL,
  `DocId` int(6) NOT NULL,
  `PatientId` int(6) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`ComId`, `DocId`, `PatientId`, `Message`) VALUES
(1, 1, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `consultationhistory`
--

CREATE TABLE IF NOT EXISTS `consultationhistory` (
  `HistoryId` int(6) NOT NULL,
  `DocId` int(6) NOT NULL,
  `PatientId` int(6) NOT NULL,
  `ComId` int(6) NOT NULL,
  `PrescriptionId` int(6) NOT NULL,
  `DataId` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `DataId` int(6) NOT NULL,
  `DocId` int(6) DEFAULT NULL,
  `PatientId` int(6) DEFAULT NULL,
  `HistoryId` int(6) DEFAULT NULL,
  `video` blob,
  `Image` varchar(100) DEFAULT NULL,
  `Audio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `email`, `token`) VALUES
(1, 'owwii@hotmail.com', 'sdfgw3rt54t3fgd'),
(2, 'aziz@gmail.com', 'cTy3v_3cUYE:APA91bH8Q1XR0yC5UQNzsj1GkL6j7k0RjHIc0o55xsWR_hzyt7z1_1JphQwVTt1MeCwNie4ekBxSnSLK3Hsu0VRo3CNsSqRLqwWDa2ZwkjIpaRVD7IaZG78s9wa5sxuMuq_N-CTYfmQW'),
(3, 'a@gmail.com', 'cTy3v_3cUYE:APA91bH8Q1XR0yC5UQNzsj1GkL6j7k0RjHIc0o55xsWR_hzyt7z1_1JphQwVTt1MeCwNie4ekBxSnSLK3Hsu0VRo3CNsSqRLqwWDa2ZwkjIpaRVD7IaZG78s9wa5sxuMuq_N-CTYfmQW'),
(4, 'abcd@gmail.com', 'cTy3v_3cUYE:APA91bH8Q1XR0yC5UQNzsj1GkL6j7k0RjHIc0o55xsWR_hzyt7z1_1JphQwVTt1MeCwNie4ekBxSnSLK3Hsu0VRo3CNsSqRLqwWDa2ZwkjIpaRVD7IaZG78s9wa5sxuMuq_N-CTYfmQW'),
(5, 'raofahim31@gmail.com', 'fc25H1N_lGw:APA91bFAoQtgw5x7vxhbrRplUBY4m8UHLUVG3n7pVtWTZzmZ2mKgBXvSPFNplZsUNKb3uvQTFuOP-zc9uV-5Y4yv_k0q8MJ8JzhsuSlqhIxZeRISElf1ziJmUeeygt7-SOgqwEumymYv'),
(6, 'manish@gmail.com', 'cIU8y4Q_JbY:APA91bHUx-qidQYcY0FV3125hs3pBO9xz_eUIpfRmDfEMzd6TxvfFTiRG1tdAd8cdrOqy6fBQmTiV8TGg6Y2F6rMb4g6umE5sU9cucXRqtya8dsLjJULpVhBRiI-pNBKtVDrxPGY24sq'),
(7, 'manish6@gmail.com', 'cIU8y4Q_JbY:APA91bHUx-qidQYcY0FV3125hs3pBO9xz_eUIpfRmDfEMzd6TxvfFTiRG1tdAd8cdrOqy6fBQmTiV8TGg6Y2F6rMb4g6umE5sU9cucXRqtya8dsLjJULpVhBRiI-pNBKtVDrxPGY24sq'),
(8, '', 'fc25H1N_lGw:APA91bFAoQtgw5x7vxhbrRplUBY4m8UHLUVG3n7pVtWTZzmZ2mKgBXvSPFNplZsUNKb3uvQTFuOP-zc9uV-5Y4yv_k0q8MJ8JzhsuSlqhIxZeRISElf1ziJmUeeygt7-SOgqwEumymYv');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `DocId` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(6) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Cnic` bigint(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `DeleteStatus` int(11) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DocId`, `Name`, `Age`, `Gender`, `Qualification`, `Cnic`, `Email`, `Password`, `Mobile`, `Status`, `DeleteStatus`, `Rating`) VALUES
(1, 'Rao Fahim', 22, 'male', 'mbbs,frcs', 4230161786253, 'raofahim31@gmail.com', 'rao', 3337309969, 'verified', 0, 0),
(2, 'owais', 22, 'male', 'a-z', 423016565894, 'owais@gmail.com', 'owais', 3333832079, '1', 0, 0),
(120, 'khan', 26, 'male', 'mbbs,frcs', 4230161786542, 'khan@gmail.com', 'abcd', 3337309969, '', 0, 0),
(126, 'M', 22, 'Male', 'BSCS', 123456, 'm@gmail.com', '1234567', 313, '', 0, 0),
(127, 'm', 1, 'm', 'bba', 321123, 'm@ocs.com', '2121', 258, '', 0, 0),
(128, 'm', 1, 'm', 'bba', 321123, 'm@ocs.com', '2121', 258, '', 0, 0),
(129, 'm', 1, 'm', 'bba', 321123, 'm@ocs.com', '2121', 258, '', 0, 0),
(130, 'd', 5, 'd', 'aaaaa', 5555555555, 'mu@gmail.com', '123456', 123987456, '', 0, 0),
(131, 'Abbu', 58, 'male', 'PHD', 987654321, 'abbu@gmail.com', '123', 852369, '', 0, 0),
(132, 'f', 5, 'f', 'f', 7899779, 'f@gmail..,com', '123', 5555, '', 0, 0),
(133, 'uzair', 32, 'male', 'frcps', 42201452, 'uz@gmail.com', 'khan', 7896542, '', 0, 0),
(134, 'uzair', 32, 'male', 'frcps', 42201452, 'uz@gmail.com', 'khan', 7896542, '', 0, 0),
(135, 'p', 5, 'male', 'bba', 12344, 'p@ghotmail.com', '1234', 3333333, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `Fid` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `Url` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `users_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL DEFAULT '4',
  `sentat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `users_id`, `reciever_id`, `sentat`) VALUES
(1, 'this is ok', 1, 4, '2017-01-10 15:08:36'),
(2, 'are u serious?', 3, 4, '2017-04-13 21:33:00'),
(3, 'what', 3, 4, '2017-04-13 21:33:05'),
(4, 'kya be?', 4, 4, '2017-04-13 21:41:55'),
(5, 'ao', 3, 4, '2017-04-13 21:42:14'),
(6, 'aya msg?', 3, 4, '2017-04-13 21:46:10'),
(7, 'u', 4, 4, '2017-04-13 21:46:55'),
(8, 'naacho', 4, 4, '2017-04-19 19:36:05'),
(9, 'aap kon?', 6, 4, '2017-04-21 16:21:10'),
(10, 'main h', 7, 4, '2017-04-21 16:24:41'),
(11, 'g', 4, 4, '2017-04-21 16:32:07'),
(12, 't', 7, 4, '2017-04-21 16:32:23'),
(13, 'ap kon?', 7, 4, '2017-04-21 21:04:41'),
(14, 'kyaa hai', 4, 4, '2017-04-21 21:05:55'),
(15, 'h bhai', 4, 4, '2017-04-21 21:07:47'),
(16, 'kesi hai?', 4, 4, '2017-04-21 21:20:55'),
(17, 'set', 6, 4, '2017-04-21 21:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `PatientId` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(6) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Cnic` bigint(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Delivery` varchar(200) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `DeleteStatus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientId`, `Name`, `Age`, `Gender`, `Mobile`, `Address`, `Cnic`, `Email`, `Delivery`, `Password`, `Status`, `DeleteStatus`) VALUES
(1, 'owais khan', 22, 'male', 3333832079, 'Pechs Block 2, house no. b-4', 4230161786234, 'owaiskhan402@gmail.com', NULL, 'owais6878', 'verified', 0),
(2, 'rao fahim', 22, 'male', 3337309969, 'DHA phase II ext. cartian court 52-p house no. B-6', 4230161786253, 'rao@gmail.com', NULL, '1234', '1', 0),
(3, 'abdullah', 22, 'male', 3320349711, 'shahfaisal', 4230145659542, 'abdullah@yahoo.com', NULL, 'abcd1', '', 0),
(4, 'muneeb', 14, 'male', 313, '', 1234567, 'muneeb@gmail.com', '', '1234', '', 0),
(5, 'k', 5, 'male', 1111111, '', 1234, 'k@hotmail.com', '', '123', '', 0),
(6, 'o', 88, 'male', 99999, '', 898765, 'o@gmail.com', '', '123', '', 0),
(7, 'abd', 23, 'male', 302254, '', 42205, 'abd@gmail.com', '', 'abcd', '', 0),
(8, 'tooba', 17, 'female', 412859, 'karimabad', 1234562, 'toob@yahoo.com', '', 'qwer', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `PharmacyId` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` bigint(13) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`PharmacyId`, `Name`, `Username`, `Password`, `Address`, `Phone`, `Status`, `Rating`) VALUES
(1, 'Time Medicos', 'Afaaq Ahmed', 'ahmed', 'Afzal Apartment, Stadium Road SB-12, KDA Scheme 1, Karachi.', 34939504, 'verified', 0),
(2, 'Sunny Medicos', 'Owais', 'abc123', 'DHA Phase I defence market', 333832079, '', 0),
(5, 'Al- Madina Medical Store', 'Rao', 'rao123', 'F-112, Mini Market, Phase-II, Defence View, Karachi, Sindh, Pakistan', 3337309969, '', 0),
(9, 'xyz medical', 'abdullah', 'abcd', 'abc area', 31002100202, '', 0),
(10, 'Ansari medical', 'Ansari', 'xyz', 'baloch colony', 3332323223, '', 0),
(11, '', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `PrescriptionId` int(6) NOT NULL,
  `DocId` int(6) DEFAULT NULL,
  `PatientId` int(6) DEFAULT NULL,
  `PharmacyId` int(6) DEFAULT NULL,
  `Medicines` varchar(100) DEFAULT NULL,
  `Time` varchar(25) DEFAULT NULL,
  `OrderStatus` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`PrescriptionId`, `DocId`, `PatientId`, `PharmacyId`, `Medicines`, `Time`, `OrderStatus`) VALUES
(1, 1, 1, 5, ' 1 strip panadol 2 tablets voltran', NULL, 'Completed'),
(2, 1, 2, 2, '5 glucometer strips', NULL, ''),
(3, 2, 1, 2, '2 strips of glucovance 5/80', NULL, ''),
(4, 1, 1, 5, 'abcdefghijklmnop', '2017-03-03 05:11:29', 'Completed'),
(15, 1, 1, 1, 'panadol', '0000-00-00', ''),
(16, 1, 1, 1, 'abcdefg', '0000-00-00', ''),
(17, 1, 1, 1, 'flash', '0000-00-00', ''),
(18, 1, 1, 1, 'Tablet panadol 500mg 3 times a day tablet flagyl 400 MG 2 times a day', '0000-00-00', ''),
(19, 1, 1, 1, 'Tablet panadol 500mg 3 times a day tablet flagyl 400 MG 2 times a day', '0000-00-00', ''),
(20, 1, 1, 1, '', '0000-00-00', ''),
(21, 1, 1, 1, 'flagyl 400 MG twice daily', '0000-00-00', ''),
(24, 2, 5, 2, '   testing ', '0000-00-00', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gcmtoken` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gcmtoken`) VALUES
(1, 'rao', 'rao@rao.com', ''),
(2, 'rao2', 'rao2@rao2.com', ''),
(3, 'Owais', 'owaiskhan402@gmail.com', 'eVokaq9dCFU:APA91bHy5hozLNu6HP85NapL0Tf9FhIl2Xrkbx7pGn3Fja0RTwfnmRbDo2ySjHTAtFIQWA-NxUOmPoyK7tYMbdXND8O-hMQWynr4g6g9Zq4MQF9cuOr6uJlcIE4qaEC2C15x1-u7H-YD'),
(4, 'salman', 'sal@yahoo.com', 'eVokaq9dCFU:APA91bHy5hozLNu6HP85NapL0Tf9FhIl2Xrkbx7pGn3Fja0RTwfnmRbDo2ySjHTAtFIQWA-NxUOmPoyK7tYMbdXND8O-hMQWynr4g6g9Zq4MQF9cuOr6uJlcIE4qaEC2C15x1-u7H-YD'),
(6, 'afaaq', 'h@hotmail.com', 'eV7rg9-V5j8:APA91bF8oruOr-Yep_Yg4Y5QZdEoefCMXDq-udm7bPNoq5w7z8GrFFhS9bAuZFBMU3Mti_DujATn2926Yp-aDtpT6djCh04d9OR80dTSVI-HEmTSFHpouMOQSVdg6WsNty0bI3pMjY6W'),
(7, 'shakoor', 'sh@yahoo.com', 'eVokaq9dCFU:APA91bHy5hozLNu6HP85NapL0Tf9FhIl2Xrkbx7pGn3Fja0RTwfnmRbDo2ySjHTAtFIQWA-NxUOmPoyK7tYMbdXND8O-hMQWynr4g6g9Zq4MQF9cuOr6uJlcIE4qaEC2C15x1-u7H-YD'),
(8, 'mushtaq', 'mu@gmail.com', 'eVokaq9dCFU:APA91bHy5hozLNu6HP85NapL0Tf9FhIl2Xrkbx7pGn3Fja0RTwfnmRbDo2ySjHTAtFIQWA-NxUOmPoyK7tYMbdXND8O-hMQWynr4g6g9Zq4MQF9cuOr6uJlcIE4qaEC2C15x1-u7H-YD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`ComId`),
  ADD KEY `DocId` (`DocId`),
  ADD KEY `PatientId` (`PatientId`);

--
-- Indexes for table `consultationhistory`
--
ALTER TABLE `consultationhistory`
  ADD PRIMARY KEY (`HistoryId`),
  ADD KEY `DocId` (`DocId`),
  ADD KEY `PatientId` (`PatientId`),
  ADD KEY `ComId` (`ComId`),
  ADD KEY `PrescriptionId` (`PrescriptionId`),
  ADD KEY `DataId` (`DataId`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`DataId`),
  ADD KEY `DocId` (`DocId`),
  ADD KEY `PatientId` (`PatientId`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DocId`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`Fid`),
  ADD KEY `PatientId` (`PatientId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_users` (`users_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientId`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`PharmacyId`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`PrescriptionId`),
  ADD KEY `PatientId` (`PatientId`),
  ADD KEY `DocId` (`DocId`),
  ADD KEY `PharmacyId` (`PharmacyId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `communication`
--
ALTER TABLE `communication`
  MODIFY `ComId` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `consultationhistory`
--
ALTER TABLE `consultationhistory`
  MODIFY `HistoryId` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `DataId` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DocId` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientId` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `PharmacyId` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `PrescriptionId` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `communication_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `doctor` (`DocId`),
  ADD CONSTRAINT `communication_ibfk_2` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`PatientId`);

--
-- Constraints for table `consultationhistory`
--
ALTER TABLE `consultationhistory`
  ADD CONSTRAINT `consultationhistory_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `doctor` (`DocId`),
  ADD CONSTRAINT `consultationhistory_ibfk_2` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`PatientId`),
  ADD CONSTRAINT `consultationhistory_ibfk_3` FOREIGN KEY (`ComId`) REFERENCES `communication` (`ComId`),
  ADD CONSTRAINT `consultationhistory_ibfk_4` FOREIGN KEY (`PrescriptionId`) REFERENCES `prescription` (`PrescriptionId`),
  ADD CONSTRAINT `consultationhistory_ibfk_5` FOREIGN KEY (`DataId`) REFERENCES `data` (`DataId`);

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `doctor` (`DocId`),
  ADD CONSTRAINT `data_ibfk_2` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`PatientId`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`PatientId`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`DocId`) REFERENCES `doctor` (`DocId`),
  ADD CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`PharmacyId`) REFERENCES `pharmacy` (`PharmacyId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
