-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 02:50 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krishna`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('abhi@gmail.com', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question` varchar(1000) NOT NULL,
  `option1` varchar(1000) NOT NULL,
  `option2` varchar(1000) NOT NULL,
  `option3` varchar(1000) NOT NULL,
  `option4` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`, `subject`, `id`) VALUES
('What is the FULL definition of chromosome', 'in the nucleus', 'both a and c', 'a thread like structure in the nucleus of a cell', 'a piece of rope that looks like a thread', '3', '1', 1),
('What is the theory of Darwin?', 'Darwin believed in Natural Selection', 'Darwin believed that animals have to need something to evolved', 'Ecology Structure is a Part of the theory of evolution', 'all of the above', '4', '1', 2),
('Who invented the BALLPOINT PEN?', 'Biro Brothers', 'Waterman Brothers', 'Bicc Brothers', 'Hemanth Reddy', '1', '1', 3),
('Who invented Jet Engine?', 'Sir Frank Whittle', 'Gottlieb Daimler', 'Abhinay Bali', 'Lewis E Waterman', '1', '1', 4),
('What invention caused many deaths while testing it?', 'Dynamite', 'Ladders', 'Race cars', 'Parachute', '4', '1', 5),
('For whom high heeled shoes were invented?', 'Cleopatra', 'Queen Elizabeth I', 'King Louis the XIV', 'King Charles II', '3', '1', 6),
('What item, originally called the Whirlwind, was invented by Ives McGaffey in 1869?', 'Blender', 'Electric mixer', 'Washing machine', 'Vacuum cleaner', '4', '1', 7),
('Where were wigs first invented?', 'Japan', 'France', 'Egypt', 'China', '3', '1', 8),
('What Galileo invented?', 'Barometer', 'Pendulem clock', 'Microscope', 'Thermometer', '4', '1', 9),
('Who is the English physicist responsible for the Big Bang Theory ?', 'Albert Einstein', 'Michael Skube', 'George Gamow', 'Roger Penrose', '3', '1', 10),
('What game was first produced by the Southern Novelty Company in Baltimore, Maryland in 1892?', 'Frisbee', 'Monopoly', 'Ouija board', 'Ping Pong', '3', '1', 11),
('Who had an explosive idea and first patented DYNAMITE?', 'J. R. Gluber', 'Abhinay Bali', 'G. Fawks', 'W. Bickford', '2', '1', 12),
('Which American inventor invented the commercial telegraph, based on Joseph Henrys work?', 'Alexander Graham Bell', 'Samuel Morse', 'Sir James DeWar', 'Hemanth Reddy', '2', '1', 13),
('Which American inventor invented the commercial telegraph, based on Joseph Henrys work?', 'Alexander Graham Bell', 'Samuel Morse', 'Sir James DeWar', 'Hemanth Reddy', '2', '1', 14),
('What was the first message sent by his telegraph machine?', 'Save our Souls', 'Vote Whip', 'What has God Wrought', 'Mr Watson! Come Here', '3', '1', 15),
('What famous invention of the 15th century made reading possible for the general public?', 'Printing Press', 'Typewriter', 'Spectacles', 'Public Library', '1', '1', 16),
('In 1937, what Canadian invention helped people get around in winter?', 'Toboggan', 'Snow Board', 'Snow mobile', 'Ski Chair Lift', '3', '1', 17),
('Who invented the World Wide Web?', 'Microsoft', 'Google', 'A laboratory in switzerland', 'Apple', '3', '1', 18),
('Which one of the following records the distance travelled by a vehicle?', 'Manometer', 'Odometer', 'Speedometer', 'Motometer', '2', '1', 19),
('Which scientist discovered the radioactive element radium?', 'Isaac Newton', 'Albert Einstein', 'Benjamin Franklin', 'Marie Curie', '4', '1', 20),
('CORN FLAKES - Who made them first?', 'Nabisco', 'Kellogg', 'Quaker', 'Archers', '2', '1', 21),
('Which of the following is not required in an email address?', 'C0694853', 'Full name', 'symbol', 'Domain name', '2', '2', 22),
('The word source in open source refers to what?', 'Developer source', 'Platform source', 'Source code', 'Source port', '3', '2', 23),
('Which of the following programs requires a runtime environment?', 'Java applet', 'Windows executable', 'macOS application', 'iOS app', '1', '2', 24),
('What unit of measurement is equal to 1,000 cycles per second? ', 'Kilohertz', 'Megahertz', 'Megabyte', 'Kibibyte', '1', '2', 25),
('What is another name for a password that contains multiple words?', 'Passcode', 'Passwordle', 'Passphrase', 'Passtring', '3', '2', 26),
('Which of the following components is most commonly overclocked?', 'CPU', 'SSD', 'HDD', 'Monitor', '1', '2', 27),
('What is the maximum number of devices in a piconet?', '8', '64', '256', '512', '1', '2', 28),
('Apples Tiger OS immediately followed which version?', 'Panther', 'Jaguar', 'Puma', 'Cheetah', '1', '2', 29),
('What verb is used to describe checking for information in a database?', 'Querying', 'Digging', 'Pulling', 'Peeking', '1', '2', 30),
('What is a technical term for the person in charge of maintaining a website?', 'Web host', 'Web leader', 'Webmaster', 'Webposter', '3', '2', 31),
('An exponent in a mathematical equation is an example of what?', 'Postscript', 'Typescript', 'Subscript', 'Superscript', '4', '2', 32),
('Which of the following is not a telecommunications device?', 'TV', 'Radio', 'DVD player', 'Cell phone', '3', '2', 33),
('What type of information does the WHOIS service provide?', 'Personal phone numbers', 'Business financial records', 'Domain name registration info', 'Email addresses', '3', '2', 34),
('What is the largest volume size supported by the FAT32 file system?', '2 terabytes', '8 terabytes', '32 terabytes', '64 terabytes', '1', '2', 35),
('To what does the 32 in the Win32 API refer?', 'Colors', 'Platforms', 'Programs', 'Bits', '4', '2', 36),
('What media provider offers a paid streaming service called Red?', 'Spotify', 'Pandora', 'YouTube', 'Vimeo', '3', '2', 37),
('A SYN flood is a type of what computer attack?', 'Denial of service', 'Trojan horse', 'Rootkit', 'Virus', '1', '2', 38),
('A program value that does not change is also called what?', ' Variable', 'Function', 'Constant', 'Operator', '3', '2', 39),
('What adjective best describes a software program that supports plugins?', 'Scalable', 'Extensible', 'Portable', 'Flexible', '1', '2', 40),
('What type of hardware device may experience fragmentation over time?', 'CPU', 'GPU', 'RAM', 'HDD', '1', '2', 41),
('What does the &quot;B&quot; stand for in Lyndon B. Johnson?', 'brown', 'bricks', 'blory', 'Baines', '4', '1', 42),
('What capital city lies on the Potomac River?', 'ohio', 'Washington D.C', 'toronto', 'texas', '2', '2', 43);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `user_key` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `activestatus` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user_key`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`, `activestatus`) VALUES
(4, '5IUoIHNYPeeZqyn', 'fdghjkl', 'fghjk', 'SYSADMIN@gmail.com', 'Abhinay009', '9160891742', 'dgfhjjk', 0),
(5, 'OAXeRLQol9KskvA', 'njhgfyguhj', 'hytyuuytyu', 'SYSADMIN1@gmail.com', 'Abhinay009', '876567897678', 'hvcfgyuhgtyui', 0),
(6, '0KZ4OOv9BGGWPG8', 'bhvcbhjnk', 'tryquhss', 'SYSADMIN2@gmail.com', 'Abhinay009', '443434433', 'dccbdhcd', 0),
(9, 'osPRRknUHbhuMQT', 'Abhinay', 'Bali', 'abhinay.bali@gmail.com', 'katrina', '6473325999', 'asd', 0),
(10, 'xe4yqL5h37t4qfX', 'Kowshik', 'Bali', 'kowshik@gmail.com', 'kowshik123', '6473325999', 'Hunters lodge , Room no:1512 ,2600 Donmills\r\nbeside donmills subway station', 0),
(11, 'kwdBasEuCNq6p7J', 'ishan', 'chotaliya', 'ishanchotaliya@yahoo.in', '123456', '987654321', 'home add', 0),
(12, 'lllSOwS139Kbxrb', 'Abhinay', 'bali', 'bali.abhi@gmail.com', 'bali123', '67876545678', 'abhi', 0),
(13, 'fZPXbDUex4BeKVC', '', '', '', '', '', '', 0),
(14, 'BUVWr71cJCmCA2H', 'abhinay ', 'bali ', 'abhi@mail.com', 'abhi', '6476763216', '25 parkway forst ', 0),
(15, 'qbMbT9QMbvm2LQP', 'hemanth', 'reddy', 'hemanthreddy@ymail.com', 'hemanth', '6473325999', 'djfhd fdhjfdv fjhdhfb ddfjhjfdb ', 0),
(16, 'E0MGbeQ3c226U0h', 'fsdasad', 'rtre', 'ass@gmail.com', 'ass', '647', 'sdfghgdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `userid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `examdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`userid`, `score`, `examdate`) VALUES
(0, 7, '2017-06-18'),
(7, 3, '2017-06-18'),
(9, 10, '2017-06-18'),
(9, 10, '2017-06-18'),
(11, 4, '2017-06-19'),
(12, 9, '2017-06-19'),
(9, 9, '2017-06-21'),
(14, 1, '2017-06-21'),
(15, 6, '2017-06-21'),
(14, 9, '2017-06-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD UNIQUE KEY `abhi` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`user_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
