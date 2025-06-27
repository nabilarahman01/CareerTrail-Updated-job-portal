-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 11:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `admin_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(1, 'arijit00772@gmail.com', '$e10adc3949ba59abbe56e057f20f883e', 'Arijit067', 'Arijit', 'Paul', '1'),
(12, 'arijitpaul687@gmail.com', '$e10adc3949ba59abbe56e057f20f883e', 'Abir', 'Arijit', 'Paul', '2'),
(14, 'brothersintbd3@gmail.com', '$e10adc3949ba59abbe56e057f20f883e', 'Brothers International', 'Ashok', 'Paul', '2'),
(25, 'nabila.cse.20200204065@aust.edu', '$e10adc3949ba59abbe56e057f20f883e', 'Nabilalala', 'Nabila', 'Rahman', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(100) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `admin`) VALUES
(1, 'Super Admin'),
(2, 'Customer Admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_jobs`
--

CREATE TABLE `all_jobs` (
  `job_id` int(10) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `jmajor` text NOT NULL,
  `jexperience` int(11) NOT NULL,
  `jcgpa` float NOT NULL,
  `jexperties` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `all_jobs`
--

INSERT INTO `all_jobs` (`job_id`, `customer_email`, `job_title`, `des`, `country`, `state`, `city`, `keyword`, `jmajor`, `jexperience`, `jcgpa`, `jexperties`) VALUES
(8, 'arijitpaul687@gmail.com', 'Game developing', 'The type of work you do as a game developer will vary depending on the size of the company you work for and your specialization. At bigger game companies, you’re more likely to have a more specialized role working on a specific element of the game. At an indie publisher, you may have a hand in multiple processes in a game’s lifecycle. These are some of the day-to-day tasks you may perform in this role:\n\nDevelop new ideas for game design\n\nTranslate visual ideas into code\n\nPrototype, iterate, and polish gameplay\n\nCollaborate with designers, producers, artists, and quality analysts\n\nMonitor game stability across platforms\n\nReview existing code and recommend improvements\n\nPort games or elements from one system to another', 'Bangladesh', 'Dhaka', 'Gulshan', 'Java, Python Graphics', '', 0, 0, ''),
(12, 'arijitpaul687@gmail.com', 'Dedicated Web Developer', 'We are looking for an outstanding Web Developer to be responsible for the coding, innovative design and layout of our website. Web developer responsibilities include building our website from concept all the way to completion from the bottom up, fashioning everything from the home page to site layout and function.Writing well designed, testable, efficient code by using best software development practices Creating website layout/user interfaces by using standard HTML/CSS practices Integrating dat', 'Bangladesh', 'Dhaka', 'Old Dhaka', 'php  html css', '', 0, 0, ''),
(13, 'brothersintbd3@gmail.com', 'Hardware Engineer', 'Hardware engineers design devices used in manufactured products that incorporate processors and other computer components and that connect to the internet. This could include newer automobiles, home appliances, and medical devices, which have internet ready computer systems built into them. They ensure that computer hardware components work together with the latest and most current software. They design new computer hardware and create schematics of computer equipment to be built and test their ', 'USA', 'Washington', 'NY', 'Hardware', '', 0, 0, ''),
(15, 'brothersintbd3@gmail.com', 'Web Developing', 'Write well-designed, testable, efficient code by using web development best practices Create basic website layouts and user interfaces with HTML and CSS Integrate data from various back-end web services and databases Work with stakeholders to gather and refine specifications and requirements based on technical needs Create and maintain software documentation Ensure cross-browser compatibility of new features Be responsible for maintaining, expanding, and scaling our site Stay plugged into emergi', 'Bangladesh', 'Dhaka', 'Old Dhaka', 'Web development CSE HTML JAVA PHP CSS', '', 0, 0, ''),
(16, 'brothersintbd3@gmail.com', 'Database Engineer', '• Assembling large, complex sets of data that meet non-functional and functional business requirements • Identifying, designing and implementing internal process improvements including re-designing infrastructure for greater scalability, optimizing data delivery, and automating manual processes •  Building required infrastructure for optimal extraction, transformation and loading of data from various data sources using AWS and SQL technologies • Building analytical tools to utilize the data pipeline, providing actionable insight into key business performance metrics including operational efficiency and customer acquisition •  Working with stakeholders including data, design, product and executive teams and assisting them with data-related technical issues • Working with stakeholders including the Executive, Product, Data and Design teams to support their data infrastructure needs while assisting with data-related technical issues', 'Bangladesh', 'Dhaka', 'Banani', 'Sql phpMyadmin Mysql database back end', '', 0, 0, ''),
(17, 'ap674901@gmail.com', 'Front end developer', 'We are looking for a qualified Front-end developer to join our IT team. You will be responsible for building the ‘client-side’ of our web applications. You should be able to translate our company and customer needs into functional and appealing interactive applications.  If you are interested in creating a user-friendly environment by writing code and moving forward in your career, then this job is for you. We expect you to be a tech-savvy professional, who is curious about new digital technologies and aspires to combine usability with visual design.  Ultimately, you should be able to create a functional and attractive digital environment for our company, ensuring great user experience.  Responsibilities Use markup languages like HTML to create user-friendly web pages Maintain and improve website Optimize applications for maximum speed Design mobile-based features Collaborate with back-end developers and web designers to improve usability Get feedback from, and build solutions for, users and customers Write functional requirement documents and guides Create quality mockups and prototypes Help back-end developers with coding and troubleshooting Ensure high quality graphic standards and brand consistency Stay up-to-date on emerging technologies', 'USA', 'Washington', 'NY', 'html css js ', '', 0, 0, ''),
(18, 'brothersintbd3@gmail.com', 'TESSSSSSSSSSSSSST', 'TEEEEEEEEEEEEEESSSSSSSSSSSSSTTTTTTTTTT', 'Bangladesh', 'Dhaka', 'Tejgao', 'test', '', 0, 0, ''),
(22, 'arijitpaul687@gmail.com', 'Valo lage na', 'Data Churi', 'Bangladesh', 'Washington', 'Old Dhaka', 'Java, Python', 'CSE', 5, 3.5, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company`, `des`, `admin`) VALUES
(25, 'Brothers international', ' Import Company', 'arijitpaul687@gmail.com'),
(26, 'Microsoft', 'Microsoft Corporation is an American multinational technology corporation headquartered in Redmond, Washington. Microsoft is best-known software products are the Windows line of operating systems, the Microsoft 365 suite of productivity applications, and the Internet Explorer and Edge web browsers.', 'brothersintbd3@gmail.com'),
(28, 'Cefalo', 'Software developing company in Dhaka', 'ap674901@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comment`
--

CREATE TABLE `forum_comment` (
  `comment_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jobseeker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `forum_comment`
--

INSERT INTO `forum_comment` (`comment_id`, `topic_id`, `content`, `created_at`, `jobseeker_id`) VALUES
(2, 1, 'vai apni dekhi pro', '2023-12-19 04:53:09', 1),
(3, 1, 'pari na vai\r\n', '2023-12-19 04:53:17', 1),
(4, 2, 'dhurro miya apply bad den', '2023-12-19 04:53:30', 1),
(5, 2, 'dhurro miya apply bad den', '2023-12-19 04:53:36', 1),
(6, 5, 'parba parba\r\n', '2023-12-19 05:17:04', 1),
(7, 2, 'hopp', '2023-12-19 05:17:19', 1),
(8, 5, 'kkiiiiii', '2023-12-19 05:17:28', 1),
(9, 5, 'kkiiiiii', '2023-12-19 05:20:35', 1),
(10, 5, 'kkiiiiii', '2023-12-19 05:22:00', 1),
(11, 2, 'hopp', '2023-12-19 05:26:25', 1),
(12, 14, 'hello', '2023-12-19 09:57:48', 1),
(13, 1, 'hmmmm', '2023-12-22 03:28:08', 1),
(14, 1, 'ki', '2023-12-24 07:58:34', 1),
(15, 1, 'ki', '2023-12-24 07:58:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_topic`
--

CREATE TABLE `forum_topic` (
  `topic_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jobseeker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `forum_topic`
--

INSERT INTO `forum_topic` (`topic_id`, `title`, `created_at`, `jobseeker_id`) VALUES
(1, 'Python', '2023-12-19 04:50:25', 1),
(2, 'How to Apply?', '2023-12-19 04:50:32', 1),
(3, 'Hiiiiii', '2023-12-19 05:00:21', 1),
(4, 'kirree', '2023-12-19 05:03:17', 1),
(5, 'partesi na', '2023-12-19 05:16:54', 1),
(6, 'hahaha', '2023-12-19 05:23:20', 1),
(7, 'Python Pari na', '2023-12-19 05:26:53', 1),
(8, 'Python Pari na', '2023-12-19 05:27:00', 1),
(9, 'jaaaaaaaaaaaaaaaaaa', '2023-12-19 05:39:08', 1),
(10, 'XDDD', '2023-12-19 05:39:18', 1),
(11, 's,,s,s', '2023-12-19 05:39:26', 1),
(12, 'kakkakaka', '2023-12-19 05:39:35', 1),
(13, 'kakkakaka', '2023-12-19 05:43:23', 1),
(14, 'hiiii', '2023-12-19 09:57:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `mobile_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `email`, `password`, `first_name`, `last_name`, `dob`, `mobile_number`) VALUES
(1, 'arijit.cse.20200204067@aust.edu', 'e10adc3949ba59abbe56e057f20f883e', 'Arijit', 'Paul', '0000-00-00', 1777645699),
(7, 'ramisha4627@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Shaikh Ramisha', 'Maliyat', '0000-00-00', 1971595579),
(8, 'remonshahariar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Remon', 'Ahmed', '0000-00-00', 1688208230),
(16, 'asif.cse.20200204023@aust.edu', 'e10adc3949ba59abbe56e057f20f883e', 'Asif', 'Rahman', '0000-00-00', 1720553756),
(17, 'mahiba.cse.20200204096@aust.edu', 'e10adc3949ba59abbe56e057f20f883e', 'Mahiba', 'Nafia', '0000-00-00', 1777645699),
(18, 'remon.cse.20200204067@aust.edu', 'e10adc3949ba59abbe56e057f20f883e', 'Shahriar Hossein', 'Remon', '0000-00-00', 1454545456),
(19, 'sadaf.cse.20200204063@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sadaf', 'Nahian', '0000-00-00', 1777645688),
(20, 'nabila.cse.20200204065@aust.edu', 'e10adc3949ba59abbe56e057f20f883e', 'Nabila', 'Rahman', '0000-00-00', 1777645699),
(21, 'lolXD69@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nabila', 'Rahman', '0000-00-00', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `file` varchar(500) NOT NULL,
  `id_job` int(111) NOT NULL,
  `job_seeker` varchar(100) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `major` text NOT NULL,
  `experience` int(11) NOT NULL,
  `cgpa` float NOT NULL,
  `experties` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `job_seeker`, `mobile_number`, `major`, `experience`, `cgpa`, `experties`) VALUES
(26, 'Mahiba', 'Nafia', '2023-08-14', 'proposal (1).pdf', 13, 'mahiba.cse.20200204096@aust.edu', '01777645699', '', 0, 0, ''),
(29, 'Shahriar Hossein', 'Remon', '2023-08-23', 'group01.pdf', 16, 'remon.cse.20200204067@aust.edu', '01777645699', 'CSE', 0, 0, ''),
(31, 'Nabila', 'Rahman', '2023-08-08', 'CURRENT-CV.pdf', 12, 'nabila.cse.20200204065@aust.edu', '01777645688', '', 0, 0, ''),
(32, 'Mahiba', 'Nafia', '2023-08-07', 'CURRENT-CV.pdf', 12, 'mahiba.cse.20200204096@aust.edu', '0177645699', '', 0, 0, ''),
(40, 'Arijit', 'Paul', '2023-12-22', '20200204067_Assignment1.pdf', 22, 'arijit.cse.20200204067@aust.edu', '11111111111', 'CSE', 3, 3, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(100) NOT NULL,
  `category` varchar(200) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(1, 'CSE', ''),
(2, 'EEE', ''),
(3, 'Mechanical', ''),
(4, 'IPE', ''),
(6, 'BBA', ''),
(7, 'Architecture', ''),
(8, 'Civil', ''),
(9, 'Textile Engineering', ''),
(10, 'Hons in English', '');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(111) NOT NULL,
  `img` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `number` varchar(111) NOT NULL,
  `email` varchar(1111) NOT NULL,
  `user_email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `img`, `name`, `dob`, `number`, `email`, `user_email`) VALUES
(41, 'STATE3948.JPG', 'Arijit Paul', '2023-12-18', '01777645699', 'arijit.cse.20200204067@aust.edu', 'arijit.cse.20200204067@aust.edu'),
(42, 'mahiba.png', 'Mahiba', '0000-00-00', '017776485055', 'mahiba.cse.20200204096@aust.edu', 'mahiba.cse.20200204096@aust.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `forum_comment`
--
ALTER TABLE `forum_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `js_id_fkk` (`jobseeker_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `js_id_fk` (`jobseeker_id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `forum_comment`
--
ALTER TABLE `forum_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `forum_topic`
--
ALTER TABLE `forum_topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_comment`
--
ALTER TABLE `forum_comment`
  ADD CONSTRAINT `forum_comment_ibfk_2` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`id`),
  ADD CONSTRAINT `forum_comment_ibfk_3` FOREIGN KEY (`topic_id`) REFERENCES `forum_topic` (`topic_id`);

--
-- Constraints for table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD CONSTRAINT `forum_topic_ibfk_1` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
