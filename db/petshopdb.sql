-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 12:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `groomingtbl`
--

CREATE TABLE `groomingtbl` (
  `groomId` int(11) NOT NULL,
  `groomBranch` varchar(40) NOT NULL,
  `groomDate` date NOT NULL,
  `groomPetAge` int(11) NOT NULL,
  `groomPetGender` varchar(10) NOT NULL,
  `groomPetSize` varchar(10) NOT NULL,
  `groomList` varchar(200) NOT NULL,
  `userId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groomingtbl`
--

INSERT INTO `groomingtbl` (`groomId`, `groomBranch`, `groomDate`, `groomPetAge`, `groomPetGender`, `groomPetSize`, `groomList`, `userId`) VALUES
(36, 'Robisons Town Mall Los Banos', '2018-03-29', 3, 'Female', 'Medium', 'Grooming Package (Bath, shampoo, blowdry, ear cleaning, nail trim, sanitary trim, teeth brushing, haircut)for small/medium - large/giant breeds,Ear Cleaning,', '32'),
(37, 'Robisons Town Mall Los Banos', '2018-03-02', 33, '', 'Medium', 'Grooming Package (Bath, shampoo, blowdry, ear cleaning, nail trim, sanitary trim, teeth brushing, haircut)for small/medium - large/giant breeds,Ear Cleaning,', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicestbl`
--

CREATE TABLE `servicestbl` (
  `serveId` int(11) NOT NULL,
  `serveBranch` varchar(100) NOT NULL,
  `serveDate` date NOT NULL,
  `servePetAge` int(11) NOT NULL,
  `servePetGender` varchar(10) NOT NULL,
  `servePetSize` varchar(10) NOT NULL,
  `serveList` varchar(200) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicestbl`
--

INSERT INTO `servicestbl` (`serveId`, `serveBranch`, `serveDate`, `servePetAge`, `servePetGender`, `servePetSize`, `serveList`, `userId`) VALUES
(81, 'Robisons Town Mall Los Banos', '2018-03-08', 2, 'Male', 'Medium', 'Dentistry,Surgeries', 32);

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `userAge` int(100) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userBirthday` date NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userPassword` varchar(30) NOT NULL,
  `userImage` longblob NOT NULL,
  `userPetName` varchar(30) NOT NULL,
  `userPetBreed` varchar(30) NOT NULL,
  `userPetSize` varchar(10) NOT NULL,
  `userPetColor` varchar(20) NOT NULL,
  `userRole` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`id`, `userName`, `userAge`, `userAddress`, `userBirthday`, `userEmail`, `userPassword`, `userImage`, `userPetName`, `userPetBreed`, `userPetSize`, `userPetColor`, `userRole`) VALUES
(32, 'Jem', 20, '71 M Dela Fuente St', '1997-09-24', 'jemzubiri@yahoo.com', '123', 0x2e75706c6f61646564496d616765732f53637265656e73686f745f323031352d30322d31342d31352d33312d30302e706e67, 'Taichi', 'Golden Retriever', 'Large', 'Gold', 'Member'),
(34, 'Test', 19, '23 Adada St', '2018-03-09', 'sample@email.com', '123123', 0x2e75706c6f61646564496d616765732f53637265656e73686f745f323031352d30322d31342d31352d33312d30302e706e67, 'Doge', 'Shiba Inu', 'Large', 'Gold', 'Member'),
(35, 'TestASD', 19, '23 Adada St', '2018-03-09', 'sample@email.com', '', 0x2e75706c6f61646564496d616765732f53637265656e73686f745f323031352d30322d31342d31352d33312d30302e706e67, 'Doge', 'Shiba Inu', 'Large', 'Gold', 'Member'),
(36, 'asda', 22, 'asdASD', '2018-03-06', 'ASDASD@gmail.com', 'ssssssss', 0x2e75706c6f61646564496d616765732f494d475f32303135303231395f3138313835332e6a7067, 'AAAAAAAA', 'SSSSSSSSSS', 'Small', 'AAAAAADADADAd', 'Member'),
(37, 'ASd', 22, 'ASDASD', '2018-02-28', 'ASDASD@gmail.com', 'sssss', 0x2e75706c6f61646564496d616765732f494d475f32303135303332305f3139323334302e6a7067, 'ASD', 'ASDSDSDSD', 'Small', 'ssss', 'Member'),
(38, 'Sample', 22, 'Test test', '2018-03-15', 'test@yahoo.com', '123', 0x2e75706c6f61646564496d616765732f494d475f32303135303231395f3138313835332e6a7067, 'NANA', 'ASDASD', 'Small', 'bbbb', 'Member'),
(40, 'admin', 0, '', '0000-00-00', 'admin', 'pass', '', '', '', '', '', 'Admin'),
(41, 'doctor', 0, '', '0000-00-00', 'doctor', 'doctorako', '', '', '', '', '', 'Doctor'),
(42, 'secretary', 0, '', '0000-00-00', 'secretary', 'secretaryme', '', '', '', '', '', 'Secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groomingtbl`
--
ALTER TABLE `groomingtbl`
  ADD PRIMARY KEY (`groomId`);

--
-- Indexes for table `servicestbl`
--
ALTER TABLE `servicestbl`
  ADD PRIMARY KEY (`serveId`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groomingtbl`
--
ALTER TABLE `groomingtbl`
  MODIFY `groomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `servicestbl`
--
ALTER TABLE `servicestbl`
  MODIFY `serveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
