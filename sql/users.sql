-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 06:55 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it255-dz08`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `lastname`, `phone`) VALUES
(1, 'neko123', 'e9152b7736697ba1af5db3b8c28e9f35', 'neko@gmail.com', 'Neko', 'Nekic', 115486845),
(2, 'Nesto', 'e08c6553fd471cf1122aebd70653e8e4', 'nesto@gmail.com', 'Nesto', 'Nestovic', 11658475),
(3, 'JaSam', '48d904b08a0b7e3c945a65d915eff281', 'jasaaam@gmail.com', 'Ja', 'Sam', 11784556),
(4, 'hej', '6bd8937a8789a3e58489c4cfd514b1a7', 'Hej@gmail.com', 'Hej', 'Jag Ã¤r student', 114584285),
(5, 'bjÃ¶rg', 'ba05e141d38d55c0115354fac2b0ee6f', 'bjÃ¶rn1@gmail.com', 'BjÃ¶rg', 'Borgen', 215548684),
(6, 'Far', '17d965747c701d6ffb406cad0f4265dc', 'far@gmail.com', 'Far', 'StÃ¶r', 32151683);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
