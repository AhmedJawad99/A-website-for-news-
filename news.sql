-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 04:35 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL,
  `history` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `msg`, `history`) VALUES
(1, 'Ahmed', 'jo367992@gmail.com', 'rfgd kngsdfjn gslkf,.xng slkx,fn vlskxfnv skx,jfm', '07-08-2018'),
(2, 'Ahmed', 'mohammed.waeel199999@gmail.com', 'gh fhdf h xf hxf hchgcgf hgf hfhxfgh xdf gfdg zdg zdg zdg hgjh gcj hj gjcgh xfg zfdg sdzf s zdgz fzdf DSfsdv fgxhgf fgh xfb f sgf zfdg fzdg fdg fg fdgzfg zgfdg zf gfgf', '08-08-2018'),
(3, 'Asia', 'Asia.12@gmail.com', 'hi', '08-08-2018'),
(4, '', '', '<h1>aa</h1>\r\n', '10-08-2018'),
(5, '', '', '', '11-08-2018'),
(6, 'asw', 'ddw', 'df waer', '01-09-2018');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `real_name` text NOT NULL,
  `title` text NOT NULL,
  `news` text NOT NULL,
  `image` varchar(9999) NOT NULL DEFAULT 'no1.png',
  `date` text NOT NULL,
  `clock` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `real_name`, `title`, `news`, `image`, `date`, `clock`) VALUES
(30, 'admin', 'Ahmed Jawad', 'Apple self-driving car in minor crash', 'A self-driving car owned by Apple was involved in an accident, California’s road authority has confirmed.  The car, a modified Lexus RX450h with autonomous sensors, was rear-ended by a human driver in a Nissan Leaf.  Humans were unhurt, but the machines suffered moderate damage.  Apple’s car is understood to be part of an ambitious but secretive programme - Project Titan. Apple has not commented on the 24 August collision, understood to be the company\'s first.  Speculation as to what the project seeks to achieve ranges from a fully-fledged Apple car - or just working with existing car makers to provide autonomous technology.  Apple’s self-driving programme had been public knowledge, It was revealed that the company now has 66 such cars on the roads, with 111 drivers registered to operate them.  Like every firm experimenting with autonomy in California, Apple must provide regular reports to the state’s Department of Motor Vehicles (DMV), including when a crash occurs.  \'Waiting for a safe gap\'  According to documents released by the DMV on Friday, Apple’s car was on the roads in Sunnyvale, a Silicon Valley city not far from Apple’s headquarters in Cupertino.  The crash happened just before 15:00 - it was dry, clear and there were no unusual conditions, the DMV said.  “An Apple test vehicle in autonomous mode was rear-ended while preparing to merge onto Lawrence Expressway South from Kifer Road,” the incident description reads.  “The Apple test vehicle was travelling less than 1mph waiting for a safe gap to complete the merge when a 2016 Nissan Leaf contacted the Apple test vehicle at approximately 15mph.  "Both vehicles sustained damage and no injuries were reported by either party.”  The DMV does not attribute blame in its reports. Self-driving cars being rear-ended, however, might be considered a trend.  A recent report by investigative technology news site The Information revealed teething problems at Waymo, the self-driving car company spun out of Google, where there have been headaches caused by what humans might consider over-cautious driving.  The self-driving cars would stop abruptly in scenarios where humans might zip through, such as turning across a line of traffic.  "As a result, human drivers from time to time have rear-ended the Waymo vans,” the report noted.', '6a682edd96e29df7ba935c43c8c2c768.jpg', '01-09-2018', '11:40am'),
(31, 'admin', 'Ahmed Jawad', 'US President Donald Trump to visit Ireland in November', 'The US President Donald Trump will visit Ireland in November, the White House has announced.  It will be the first visit to the island by the US President since his election in 2016.  Mr Trump is due to travel to Paris to participate in commemorations on November 11 marking the 100th anniversary of the armistice that ended World War I.  It is unclear if he will travel to Northern Ireland as part of the trip.  The US President owns a golf resort in County Clare, Trump Doonbeg, which he bought in February 2014.  He last visited Doonbeg in May that year and was met off the plane by then finance minister Michael Noonan.  Mr Trump was due to visit again just a few months before the US presidential election, in the summer of 2016, but later shelved the plan.  The dates and exact itinerary of his upcoming Irish visit have not been released.  Brief visit "While in Europe, the President will also visit Ireland to renew the deep and historic ties between our two nations," the White House said in a statement.  A spokesperson for the Department of the Taoiseach (Irish prime minister) said: "The Taoiseach understands that President Trump will stop in Ireland for a brief visit on his way to or from the Armistice commemorations in Paris.  "It will be an opportunity to follow up on the issues discussed in the White House in March including migration, trade, climate change and human rights issues."  Mr Trump spent four days in the UK in July, having cancelled an earlier trip originally planned for February.', '_92421051_39bfe2e6-87c5-4c05-8338-3b8ab735979c.jpg', '01-09-2018', '11:43am'),
(32, 'Bill_21', 'Bill Markon', 'Man City boss Pep Guardiola plays down Man Utd\'s poor start to season', 'Manchester City boss Pep Guardiola has played down the significance of Manchester United\'s poor start to the Premier League season.  City are undefeated in three games with seven points while United have lost two of their first three games, their worst start to a season since 1992-93.  "They remain a great, a top team. We\'re just in August," Guardiola said.  "There are a lot of points to play for, and after the international break the real season starts."  Asked whether he was surprised at the pressure United boss Jose Mourinho is currently under, the Spaniard said: "It\'s our job unfortunately. Our job depends on results.  "When we win we are good, when we don\'t we are not good - it is simple like that.  "The important thing is to know the quality and I believe when you get to that level in the Premier League, all the managers are here because they are top, top managers."  In contrast to United, City have had a relatively untroubled start to the campaign, apart from a knee injury to midfielder Kevin de Bruyne, who is out for three months, and the loss of second-choice goalkeeper Claudio Bravo to an Achilles injury.  City host Newcastle United on Saturday, while United travel to Burnley on Sunday - both opponents without a win this season.  Guardiola also dismissed a video of Sergio Aguero appearing to smoke a shisha pipe, which was posted on social media this week.  Asked whether he had spoken to the 30-year-old striker about the video, the City boss said: "No, I didn\'t speak with him," adding that it did not bother him.', '_103246078_tv048865378.jpg', '01-09-2018', '11:56am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `real_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `type` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `real_name`, `username`, `password`, `email`, `type`) VALUES
(1, 'Ahmed Jawad', 'admin', 'c20ad4d76fe97759aa27a0c99bff6710', 'jo367992@gmail.com', 'admin'),
(2, 'John Alexender', 'john', 'c20ad4d76fe97759aa27a0c99bff6710', 'j@.com', 'user'),
(3, 'Bill Markon', 'Bill_21', 'c20ad4d76fe97759aa27a0c99bff6710', 'sa@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
