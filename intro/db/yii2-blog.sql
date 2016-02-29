-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2016 at 04:39 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `create_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `content`, `create_at`) VALUES
(1, 4, 18, 'hello', '2015-12-03 09:20'),
(2, 8, 18, 'hi', '2015-12-03 09:20');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_notified` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `subject`, `content`, `create_at`, `status`, `is_notified`, `sender_id`, `receiver_id`) VALUES
(39, 'hello', '<p>hello</p>\r\n', '2015-12-03 03:19', 1, 1, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permit` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `content`, `permit`, `user_id`, `create_at`) VALUES
(6, 'Behind the word mountains', '', ' Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web\r\n\r\nOne morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What''s happened to me?" he thought. It wasn''t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, ', 4, 3, '2015-11-02'),
(7, 'The European languages are members ', '', 'The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. ', 4, 3, '2015-11-03'),
(23, 'Want to Develop Your Kids Financial Brain? Use This Board Game', '10.jpg', '<p>I wanted to remind everyone about a simple yet very effective financial literacy tool: Monopoly. There are few better lessons in life than on-the-job training. Monopoly is a great tool to simulate financial lessons. I&rsquo;d recommend that you wait for a rainy day to pull the popular board game out, but when that day comes, you&rsquo;ll find tons of excitement for children of all ages. The financial lessons inherent in the game include: Math and counting: In our house, there seems to be a lot of competition over who will get to be the banker. A child making change on the fly really hones their math skills. And for younger players, they get practice counting the spaces after each roll. Budgeting: As a child strategizes their way through the game, they eventually learn that buying every property they land on is typically a quick road to nowhere. If a player spends his or her time buying up the railroads and building on properties such as Baltic or Mediterranean Avenues, they are usua', 4, 8, '2015-12-03'),
(29, '6 Things You Didn’t Know About LT', '095834clkkpml44666lxjl.jpg', 'When you think of long-term care insurance, what comes to mind?\r\n\r\nUnfortunately, some people hold certain misconceptions or have an unfavorable opinion of long-term care insurance, largely stemming from issues related to its early days. But that was then. Today, there are more options focusing on straightforward and flexible long-term care solutions. Let’s take a look.\r\n\r\n1. You decide where care is received. One of the most common myths is that long-term care insurance only provides nursing home care, and nothing is further from the truth. It provides home care for those who prefer to “age in place,” as well as care at adult day care, assisted living facilities and hospice centers. In fact, most newly opened long-term care insurance claims are for home care, according to the American Association for Long Term Care Insurance (AALTCI).\r\n\r\n2. Benefits can be tremendously flexible. In addition to options for where care is received, most long-term care insurance policies offer greater fle', 4, 4, '2015-12-03'),
(31, 'NƠI BÌNH YÊN CÒN LẠI...', 'noi-binh-yen-con-lai.jpg', '<p><span style="color:rgb(33, 25, 34)">Thế l&agrave; chị ấy ra đi, đi c&ugrave;ng đứa con c&aacute;ch đ&acirc;y v&agrave;i th&aacute;ng đ&atilde; kh&oacute;c thất thanh một lần rồi im bặt hẳn. Chị đ&atilde; chết lặng v&agrave; ch&igrave;m trong mi&ecirc;n man, 3 ng&agrave;y hay 5 ng&agrave;y, để khi tỉnh dậy người ta cũng đ&atilde; đưa con chị đi rồi. Chị bơ vơ trong thế giới của thực tại. Chị mi&ecirc;n man trong tiếng ru ầu ơ, tiếng nựng nịu đứa b&eacute; trong niềm h&acirc;n hoan m&agrave; chan đầy ai o&aacute;n. Đứa b&eacute; ấy t&acirc;m hồn v&ocirc; thức, kh&ocirc;ng nhận biết, v&agrave; người ta bảo lớn l&ecirc;n n&oacute; cũng ng&acirc;y ng&ocirc; như thế. Đứa b&eacute; ấy, nụ cười của n&oacute; ng&acirc;y dại, khu&ocirc;n mặt n&oacute; ng&acirc;y dại, nhưng h&igrave;nh như tiếng mẹ n&oacute; h&aacute;t chạm v&agrave;o đ&acirc;u đ&oacute; trong tr&aacute;i tim qu&aacute; đỗi b&eacute; bỏng của n&oacute;, một ch&uacute;t ngẩn ngơ, để m&agrave; đ&ocirc;i mắt n&oacute; cũng c&oacu', 4, 4, '2016-02-29'),
(32, 'LÀM SAO QUÊN ANH, MỐI TÌNH ĐẦU?', 'lam-sao-quen-anh-moi-tinh-dau.jpg', '<p><span style="color:rgb(33, 25, 34)">M&ugrave;a đ&ocirc;ng ấy, Nam ở b&ecirc;n Thương bằng cả sự m&ugrave;i mẫn của một thằng trai mới y&ecirc;u lần đầu. Nam chắt chiu cho Thương tất cả những h&agrave;nh động đẹp đẽ nhất của một thằng trai từng đơn phương một chị kh&oacute;a tr&ecirc;n hai năm, cho đến khi chị ấy c&oacute; người y&ecirc;u th&igrave; &quot;vỡ mộng&quot;. Lần ấy, Nam kh&oacute;c. Sau n&agrave;y y&ecirc;u Thương, Nam n&oacute;i &quot;Anh sẽ kh&ocirc;ng để em phải kh&oacute;c v&igrave; anh. Thương em&quot;. Rồi Nam d&igrave;u Thương đi qua miền đ&ocirc;ng lạnh gi&aacute; năm ấy, đi qua khắp c&aacute;c con phố trơ trụi những c&agrave;nh l&aacute; x&aacute;c xơ, khắp những ng&otilde; ng&aacute;ch xi&ecirc;u vẹo của H&agrave; Nội cổ, khắp những h&agrave;ng qu&aacute;n l&ecirc; la b&ecirc;n đường ăn một v&agrave;i m&oacute;n đơn giản của m&ugrave;a đ&ocirc;ng lạnh đến t&ecirc; người. C&oacute; l&uacute;c Thương th&igrave; thầm: &quot;Đ&ocirc;ng lạnh qu&aacute; anh nhỉ?&quot;', 4, 4, '2016-02-29'),
(33, 'CON NHẬN RA...', 'con-nhan-ra.jpg', '<p>Tuổi trẻ, ch&atilde; bao giờ l&agrave; sai lầm chỉ v&igrave; y&ecirc;u hết m&igrave;nh. Con hiện tại biết rằng, trong tương lai con sẽ nhớ về gi&acirc;y ph&uacute;t n&agrave;y, v&agrave; nhủ rằng sao qu&aacute; khứ ngốc nghếch thế. V&igrave; lu&ocirc;n cho r&agrave;ng t&igrave;nh y&ecirc;u l&agrave; tất cả. Nhưng nếu như b&acirc;y giờ con bảo bản th&acirc;n con phải suy nghĩ như ch&iacute;nh m&igrave;nh trong tương lai, con kh&ocirc;ng l&agrave;m được.</p>\r\n\r\n<p>Tại sao con người dễ thay đổi qu&aacute; mẹ nhỉ. Cậu ấy theo đuổi con, ch&uacute;ng con quen nhau. V&agrave; giờ cậu ấy rời xa con. Sẽ chẳng c&oacute; g&igrave; nếu như con qu&aacute; xem trọng mối t&igrave;nh vụn dại n&agrave;y như vậy. Bao lần những ng&agrave;y cuối tuần, con kh&ocirc;ng về với mẹ chỉ v&igrave; đi chơi với cậu ấy.</p>\r\n', 3, 4, '2016-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `post_notification`
--

CREATE TABLE `post_notification` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `action_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_notification`
--

INSERT INTO `post_notification` (`id`, `post_id`, `type`, `action_id`, `receiver_id`, `status`, `create_at`) VALUES
(23, 18, 1, 8, 4, 1, '2015/12/03 03:20');

-- --------------------------------------------------------

--
-- Table structure for table `post_protected`
--

CREATE TABLE `post_protected` (
  `id` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_protected`
--

INSERT INTO `post_protected` (`id`, `create_at`, `user_id`, `post_id`) VALUES
(8, '2015/11/07 10:55', 8, 19);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `id` int(11) NOT NULL,
  `user_id_1` int(11) DEFAULT NULL,
  `user_id_2` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `user_id_action` int(11) DEFAULT NULL,
  `with_user_1_is` int(11) NOT NULL,
  `with_user_2_is` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL,
  `update_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`id`, `user_id_1`, `user_id_2`, `status`, `user_id_action`, `with_user_1_is`, `with_user_2_is`, `create_at`, `update_at`) VALUES
(34, 4, 8, 1, 4, 2, 1, '2015-12-03 09:18', '2015-12-03 09:19'),
(35, 4, 10, 0, 4, 1, 0, '2015-12-07 15:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `relationship_notification`
--

CREATE TABLE `relationship_notification` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `receive_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relationship_notification`
--

INSERT INTO `relationship_notification` (`id`, `type`, `action_id`, `receive_id`, `status`, `create_at`) VALUES
(30, 1, 8, 4, 1, '2015-12-03 09:18'),
(31, 2, 4, 8, 1, '2015-12-03 09:19'),
(32, 1, 4, 10, 0, '2015-12-07 15:52');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `create_at` varchar(50) NOT NULL,
  `own_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `color`, `start`, `end`, `create_at`, `own_id`) VALUES
(1, 'jobfair', '#F012BE', '2016-03-05 07:00', '2016-03-06 11:00', '2016-02-29 03:48', 4),
(2, 'barca - arsenal', '#00C0EF', '2016-02-24 01:45', '2016-02-24 03:30', '2016-02-29 03:49', 4);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_notification`
--

CREATE TABLE `schedule_notification` (
  `id` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `themeId` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `image`, `fullname`, `gender`, `education`, `job`, `location`, `status`, `themeId`, `is_admin`, `created_at`, `updated_at`) VALUES
(2, 'vu1', 'UmWy_uGllO6drbjiDrcQLyEaev0f9PZ7', '$2y$13$QmpSKRahmOZ3564DIqh6U.tyRbqzU2AFqUpQFdxMMbX0hFKGrHZg6', NULL, 'vu1@gmail.com', '', 'Nguyen Hoang Vu', 'Male', 'Bach Khoa Ha Noi', 'Student', 'Ha Noi', 10, 0, 0, 1444733261, 1446484608),
(3, 'vu3', 'UJVOyIA4Mc8cUM6CUMvpn_CHS9UIpLD3', '$2y$13$NlJKXnmqR/osEP7.MskDEOfZ3v6nI7eUcuYknnLyMadz7JFOV4.ay', NULL, 'vu3@gmail.com', '', 'Nguyen Hoang Vu', 'Male', 'Bach Khoa Ha Noi', 'Programing', 'Ha Noi', 10, 0, 0, 1444733358, 1446565896),
(4, 'vu4', 'Jf1PWdMcMRX4lx-bNbyl3dWwNagiGQBf', '$2y$13$i7Dr.y.DoIghQ3iMxTMUQuerCi7Z2Cb.ToId4acHR.RjFYDX94CCy', NULL, 'vu4@gmail.com', '10373787_769026123142701_7562131839822911780_n.jpg', 'Nguyen Hoang Vu', 'Male', 'Bach Khoa Ha Noi', 'Programing', 'Ha Noi', 10, 0, 0, 1444733384, 1448386451),
(5, 'vu5', 'Rx5d5yom5wuPAieXxrJHQATyvzRlf7-N', '$2y$13$U7FtySFGjut3Osd7z5P/ye2Z5JtecBRUaHtmHe/TrdZD5GW11SqqK', NULL, 'vu5@gmail.com', '', '', '', '', '', '', 10, 0, 0, 1444736763, 1444736763),
(6, 'vu6', '99QEzcCINrY8yzuZVglcFHNX2dZnbF6z', '$2y$13$FRpzze5H2SsYpWH7YfPPxOEQDTBhyR.DqLCiGxXSa3pYyek20KYqm', NULL, 'vu6@gmail.com', '', '', '', '', '', '', 10, 0, 0, 1446045426, 1446045426),
(7, 'tung', '4C7HGe6gPPXfXpNb0O3dLHaFPXoDI4Cd', '$2y$13$MdQSH56ND2tfRDTbxWzu5es2/pJqOr0lCBnwUdVs7BLXHyWCwXHLS', NULL, 'tranduytung1994@gmail.com', '', 'Trần Duy Tùng', '', 'đại học', '', 'hà nội', 10, 0, 0, 1446084458, 1446084516),
(8, 'messi', '2AU2V-BL8F2q-rmlziz_5ZKprLxnriM3', '$2y$13$a5N9t3UoSOBGIRoKaGHYVetvyEvF6ABCBnaQk5V7vCtaDpPL1Zn3e', NULL, 'messi@gmail.com', '11222947_1098626510156942_6550782556598909297_n.jpg', 'Lionel Messi', 'Other', 'Football School', 'Footballer', 'Argentina', 10, 1, 1, 1446895064, 1449110201),
(9, 'vu_messi', 'Uyf-Yxs_Ykv8X7Fo2Ea8ElqPwnLmT4H-', '$2y$13$i9QCQ/twhFjJNlRPLScWF.8ThsksQyaCbQijtxbpIIoew60KqSeZC', NULL, 'vu_messi@gmail.com', '1922137_755605997818047_8503929878650527594_n.jpg', 'Nguyen Hoang Vu', 'Male', 'Bach Khoa Ha Noi', 'Student', 'Ha Noi', 10, 0, 0, 1447036116, 1447036157),
(10, 'ronaldo', 'wk4cwMNxk_oAF7Z88kuDfQJ2Rs8b1MUQ', '$2y$13$eAr3aEtcUB0wOk4SJ6PFqupIOfn6UyHEfNX9OfGwqgjzjNLeo0Yc.', NULL, 'ronaldo@gmail.com', '', 'Critiano Ronaldo', 'Male', 'Football school', 'Footballer', 'Potugal', 10, 2, 0, 1447660937, 1447660982);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_notification`
--
ALTER TABLE `post_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_protected`
--
ALTER TABLE `post_protected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationship_notification`
--
ALTER TABLE `relationship_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_notification`
--
ALTER TABLE `schedule_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `post_notification`
--
ALTER TABLE `post_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `post_protected`
--
ALTER TABLE `post_protected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `relationship`
--
ALTER TABLE `relationship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `relationship_notification`
--
ALTER TABLE `relationship_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedule_notification`
--
ALTER TABLE `schedule_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
