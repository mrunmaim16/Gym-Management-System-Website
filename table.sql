-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 02:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(2, '1394950310'),
(2, '1395431162'),
(2, '1395432481'),
(2, '1395432607'),
(3, '1395432637'),
(2, '1395513130');



CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `days` varchar(220) DEFAULT '0',
  `present` varchar(220) DEFAULT '0',
  `absent` varchar(220) DEFAULT '0',
  `pect` varchar(220) DEFAULT '0',
  `pic` int(11) DEFAULT 0,
  `picName` mediumtext DEFAULT NULL,
  `paid` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for table `members`


INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`, `admin`, `days`, `present`, `absent`, `pect`, `pic`, `picName`, `paid`) VALUES
(1, 'Mrunmai', 'mrunmai@gmail.com', 'b9ee571f520435006ca6f361fef2a2325e2bba3716090e8f414d7da861665d6c74d628e44e247b76d6c3712dc0e1162e8eac471eff410f81f94145797cf4c92a', 'b9ee571f520435006ca6f361fef2a2325e2bba3716090e8f414d7da861665d6c74d628e44e247b76d6c3712dc0e1162e8eac471eff410f81f94145797cf4c92a', 1, '2', '0', '100', '0', 0, NULL, 0);


ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
