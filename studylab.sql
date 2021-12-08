-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 08:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studylab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(170) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$rQynBxM1j4qfa1z.BJdqqehm1vnMBgbGffkH9EnWDsM7ubQ3OpcbC', 1),
(7, 'haneen', 'haneen@gmail.com', '$2y$10$7wTbKmefKFF3jkfayIIPpujRGgOMIGmoy2Stslj3lv2g8ob4fr/Uq', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `hint` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `writer` varchar(50) NOT NULL,
  `writerdesc` varchar(200) NOT NULL,
  `writerimg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `hint`, `title`, `body`, `writer`, `writerdesc`, `writerimg`, `img`, `created_at`) VALUES
(1, 'The best way to explain HTML is to examine the meaning of each word', 'html for beginners', 'Whether you’re interested in becoming a professional web developer or you simply want to learn more about how websites work, the first thing you need to study is HTML.\r\n\r\nHTML is the standard language that is used for creating webpages and web applications. Every time you access a website, a server sends an HTML file to your computer and your browser interprets and displays the information included in that file. In fact, all the information you are reading now is simply data that has been stored in an HTML file and sent to your browser.\r\n\r\nHere’s the best thing about HTML – it’s a simple language to learn.\r\n\r\nMost people can learn the basics of HTML in just a few hours, and with a solid HTML foundation, you can progress to more complex languages such as CSS and JavaScript.\r\n\r\nThis guide will provide an introduction to writing HTML, examine the basic building blocks of HTML such as tags, elements and attributes, and help you create your first HTML page by following a step-by-step tutorial. By the end of this guide, you should have the basic knowledge required to start working on your own HTML projects.\r\n\r\nIf you are just looking to create a website and don’t want to bother learning HTML, I suggest you use WordPress.  I have a few WordPress tutorials, including this one on starting a blog and this one on making a website.\r\n\r\n \r\n\r\nWhat Is HTML?\r\nHTML stands for HyperText Markup Language, which can be a confusing term for many beginners. The best way to explain HTML is to examine the meaning of each word.\r\n\r\nHyperText refers to text that contains links to other texts. Every time you click on a highlighted or underlined link that takes you to another page, you are using hypertext. As more and more pages use hypertext to link to each other, a “web” of pages starts to form. This is where we get the term World Wide Web.\r\n\r\nMarkup refers to the special symbols or codes that are inserted into a document to tell the web browser how to display the document data. For example, markup code may tell the browser to display a phrase in bold or italic text, or may tell the browser which parts of the document are headings and which are paragraphs. HTML is just one of a number of languages that uses markup code.\r\n\r\nLanguage refers to the idea that the code is standardized. Just like regular spoken languages, there are certain rules that everyone must follow when writing HTML. This is so that all browsers can understand and interpret the code. There are many different programming languages, and you may have heard of some of the popular ones such as Java, Python and Ruby. Each language has its own unique set of rules, and many languages can be used in combination with HTML to create amazing webpages and applications.\r\n\r\nIf we put these three definitions together, we could say that HTML is “a programming language that uses unique code which allows you to display linked documents in a browser”.', 'shaheera sarama', 'I am an ambitious workaholic, but apart from that, pretty simple person,Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small ', 'person_1.jpg', 'html2.jpg', '2021-11-22 12:07:30'),
(3, 'coders looking to develop their skills', 'learn php', 'What Is PHP?\r\nPHP, which stands for Hypertext Preprocessor, is a server-side scripting language that allows you to develop full stack web applications.\r\n\r\nBecause PHP is a server-side technology, it runs on the back end of a website. This is the part of a website that a user does not see. This means that PHP is often used to execute server-side scripts, such as gathering and processing data and working with databases.\r\n\r\nThe PHP language has a wide range of potential use cases. These include:\r\n\r\nPHP can add content to a web page. This allows you to load data onto a website based on a database or another source of content.\r\nPHP can work with files on a server\r\nPHP can collect and process form data\r\nPHP allows you to implement login and registration pages on a website\r\nThese are only a few of the different tasks you can perform with PHP. If you take a moment to reflect on this list, it’s clear why so many people are interested in learning the technology.\r\n\r\nIs PHP Hard to Learn?\r\nPHP is one of the easier programming languages to learn. This is because PHP has a strong ecosystem of resources available for beginners and it has a syntax that is forgiving to beginners.\r\n\r\nWhether you struggle to learn PHP depends on your experience with programming.\r\n\r\nIf you’ve already learned another web development technology, you should find it easier to learn PHP. However, if you do not have any programming experience, you may find it more difficult to learn PHP\r\n\r\n', 'haneen sarama.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large ', '619e9eb031e3f.jpg', '619e9eb02f79d.jpg', '2021-11-24 20:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `img`) VALUES
(1, 'Music', '6190f35b4af89.jpg'),
(2, 'Core Course in Public Health', '6190f4338ac10.jpg'),
(3, 'Programming', '6190f462d23e4.jpg'),
(4, 'Health', '6190f48d1b17a.jpg'),
(5, 'photography', '6190f4cddad5e.jpg'),
(6, 'Languages', '619b8fa0e8812.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `blogid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `userid`, `blogid`, `created_at`) VALUES
(1, 'hi', 14, 3, '2021-11-10 19:26:07'),
(2, 'nice', 9, 3, '2021-11-10 19:26:07'),
(3, 'good', 10, 3, '2021-11-10 19:26:07'),
(4, 'good blog', 11, 1, '2021-11-10 19:26:07'),
(6, 'interesting!!!', 13, 1, '2021-11-10 19:35:16'),
(7, 'can i use this in my homework?', 13, 3, '2021-11-10 19:38:18'),
(8, 'nice blog', 14, 1, '2021-11-10 19:55:39'),
(9, 'cool', 11, 3, '2021-11-12 19:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'john smith', 'john@gmail.com', 'html basic course', 'how can i sign for the course?', '2021-11-10 09:58:07'),
(4, 'haneen', 'haneenkhleelz@gmail.com', 'موعد الكورسات', 'متى تبدأ الكورسات', '2021-11-15 09:58:07'),
(5, 'amal', 'amal@gmail.com', 'html blogs', 'can you write more blogs talks about html', '2021-11-15 09:58:07'),
(10, 'haneen', 'shaheerasarama@gmail.com', 'fffffffff', 'ff', '2021-11-15 09:58:07'),
(11, 'shaheerasarama', 'shaheerasarama@gmail.com', 'محاضرة التحليل', 'cccccccccc', '2021-11-15 09:58:07'),
(12, 'rania', 'rania@gmail.com', 'java script ', 'can you write blogs about java script languages', '2021-11-22 12:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `img`, `price`, `cat_id`, `instructor_id`) VALUES
(1, 'Html basic', 'html.jpg', 20, 3, 1),
(2, 'Core Course in Public Health', 'health.jpg', 50, 4, 4),
(3, 'Digital Marketing', 'digitalmarketing.jpg', 30, 2, 3),
(4, ' Professional Photography for Instagram', '619d35ac53c75.jpg', 12, 1, 5),
(5, 'Music Theory Basics', 'music1.jpg', 40, 1, 2),
(6, 'Css basic', 'css.jpg', 25, 3, 1),
(7, 'SEO', 'seo.jpg', 10, 2, 3),
(8, 'Spanish for beginner', '619cf650cdfd5.jpg', 30, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` varchar(150) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `email`, `address`, `phonenumber`, `facebook`, `twitter`, `instagram`) VALUES
(8, 'info@gmail.com', '203 Fake St. Mountain View, San Francisco, California, USA', '+2 392 3929 210', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `job`, `descr`, `img`, `facebook`, `instagram`, `twitter`, `about`, `education`, `experience`) VALUES
(1, 'shaheera sarama', 'full stack developer', 'I am an ambitious workaholic, but apart from that, pretty simple person', 'shaheera.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar'),
(2, 'haneen sarama', 'musician', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'haneen.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar'),
(3, 'aron smith', 'Digital Marketing', 'I am an ambitious workaholic, but apart from that, pretty simple person', '619bf7cfe1e07.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar'),
(4, 'rahiq Al -hendy', 'health advisor', 'I am an ambitious workaholic, but apart from that, pretty simple person', 'rahiq.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar'),
(5, 'ted ahmed', 'photography', 'I am an ambitious workaholic, but apart from that, pretty simple person', 'ted.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar'),
(9, 'Mohammed sarama', 'Spanish teacher ', 'I am an ambitious workaholic, but apart from that, pretty simple person', '6192b2f36c15f.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `img`) VALUES
(9, 'shaheerasarama', 'shaheerasarama@gmail.com', '$2y$10$rQynBxM1j4qfa1z.BJdqqehm1vnMBgbGffkH9EnWDsM7ubQ3OpcbC', '618828471c818.jpg'),
(10, 'tariq', 'tariq@gmail.com', '$2y$10$PXpAd4exq4bCngoLEZ9DvuKSNWs54MiuRLdz8Eg5v8wLVedmHk3Ci', '61882b4624687.jpg'),
(11, 'haneen', 'haneensarama@gmail.com', '$2y$10$HpO73rspLxmb5dwuwuqDbe06NgtcTRpchC96NShN7MEFmDB9D1VVa', '61882c9a028d6.webp'),
(13, 'walaasarama', 'walaa@gmail.com', '$2y$10$/wmAO8ibKFzjYoZZEV1mn..dRZMg8umnBXcGZsL6aEM72j5UhImp.', '61883183e61b0.jpg'),
(14, 'fadi', 'fadi@gmail.com', '$2y$10$DbHUuco0NaHGgpAN0ogE9OViP/5gykV6vjs6EpdsyoRQiD3yecOqO', '6188335219c4f.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `blogid` (`blogid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`blogid`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
