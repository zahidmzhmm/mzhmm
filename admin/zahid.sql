-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 06:10 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `zahid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `secure_pin` int(11) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '''default.jpg''',
  `name` text NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'Title',
  `email` varchar(255) NOT NULL DEFAULT 'Email',
  `addrs` varchar(255) NOT NULL DEFAULT '''Address''',
  `interest` varchar(255) NOT NULL DEFAULT '''Interest''',
  `website` varchar(55) NOT NULL DEFAULT 'website',
  `description` longtext DEFAULT NULL,
  `birth` varchar(25) NOT NULL DEFAULT '01/01/2000',
  `phone` varchar(25) NOT NULL DEFAULT 'Phone',
  `facebook` varchar(55) NOT NULL DEFAULT 'Facebook',
  `twitter` varchar(55) NOT NULL DEFAULT 'Twitter',
  `linkedin` varchar(55) NOT NULL DEFAULT 'Linkedin',
  `youtube` varchar(55) NOT NULL DEFAULT 'Youtube',
  `behance` varchar(55) NOT NULL DEFAULT 'Behance',
  `skype` varchar(255) NOT NULL DEFAULT '''Skype''',
  `resume` varchar(255) NOT NULL DEFAULT '''Resume''',
  `main_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `favicon` varchar(55) NOT NULL DEFAULT 'default.png',
  `logo` varchar(255) NOT NULL DEFAULT 'default.png',
  `short_description` text DEFAULT NULL,
  `hire_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pin`, `secure_pin`, `img`, `name`, `title`, `email`, `addrs`, `interest`, `website`, `description`, `birth`, `phone`, `facebook`, `twitter`, `linkedin`, `youtube`, `behance`, `skype`, `resume`, `main_image`, `favicon`, `logo`, `short_description`, `hire_link`) VALUES
(9, 61546, 414264, '169img.jpg', 'Zahid Mzhmm', 'Web Developer', 'support@zahidmzhmm.com', 'Assam Colony, Bou Bazar, Sopura, Rajshahi-6203, Bangladesh', 'Coding, Typing, Car Lover', 'zahidmzhmm.com', '<div>Hey,</div>\r\n<p>I am Zahid. I have 3+ years of experience in Web Development. <strong><a title=\"Fiverr\" href=\"https://www.fiverr.com/mjhm12\" target=\"_blank\">Customer service: 20/7.</a></strong></p>\r\n<p>You will get <strong><a title=\"Fiverr\" href=\"https://www.fiverr.com/mjhm12\" target=\"_blank\">100% full support</a></strong>&nbsp;of work assured until you are fully satisfied</p>\r\n<h2>My key skills are:</h2>\r\n<ul style=\"list-style-type: disc;\">\r\n<li>HTML5</li>\r\n<li>CSS3</li>\r\n<li>JavaScript&nbsp;</li>\r\n<li>Jquery</li>\r\n<li>Bootstrap</li>\r\n<li>SASS (SCSS)</li>\r\n<li>PHP</li>\r\n<li>OOP, PDO</li>\r\n<li>Rest API</li>\r\n<li>MySql</li>\r\n<li>Any sketch&nbsp;or PSD to HTML</li>\r\n<li>Demo import WordPress</li>\r\n<li>PHP Website Installation</li>\r\n<li>User panel with PHP, OOP, Mysql</li>\r\n<li>Admin Panel with PHP, OOP, Mysql</li>\r\n<li>Controller with PHP, OOP, Mysql</li>\r\n<li>Laravel</li>\r\n</ul>', '10/14/2002', '8801741424639', 'https://facebook.com/zahidmzhmm1', 'https://twitter.com/ZahidMzhmm', 'https://www.linkedin.com/in/zahidmzhmm', 'https://youtube.com/channel/UC6_EFU0PNFHY9G-7C--r1wQ', 'https://behance.net/jahidmjhmm', 'https://join.skype.com/invite/WjkWXCWV1kpb', 'https://zahidmzhmm.com/img/gallery/445resume.pdf', '162tree-736885__340.jpg', '903icon.png', '546logo.png', 'I am Zahid. I have 3+ years of experience in Web Development. Customer service: 20/7. You will get 100% full support of work assured until you are fully satisfied. My key skills are: 1. HTML5, CSS3, JavaScript & Jquery, Bootstrap,Wordpress Elementor, PHP, MySql 2. Any sketch, PSD, ai, photo, xd to HTML, Bootstrap, Wordpress with Elementor 3. demo import and customize with client requirement, page build with Elementor, SEO with Yoast plugin, login, registration 4. Graphic Design: A. Logo Design C. Favicon Design D. Adobe Illustrator E. Adobe Photoshop 5. Admin Panel, Controler Others.', 'https://www.fiverr.com/mjhm12');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `dir` text NOT NULL,
  `category` text NOT NULL,
  `post` longtext NOT NULL,
  `image` text NOT NULL,
  `admin_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `dir`, `category`, `post`, `image`, `admin_id`) VALUES
(7, 'Laravel start', 'laravel-start', 'Web Development', '<p>Hi,</p>\r\n<p>Today I go and start&nbsp;Laravel. Maybe it is very difficult. But all developers need to know the&nbsp;Laravel. Please look at the picture. Then maybe you can understand how it works.</p>\r\n<p>&nbsp;</p>', '72798laravel.jpeg', '9'),
(8, 'Laravel Start MVC Image', 'laravel-start-mvc-image', 'Web Development', '<p>Hi,</p>\r\n<p>Today I go and start&nbsp;Laravel. Maybe it is very difficult. But all developers need to know the&nbsp;Laravel. Please look at the picture. Then maybe you can understand how it works. Let\'s see the main image you can understand it. how it works.</p>', '13973dbbdcf15c4b74cb644d4f12f3406ba2d.png', '9');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `admin_id`, `type`) VALUES
(1, 'Graphic Design', '9', 1),
(2, 'Web Design', '9', 1),
(3, 'Web Development', '9', 1),
(8, 'Graphic Designer', '9', 2),
(10, 'Web Developer', '9', 2),
(11, 'Web Designer', '9', 2),
(12, 'Laravel', '9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `files` text NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `files`, `admin_id`, `type`) VALUES
(7, '445resume.pdf', '9', 2),
(15, '37620191101_132909-min.jpg', '9', 1),
(16, '17420191219_183041-min.jpg', '9', 1),
(17, '10320191219_183855edit-min.jpg', '9', 1),
(20, '594img_9811-min.jpg', '9', 1),
(21, '73720191219_193201-min.jpg', '9', 1),
(22, '458dbbdcf15c4b74cb644d4f12f3406ba2d.png', '9', 2),
(23, '94701.jpg', '9', 1),
(24, '32602.jpg', '9', 1),
(25, '98803.jpg', '9', 1),
(26, '32804.jpg', '9', 1),
(27, '46505.jpg', '9', 1),
(28, '51506.jpg', '9', 1),
(30, '61809.jpg', '9', 1),
(32, '653untitled-2.png', '9', 1),
(36, '384-ninja-admin-templete.zip', '9', 2),
(37, '785-flipmart-ecomerce-frontend.zip', '9', 2),
(40, '150-flatlab-admin-template.zip', '9', 2),
(41, '833-material-pro.zip', '9', 2);

-- --------------------------------------------------------

--
-- Table structure for table `myfiles`
--

CREATE TABLE `myfiles` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `filename` text NOT NULL,
  `filesize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myfiles`
--

INSERT INTO `myfiles` (`id`, `name`, `filename`, `filesize`) VALUES
(9, 'Abbu ID Card Part 01', 'Abbu 01.jpg', '1206946'),
(10, 'Abbu ID Card Part 02', 'Abbu 02.jpg', '1230446'),
(11, 'Main Picture', 'IMG_98100.jpg', '4221558'),
(16, 'Abbu Tin Certificate', 'nbr_tin_certificate_118265210573.pdf', '261856'),
(17, 'Abbu NID PDF', 'NID Card.pdf', '100824'),
(18, 'Amma ID Card Part 01', '01.jpg', '3271511'),
(19, 'Amma ID Card Part 02', '02.jpg', '3208497'),
(20, 'Amma NID Card', 'Amma NID Card.pdf', '103357'),
(21, 'Amma Tin Certificate', 'nbr.pdf', '244956'),
(22, 'Apu ID Card Part 01', 'Apu 01.jpg', '912969'),
(23, 'Apu ID Card Part 02', 'Apu 02.jpg', '1088819'),
(24, 'Apu NID Card', 'Apu NID Card.pdf', '135018'),
(25, 'Zahid Mzhmm', 'nid-9161309076.pdf', '97052'),
(26, 'Zahid Mzhmm IMG', 'Zahidimg.jpg', '140766'),
(27, 'Apu Payoneer Bank Statement', '02 2020.pdf', '89460'),
(28, 'Apu Payoneer Bank Statement', '02 to 06.pdf', '90393'),
(29, 'Apu Payoneer Bank Statement', '03 2020.pdf', '89640'),
(30, 'Apu Payoneer Bank Statement', '04 2020.pdf', '88530'),
(31, 'Apu Payoneer Bank Statement', '05 2020.pdf', '89460'),
(32, 'Apu Payoneer Bank Statement', '06 2020.pdf', '89758'),
(33, 'Apu Payoneer Bank Statement', '07 2020.pdf', '89620'),
(34, 'Apu Payoneer Bank Statement', '08 20.pdf', '88950'),
(35, 'Bank Statement Alea', 'Bank Statement Alea.pdf', '22765086'),
(36, 'Bank Statement Jahid', 'Bank Statement Jahid.pdf', '293903'),
(37, 'Local Bank Details', 'Local Bank Details.txt', '317'),
(38, 'Amma NETELLER', 'NETELLER.pdf', '108080'),
(39, 'Amma NETELLER Transaction History', 'NETELLER_transaction_history.csv', '2973'),
(40, 'Online Bank', 'Online Bank.txt', '485'),
(41, 'Apu Payoneer Pin', 'Screenshot from 2020-07-11 21-57-20.png', '774491'),
(42, 'Amma IMG', '01746853904.jpg', '151936'),
(43, 'Admit Card 2nd Semester', 'Admit Card 2nd Semester.pdf', '1405699'),
(44, 'Admit Card Jsc', 'Admit Card Jsc.pdf', '990583'),
(45, 'Jonmo Shonod', 'Jonmo Shonod.pdf', '1158612'),
(46, 'Ssc Proshongsha Potro', 'Ssc Proshongsha Potro.pdf', '870541'),
(47, 'SSC Markshit', 'Markshit.pdf', '1428186'),
(48, 'Diploma Ovinondon ', 'Ovinondon Diploma.pdf', '461208'),
(50, 'PSC Certificate', 'PSC Certificate.pdf', '1270471'),
(51, 'Admit Card SSC', 'Admit Card Ssc.pdf', '1221575'),
(52, 'MJHM All Info', 'MJHM All Info.docx', '24064'),
(53, 'NID Form No', 'NID Form No.pdf', '2451187'),
(54, 'Prottoin Potro', 'Prottoin Potro.pdf', '307614'),
(55, 'Registrasion Card Jsc', 'Registrasion Card Jsc.pdf', '829542'),
(56, 'Registration Card Diploma', 'Registration Card Diploma.pdf', '1463636'),
(57, 'Registration Card Ssc', 'Registration Card Ssc.pdf', '1558680'),
(58, 'Transfer Dorkhasto Diploma', 'Transfer Dorkhasto Diploma.pdf', '1772207'),
(59, 'Apu Payoneer Bank Statement', '09 2020.pdf', '89913'),
(60, 'Apu Payoneer Bank Statement', '10 2020.pdf', '92539'),
(61, 'Apu Payoneer Bank Statement', '11 2020.pdf', '88958'),
(62, 'Apu Payoneer Bank Statement', '12 2020.pdf', '89870'),
(63, 'Apu Payoneer All Statement', 'start to 01 2021.pdf', '103705'),
(64, 'Apu Payoneer Last Bank Statement', '01 2021.pdf', '89301'),
(65, 'Apu Payoneer All Statement CSV', 'start to 01 2021.csv', '4230');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `description`, `file`, `admin_id`) VALUES
(5, 'Allfallaga.space', 'This is my first website ad, the first client. I have completed it. Now, this website is now fully completed. if you go to the website you can see the design of how to looks good or bad. The client says this website is Amazing.', '588annotation2020-03-20125729.png', '9'),
(6, 'Bug Fix', 'I have solved the Bug within 5 min. Maybe the bug is hard for another Developer. But I have fixed it within 5 min. ', '436annotation2020-03-20130210.png', '9'),
(7, 'Small Admin Panel ', 'It is my sample work of Small Admin Controller.', '617annotation2020-03-20130639.png', '9'),
(8, 'Change password', 'This is the Change password section. This is folly dynamic. It is a work PHP code.', '355annotation2020-03-20130329.png', '9'),
(9, 'Signup Page', 'This is my simple signup page. Maybe the design is simple but the backend is work Amazing.', '750annotation2020-03-20130352.png', '9'),
(10, 'Bug Fix', 'this is my Bug Fix website', '767annotation2020-03-20130210.png', '9'),
(11, 'blog post', 'This is simple of the blog post with Full conrolll', '866annotation2020-03-20143029.png', '9'),
(12, 'Update users info.', 'Control users and Update users info.', '574annotation2020-03-20143520.png', '9'),
(13, 'Admin Panel', 'Full admin panel with PHP', '9901.png', '9'),
(14, 'Control of post', 'Control of post', '25802.png', '9'),
(15, 'Control of Post', 'Control of Post', '53903.png', '9'),
(16, 'Full Admin Panel', 'Full Admin Panel. admin can controls of users', '679usersectiontable13.png', '9'),
(17, 'Full Admin Panel', 'Full Admin Panel', '47338.png', '9'),
(18, 'Full Admin Panel', 'Full Admin Panel', '826users-form13.png', '9');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `file`, `admin_id`) VALUES
(8, 'Graphic Design', 'I have experience in Graphic Design. I am working with it for 2 years. I have some skills in Graphic design. I know Logo, Icon, Favicon and some, etc.', '897gd_design-01.png', '9'),
(12, 'It Support', 'I have experience in the Sector works. I know it is one going work. I have so many clients in It Sector work. All people love my work.', '184it_supporter-01.png', '9'),
(14, 'Web Development', 'I have so much experience in Web Development. Development means Full Website creation. I know and I have so much experience in web site development', '816web_development-01.png', '9'),
(15, 'Web Design', 'I am working with web design in the last 3 years. Now I have so much experience and I have completed so much design.  I have so many clients to work with web design.', '420web_design-01.png', '9'),
(17, 'Responsive design', 'I will make all responsive designs. I know all clients love responsive design. my all work Responsive Design. As a developer we need to complete Complete Responsive design :)', '233responsive_design-01.png', '9'),
(18, 'AWS', 'I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS', '279aws.png', '9');

-- --------------------------------------------------------

--
-- Table structure for table `short_review`
--

CREATE TABLE `short_review` (
  `id` int(11) NOT NULL,
  `customer` varchar(55) NOT NULL,
  `project` varchar(55) NOT NULL,
  `review` varchar(55) NOT NULL,
  `running` varchar(55) NOT NULL,
  `admin_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `short_review`
--

INSERT INTO `short_review` (`id`, `customer`, `project`, `review`, `running`, `admin_id`) VALUES
(3, '33', '82', '79', '5', '9');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `percent` varchar(255) NOT NULL,
  `admin_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `name`, `percent`, `admin_id`) VALUES
(23, 'Web Design', '85', '9'),
(24, 'Mysql (Database)', '60', '9'),
(27, 'PHP', '90', '9'),
(28, 'Laravel', '80', '9'),
(29, 'AWS (Amazon Web Services)', '50', '9'),
(30, 'Google Cloud Platform', '50', '9');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'clientimg.png',
  `comment` text NOT NULL,
  `review` varchar(25) NOT NULL,
  `country` text NOT NULL,
  `admin_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `image`, `comment`, `review`, `country`, `admin_id`) VALUES
(8, 'Fahed', '756fahed.jpg', 'The best service in the Word ... great timing and proffisionalitat is Amazing this man is Genius', '5', 'Germany (Deutschland)', '9'),
(9, 'Fahed', '759fahed.jpg', 'greaaaat work thank you', '5', 'Germany (Deutschland)', '9'),
(10, 'Fahed', '300fahed.jpg', 'Genius ðŸ¤©ðŸ¤©ðŸ¤©', '5', 'Germany (Deutschland)', '9'),
(13, 'Cross Stitch', '744[fiverr-res.cloudinary.com][161]373e1be5-d518-452f-b3d5-a7ddc760cc6e.jpg', 'Zahid was very fast and expert in php, I recommend it to everyone, well done!', '5', 'Italy', '9'),
(14, 'Surendra Devendra', 'clientimg.png', 'Awesome service, I am very much happy with your knowledge and down to earth behaviour. I recommend him for anyone who need good service', '5', 'India', '9'),
(15, 'Jannat', 'clientimg.png', 'Seller did a great job and finished all that was needed in a short amount of time', '5', 'Canada', '9'),
(16, 'Bevan Lenders', 'clientimg.png', 'Worked till items were achieved. Thanks', '5', 'Bahrain', '9'),
(17, 'Kyctechbw', '237[fiverr-res.cloudinary.com][40013].jpg', 'i would like to keep in touch so just to clarify understanding of the scope', '4', 'Botswana', '9'),
(18, 'Fahed', '2601.jpg', 'to be continue ...', '5', 'Germany (Deutschland)', '9'),
(19, 'Jannat', 'clientimg.png', 'Good communication and satisfactory work within timeline.', '5', 'Canada', '9'),
(20, 'Lebley', '3702.jpg', 'Jahid did an amazing job. They were very responsive to feedback and solve the problem. This person went above and beyond and I highly recommend them!', '5', 'Indonesia', '9'),
(21, 'Gandylabs', '26703.jpg', 'Good work. Thanks.', '3', 'United States', '9'),
(22, 'Aimranov', '39204.jpeg', 'Amazing work done! Keep going!!!!', '5', 'United States', '9'),
(23, 'Simboy4Real', 'clientimg.png', 'This dude is amazing with this work, was cool headed, and did a fantastic job...go ahead and use his service', '5', 'Vietnam', '9'),
(24, 'RandyHuff', '1905.jpg', 'Great, Fast and decisive work.', '5', 'United States', '9'),
(25, 'RandyHuff', '41205.jpg', 'Got all the work done quick with a problem I had on my website not having any access. Great job - recommend!', '5', 'United States', '9'),
(26, 'Simboy4Real', 'clientimg.png', 'Good job done...nice', '5', 'Vietnam', '9'),
(27, 'Simboy4Real', 'clientimg.png', 'Fast delivery and communication', '5', 'Vietnam', '9'),
(28, 'Simboy4Real', 'clientimg.png', 'Good experience', '5', 'Vietnam', '9'),
(29, 'Perismwihaki', 'clientimg.png', 'Wow, i enjoyed the page you added to my site, professional work indeed, I will surely order again', '5', 'Kenya', '9'),
(30, 'Perismwihaki', 'clientimg.png', 'I enjoyed the professionalism in you, Fine tuning my website to topnotch. I admired your professional touch.', '5', 'Kenya', '9'),
(31, 'Xtmatt', 'clientimg.png', 'Very professional. Fast and does great work. Will look to get him again.', '5', 'Canada', '9'),
(32, 'Simboy4Real', 'clientimg.png', 'Good experience', '5', 'Vietnam', '9'),
(33, 'Herculestax', 'clientimg.png', 'The developer is awesome! Will continue to work with the developer with other projects.', '5', 'United States', '9'),
(34, 'Karabomor', '60606.jpg', 'He listened to what my needs are and delivered work with skill. I am only going to choose him for my backend work. He also went the extra mile for me. Great working with you. Thanks', '5', 'South Africa', '9'),
(35, 'Leonardo lacko', '95807.jpg', 'I recommend to everyone!!', '5', 'Slovakia', '9'),
(36, 'Karabomor', '14306.jpg', 'Always my Go To person.', '5', 'South Africa', '9'),
(37, 'Karabomor', '46206.jpg', 'Always a pleasure working with you.', '5', 'South Africa', '9'),
(38, 'Karabomor', '45706.jpg', 'Great work as always', '5', 'South Africa', '9'),
(39, 'Karabomor', '5706.jpg', 'Excellent work as always', '5', 'South Africa', '9'),
(40, 'Perismwihaki', 'clientimg.png', 'I enjoyed working with you step by step. I also liked your advise on the best option for my website. You are such a great help.', '5', 'Kenya', '9'),
(41, 'Perismwihaki', 'clientimg.png', 'Best ever services rendered to me, quality stuff thanks a lot', '5', 'Kenya', '9'),
(42, 'Aaron Daniels', 'clientimg.png', 'Awesome developer! I recommend because he is very professional, provide ongoing updates. Excellent work.', '5', 'United States', '9'),
(43, 'Perismwihaki', 'clientimg.png', 'Progressive steps in a big project, an expert i enjoyed working with.', '5', 'Kenya', '9'),
(44, 'Hercules tax', 'clientimg.png', 'Awesome developer! I recommend because he is very professional, provide ongoing updates. Excellent work.', '5', 'United States', '9'),
(45, 'Perismwihaki', 'clientimg.png', 'Progressive steps in a big project, an expert i enjoyed working with.', '5', 'Kenya', '9'),
(46, 'Hercules Tax', 'clientimg.png', 'Awesome Developer!', '5', 'United States', '9'),
(47, 'Perismwihaki', 'clientimg.png', 'Excellent services for website design, wow!!!! A++++++++++++++++++++++ designer', '5', 'Kenya', '9'),
(48, 'Hercules Tax', 'clientimg.png', 'Awesome job! The developer has been very responsive and attentive to the project', '5', 'United States', '9'),
(49, 'Charles kan', 'clientimg.png', 'He always delivers, professional who understand clients needs, Highly recommended.', '5', 'Kenya', '9'),
(50, 'Charles kan', 'clientimg.png', 'Superb services, the developer never dissapoints.', '5', 'Kenya', '9'),
(51, 'Aaron Daniels', 'clientimg.png', 'Fantastic Work! The developer is awesome and easy to work with.', '5', 'United States', '9'),
(52, 'Michael Otieno', 'clientimg.png', 'great experience. He is the best', '5', 'Kenya', '9'),
(53, 'Charles kan', 'clientimg.png', 'Worked my email notification and timer within shortest time possible , thanks a lot for professionalism.', '5', 'Kenya', '9'),
(54, 'Hercules Tax', 'clientimg.png', 'The greatest of all time developer! Great work!', '5', 'United States', '9'),
(55, 'Karabomor', 'clientimg.png', 'Great work as always.', '5', 'South Africa', '9'),
(56, 'Karabomor', 'clientimg.png', 'Professional work', '5', 'South Africa', '9'),
(57, 'Karabomor', 'clientimg.png', 'Thank you for the great work', '5', 'South Africa', '9'),
(58, 'Perismwihaki', 'clientimg.png', 'He did it, Yes, excellent service from the best seller.', '5', 'Kenya', '9'),
(59, 'Karabomor', 'clientimg.png', 'Great work', '5', 'South Africa', '9'),
(60, 'Karabomor', 'clientimg.png', 'Always a pleasure working with', '5', 'South Africa', '9'),
(61, 'Mic oty', 'clientimg.png', 'Great experience. Highly recommended', '5', 'Kenya', '9'),
(62, 'Hercules Tax', 'clientimg.png', 'Awesome work as usually!', '5', 'United States', '9'),
(63, 'Karabomor', 'clientimg.png', 'Great work ethic', '5', 'South Africa', '9'),
(64, 'Michael Otieno', 'clientimg.png', 'great service. He is the best', '5', 'Kenya', '9'),
(65, 'Hercules Tax', 'clientimg.png', 'Awesome Job!', '5', 'United States', '9'),
(66, 'Karabomor', '81-06.jpg', 'Great work ethic', '5', 'South Africa', '9'),
(67, 'Carl1337', 'clientimg.png', 'Good work, thanks.', '5', 'Australia', '9'),
(68, 'Hercules Tax', 'clientimg.png', 'The developer rocks! Great work', '5', 'United States', '9'),
(69, 'Karabomor', 'clientimg.png', 'Great work', '5', 'South Africa', '9'),
(70, 'Hercules Tax', 'clientimg.png', 'Great Job!', '5', 'United States', '9'),
(71, 'micoty', 'clientimg.png', 'great work', '5', 'Kenya', '9'),
(72, 'Twinsarcade', 'clientimg.png', 'He knew exactly what I needed and completed it very quickly. Spoke good English. I would use his services again.', '5', 'United States', '9'),
(74, 'Perismwihaki', 'clientimg.png', 'Creativity is in you. I enjoyed the new face given to my website plus a professional logo. Thanks so much.', '5', 'Kenya', '9'),
(75, 'Perismwihaki', 'clientimg.png', 'Excellent Logo, you never fail in creativity.', '5', 'Kenya', '9'),
(76, 'Carlos', 'clientimg.png', 'Zahid is a talented web developer that will help you out with any project. Web services, html, css, php, javascript and more. Communication was excellent and always determined to work and deliver quickly. Expect to have what you describe him what you want. Validation process was smooth and his experience in the field of web programming is magnificent.', '5', 'United States', '9'),
(77, 'Sumwonlostsomew', 'clientimg.png', 'Thank you Zahid for being professional and putting up with my impatience. You did an awesome job and most definitely work with you again', '5', 'Australia', '9'),
(79, 'Carlosespber', '6288.jpg', 'Service support is unique, appreciate his work', '5', 'United States', '9'),
(80, 'Goldensio', '7849.jpg', 'great experience! will hire again soon! :D', '5', 'Italy', '9'),
(81, 'Emmanueluzo1', 'clientimg.png', 'Productive', '5', 'United States', '9'),
(82, 'Muhammad', 'clientimg.png', 'Amazing work by my brother Zahid! His communication skills are amazing, and his work is outstanding! Recommending him to everyone i know, hes skills is outside of this world! Very goodjob!', '5', 'United Arab Emirates', '9'),
(83, 'Dpcatkins', '70410.jpg', 'very good and quick service', '5', 'United Kingdom', '9'),
(84, 'Goldensio', '932222.jpg', 'Working with Zahid has been a very pleasant experience. He,s skilled and professional, always on the job and he will completely fulfill your requirements until you are completely satisfied. will hire again soon! truly recommended!', '5', 'Italy', '9'),
(85, 'Emmanueluzo1', 'clientimg.png', 'He was very patient and proactive with me through the development process of my site. He even used a Remote Desktop sharing service to help me run the code for the site on my computer! His workmanship is quite professional, and I would recommend him to anyone because he will go above and beyond for you!', '5', 'United States', '9'),
(86, 'Perismwihaki', 'clientimg.png', 'Thanks a lot for a wonderful work done', '5', 'Kenya', '9'),
(87, 'Goldensio', '7182222.jpg', 'Every time is a real pleasure to work with Zahid! :) i totally recommend him!', '5', 'Italy', '9'),
(88, 'Goldensio', '842222.jpg', 'Always a pleasure to work with. totally recommended.', '5', 'Italy', '9'),
(89, 'BPblues', 'clientimg.png', 'very professional and effective. did everything i asked in record time. no complaints at all', '5', 'United States', '9'),
(90, 'Panosgeorg', '10911.jpg', 'He is the best!!', '5', 'Austria', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myfiles`
--
ALTER TABLE `myfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_review`
--
ALTER TABLE `short_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `myfiles`
--
ALTER TABLE `myfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `short_review`
--
ALTER TABLE `short_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
