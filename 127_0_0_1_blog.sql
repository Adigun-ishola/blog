--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `img`, `content`, `date`, `time`, `title`) VALUES
(1, '', 'mmammammmmamma', 'Aug 31, 2022', '10:18:17 am', 'mmm'),
(2, '', 'mmammammmmamma', 'Aug 31, 2022', '10:18:17 am', 'mmm'),
(3, 'download (6).jpeg', 'mmmmmmamamma\r\nmkaloloaooa\r\nmamajiaiiaiia', 'Aug 31, 2022', '10:23:21 am', 'mammamma'),
(4, 'download (6).jpeg', 'mmmmmmamamma\r\nmkaloloaooa\r\nmamajiaiiaiia', 'Aug 31, 2022', '10:23:21 am', 'mammamma'),
(5, 'download (3).png', 'this sewing Machine is a good one', 'Aug 31, 2022', '10:25:13 am', 'New Home'),
(6, 'Screenshot (5).png', 'abdul malik is a student of ibadan grammar', 'Aug 31, 2022', '10:25:51 am', 'adigun'),
(7, 'IMG-20220702-WA0002.jpg', 'this is to show you how it works', 'Sep 09, 2022', '03:06:48 pm', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
