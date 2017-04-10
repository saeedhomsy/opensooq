-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2017 at 05:27 PM
-- Server version: 5.7.17-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smalltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`ID`, `Name`) VALUES
(1, 'Cars'),
(2, 'Mobiles'),
(3, 'Tablets');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1491711629),
('m130524_201442_init', 1491711635);

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `CategoriesID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`ID`, `Title`, `Description`, `CategoriesID`, `UserID`) VALUES
(2, 'tittle ', 'desc for tomorrow desc for tomorrow desc for tomorrow desc for tomorrow desc for tomorrow desc for tomorrow', 1, 1),
(3, 'new one', 'dddddddddddddd', 2, 2),
(4, 'eeee', 'sdfkljsdofjsfoisdj', 5, 2),
(5, 'hihihihihihihihih', 'hihihihihihihihihhihihihihihihihihhihihihihihihihihhihihihihihihihih', 56, 80),
(8, 'aeosjifoweirj', 'sfgiosoifjuioswefiowef', 1, 1),
(9, 'aeosjifoweirj', 'sfgiosoifjuioswefiowef', 3, 1),
(10, 'lklkjljpj', 'oppojpoj', 3, 1),
(11, 'sdfwfwefwefewf', 'oppojpojasdsdsd', 3, 1),
(12, 'dfvijsfviojfo', 'sofijerioferjiof', 1, 1),
(13, 'fdvgjdfgvopijdf', 'dfgpjdgiopdfj', 1, 1),
(14, 'fdgljdlogjiog', 'dfgjdfiogjdfgoi', 1, 1),
(15, 'fdgljdlogjiog', 'dfgjdfiogjdfgoi', 1, 1),
(16, 'fsdgdfgfdg', 'sdfopgpogkdfop', 2, 1),
(17, 'dfgobljdiobgjfiob', 'dfodeiogjefriog', 2, 1),
(18, 'dflvgkdfvgloj', 'dfpogkpgok', 1, 1),
(19, 'dflgkjdfglj', 'psdogkpfogk', 1, 1),
(20, 'dfkdfopgk', 'dspfgopfgok', 1, 1),
(21, 'flsdkgjdfiogj', 'oigjoigjogi', 1, 1),
(22, 'xkjvhxckvjh', 'jvosdivjosijosdivj', 1, 1),
(23, 'xkjvhxckvjh', 'jvosdivjosijosdivj', 1, 1),
(24, 'lzkc', 'daspkodop', 2, 1),
(25, 'lzkc', 'daspkodop', 2, 1),
(26, 'ljoijiogjoi', 'sdfjo', 2, 1),
(27, 'sdksfopk', 'sdfopkspofk', 1, 1),
(28, 'sdlksdf', 'sxvklsdkl', 2, 1),
(29, 'cvkspdfok', 'psodkposdk', 1, 1),
(30, 'dsklmsdf', 'kljdlksjf', 1, 1),
(31, 'sdkljsdiofj', 'osidjoisdfj', 1, 1),
(32, 'sksdfkop', 'spfkpwofk', 1, 1),
(33, 'sdlfkjslofj', 'pjogopijfgporfjpwerofj', 2, 1),
(34, 'kdskvdfvj', 'psdkposkfposdfk', 1, 1),
(35, 'lkldvpdvoj', '[v[vp', 1, 1),
(36, 's;dksdopf', '[pf[pf[p', 1, 1),
(37, 'asd', 'asdasd', 1, 1),
(38, 'asd', 'asdasd', 1, 1),
(39, '11', '11', 1, 1),
(40, '11', '11', 1, 1),
(41, 'newnewnew', 'ldfsgkjopsagojfj', 1, 1),
(42, 'asdasdasd', 'asdasdasd', 1, 3),
(43, 'ASASAS', 'qw', 1, 3),
(44, 'last one', 'sdfspdfopsdfos', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `PostTags`
--

CREATE TABLE `PostTags` (
  `PostsID` int(11) NOT NULL,
  `TagsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PostTags`
--

INSERT INTO `PostTags` (`PostsID`, `TagsID`) VALUES
(36, 1),
(36, 2),
(38, 2),
(38, 3),
(41, 1),
(41, 13),
(42, 1),
(42, 2),
(42, 3),
(43, 1),
(43, 5),
(43, 7),
(44, 1),
(44, 2),
(44, 3),
(44, 4),
(44, 5),
(44, 6),
(44, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Tags`
--

CREATE TABLE `Tags` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tags`
--

INSERT INTO `Tags` (`ID`, `Name`) VALUES
(1, 'toyota'),
(2, 'honda'),
(3, 'gmc'),
(4, 'automatic'),
(5, 'manual'),
(6, 'hybrid'),
(7, 'gas'),
(8, 'iphone'),
(9, 'galaxy s'),
(10, 'galaxy note'),
(11, 'black'),
(12, 'white'),
(13, 'ipad and galaxy tab');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `IsAdmin`) VALUES
(1, 'saeedh', 'cj0cAZZEP7leh-za6A66WoaR04Pt2YJy', '$2y$13$adv9q73HcqEqfa8jJD9IUewT4coh76PHrhhz2bu.YpLK9beXLmqFK', NULL, 'homsysaeed@gmail.com', 10, 1491715782, 1491715782, 1),
(2, 'saeedh1', 'A-EQRK_RooOVyJ020sZGMkHwXX3dn4eO', '$2y$13$CudtBn8Oyx6SkjgobRcgru3stO8qePPexLB58KSLNnXdXbktjOeN6', NULL, 'saeedand404@gmail.com', 10, 1491715912, 1491715912, 0),
(3, 'admin', '1U4aPmtq5gwSzklXIx5g2KfQXsYsBIDo', '$2y$13$R6GuRdjba1i.5AdPAhH3duu3WEN.3wprfAkmWX.VIpBptBI/Nd3IG', NULL, 'admin@admin.admin', 10, 1491824780, 1491824780, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Tags`
--
ALTER TABLE `Tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `Tags`
--
ALTER TABLE `Tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
