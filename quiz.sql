-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 13, 2021 at 01:08 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_answers`
--

INSERT INTO `quiz_answers` (`id`, `question_id`, `content`, `is_correct`) VALUES
(246801, 135791, 'what are those?????', 1),
(246802, 135791, 'who are you?????', 0),
(246803, 135791, 'where am I?????', 0),
(246804, 135791, 'why are they?????', 0),
(246805, 135792, 'Carry On', 1),
(246806, 135792, 'Stay 6 Feet Away', 0),
(246807, 135792, 'Meme On', 0),
(246808, 135792, 'Breathe Deeply', 0),
(246809, 135793, 'Kim, this is why we have insurance', 0),
(2468010, 135793, 'Kim, you can just buy new ones', 0),
(2468011, 135793, 'Kim, there\'s people that are dying', 1),
(2468012, 135793, 'Kim, crying about it won\'t help you find them', 0),
(2468013, 135794, 'you crazy son of a bitch ', 1),
(2468014, 135794, 'you beautiful man ', 0),
(2468015, 135794, 'you crazy old man', 0),
(2468016, 135794, 'you mysterious stranger', 0),
(2468017, 135795, '19', 0),
(2468018, 135795, '21', 1),
(2468019, 135795, '100', 0),
(2468020, 135795, 'I never learned how to read', 0),
(2468021, 135796, 'I\'m doing just fine ', 0),
(2468022, 135796, 'I\'m still a piece of garbage', 1),
(2468023, 135796, 'I\'m not sure why I\'m here', 0),
(2468024, 135796, 'I\'m slowly dying inside', 0),
(2468025, 135797, 'that\'s why I don\'t have any', 0),
(2468026, 135797, 'I just need my dog', 0),
(2468027, 135797, 'they disappoint me', 1),
(2468028, 135797, 'just my pc', 0),
(2468029, 135798, 'I\'m honestly feeling so attacked right now', 1),
(2468030, 135798, 'now I\'m just depressed', 0),
(2468031, 135798, 'you guys are ruining everything!', 0),
(2468032, 135798, 'it doesn\'t seem to be happening anytime soon', 0),
(2468033, 135799, 'cars', 0),
(2468034, 135799, 'people', 0),
(2468035, 135799, 'chickens', 1),
(2468036, 135799, 'memes', 0),
(2468037, 1357910, 'lemme check my phone', 0),
(2468038, 1357910, 'lemme tie my shoes', 0),
(2468039, 1357910, 'lemme take a selfie', 1),
(2468040, 1357910, 'lemme take out the trash', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `content`, `score`) VALUES
(135791, 'The real question is ', 10),
(135792, 'Keep Calm AND ', 10),
(135793, 'Oh my god, I\'m gonna cry! My diamond earrings!', 10),
(135794, 'you did it, ______________, you did it', 10),
(135795, 'what\'s 9+10?', 10),
(135796, 'oh hi thanks for checking in ', 10),
(135797, 'I don\'t need friends', 10),
(135798, 'I just came to have a good time, and ', 10),
(135799, 'look at all those', 10),
(1357910, 'but first, ', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD CONSTRAINT `quiz_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `quiz_questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
