-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2015 at 10:54 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `okoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(50) NOT NULL auto_increment,
  `names` varchar(50) collate latin1_general_ci NOT NULL,
  `idee` varchar(50) collate latin1_general_ci NOT NULL,
  `acno` varchar(50) collate latin1_general_ci NOT NULL,
  `pin` varchar(10) collate latin1_general_ci NOT NULL,
  `value` varchar(50) collate latin1_general_ci NOT NULL,
  `status` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `names`, `idee`, `acno`, `pin`, `value`, `status`) VALUES
(1, 'bett weldon', '29691611', '123457', '202020', '109', '123457'),
(6, 'ronald siele kip', 'kip@gmail.com', '434353', '232323', '15000', '0'),
(16, 'mohammed omar hassan', 'omar@gmail.com', 'yr9sbV', '321321', '0', '0'),
(15, 'mourin chep rest', 'rew@gmail.com', 'b9VT27', '96321', '0', '0'),
(13, 'wesly ochieng ouko', 'oko@gmail.com', '79b516', '14', '0', '0'),
(17, 'Judy Tita ouko', 'tita@yahoo.com', 'sHGb69', '8989', '0', '0'),
(19, 'wesly kip ', 'kip@', 'G7sr34', '12', '0', '0'),
(22, 'betty cheronoh lang''at', 'bettriegmail.com', 'brsVy2', '4040', '0', '0'),
(23, 'Judy Chemutai Ouko', 'Titagmail.com', '2R4u5r', 'jerry', '0', '0'),
(24, 'Esther Njoroge  Wamboi', 'wamnjgmail.com', '3VH4G5', '987', '0', '0'),
(41, 'dsfsdf sdfsfasd asdasda', '715847698', '2716A9', '123456', '0', '0'),
(42, 'really damn gosh', '+254716844016', '579LA6', 'weldonkips', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(20) NOT NULL auto_increment,
  `custt` varchar(50) collate latin1_general_ci NOT NULL,
  `money` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=154 ;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `custt`, `money`) VALUES
(153, '397', '900'),
(152, '396', '900'),
(151, '395', '900'),
(150, '394', '904'),
(149, '393', '1004'),
(148, '392', '3555'),
(147, '391', '1005'),
(146, '390', '904'),
(145, '389', '904'),
(144, '388', '905'),
(143, '387', '904'),
(142, '386', '1000'),
(141, '385', '900'),
(140, '384', '904'),
(139, '383', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `gen`
--

CREATE TABLE `gen` (
  `id` int(50) NOT NULL auto_increment,
  `real` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=482 ;

--
-- Dumping data for table `gen`
--

INSERT INTO `gen` (`id`, `real`) VALUES
(423, '522'),
(422, '521'),
(421, '520'),
(420, '519'),
(419, '518'),
(418, '517'),
(417, '516'),
(416, '515'),
(415, '514'),
(414, '513'),
(413, '512'),
(412, '511'),
(411, '510'),
(410, '509'),
(409, '508'),
(408, '507'),
(407, '506'),
(406, '505'),
(405, '504'),
(404, '503'),
(403, '502'),
(402, '501'),
(401, '500'),
(400, '499'),
(399, '498'),
(398, '497'),
(397, '496'),
(396, '495'),
(395, '494'),
(394, '493'),
(393, '492'),
(392, '491'),
(391, '490'),
(390, '489'),
(389, '488'),
(388, '487'),
(387, '486'),
(386, '485'),
(385, '484'),
(384, '483'),
(383, '482'),
(382, '481'),
(381, '480'),
(380, '479'),
(379, '478'),
(378, '477'),
(377, '476'),
(376, '475'),
(375, '474'),
(374, '473'),
(373, '472'),
(372, '471'),
(371, '470'),
(370, '469'),
(369, '468'),
(368, '467'),
(367, '466'),
(366, '465'),
(365, '464'),
(364, '463'),
(363, '462'),
(362, '461'),
(361, '460'),
(360, '459'),
(359, '458'),
(358, '457'),
(357, '456'),
(356, '455'),
(355, '454'),
(354, '453'),
(353, '452'),
(352, '451'),
(351, '450'),
(350, '449'),
(349, '448'),
(348, '447'),
(347, '446'),
(346, '445'),
(345, '444'),
(344, '443'),
(343, '442'),
(342, '441'),
(341, '440'),
(340, '439'),
(339, '438'),
(338, '437'),
(337, '436'),
(336, '435'),
(335, '434'),
(334, '433'),
(333, '432'),
(332, '431'),
(331, '430'),
(330, '429'),
(329, '428'),
(328, '427'),
(327, '426'),
(326, '425'),
(325, '424'),
(324, '423'),
(323, '422'),
(322, '421'),
(321, '420'),
(320, '419'),
(319, '418'),
(318, '417'),
(317, '416'),
(316, '415'),
(315, '414'),
(314, '413'),
(313, '412'),
(312, '411'),
(311, '410'),
(310, '409'),
(309, '408'),
(308, '407'),
(307, '406'),
(306, '405'),
(305, '404'),
(304, '403'),
(303, '402'),
(302, '401'),
(301, '400'),
(300, '399'),
(299, '398'),
(298, '397'),
(297, '396'),
(296, '395'),
(295, '394'),
(294, '393'),
(293, '392'),
(292, '391'),
(291, '390'),
(290, '389'),
(289, '388'),
(288, '387'),
(287, '386'),
(286, '385'),
(285, '384'),
(284, '383'),
(283, '382'),
(282, '381'),
(281, '380'),
(280, '379'),
(279, '378'),
(278, '377'),
(277, '376'),
(276, '375'),
(275, '374'),
(274, '373'),
(1, ''),
(273, '101'),
(424, '523'),
(425, '524'),
(426, '525'),
(427, '526'),
(428, '527'),
(429, '528'),
(430, '529'),
(431, '530'),
(432, '531'),
(433, '532'),
(434, '533'),
(435, '534'),
(436, '535'),
(437, '536'),
(438, '537'),
(439, '538'),
(440, '539'),
(441, '540'),
(442, '541'),
(443, '542'),
(444, '543'),
(445, '544'),
(446, '545'),
(447, '546'),
(448, '547'),
(449, '548'),
(450, '549'),
(451, '550'),
(452, '551'),
(453, '552'),
(454, '553'),
(455, '554'),
(456, '555'),
(457, '556'),
(458, '557'),
(459, '558'),
(460, '559'),
(461, '560'),
(462, '561'),
(463, '562'),
(464, '563'),
(465, '564'),
(466, '565'),
(467, '566'),
(468, '567'),
(469, '568'),
(470, '569'),
(471, '570'),
(472, '571'),
(473, '572'),
(474, '573'),
(475, '574'),
(476, '575'),
(477, '576'),
(478, '577'),
(479, '578'),
(480, '579'),
(481, '580');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` varchar(50) collate latin1_general_ci NOT NULL,
  `name` varchar(50) collate latin1_general_ci NOT NULL,
  `serial` varchar(50) collate latin1_general_ci NOT NULL,
  `price` varchar(50) collate latin1_general_ci NOT NULL,
  `status` varchar(2) collate latin1_general_ci NOT NULL,
  `cust` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `serial`, `price`, `status`, `cust`) VALUES
('1', 'pishori rice', 'r24325423', '900', '1', '393'),
('2', 'xxx', 't435', '250', '1', '392'),
('3', 'beans', 's4532', '120', '1', '392'),
('4', 'biscuits', 'b5678', '244', '1', '392'),
('', 'weda', 'r3443', '258', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(50) collate latin1_general_ci NOT NULL,
  `user` varchar(50) collate latin1_general_ci NOT NULL,
  `pass` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
('1', 'admin', 'admin'),
('2', 'manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `yote`
--

CREATE TABLE `yote` (
  `id` varchar(20) collate latin1_general_ci NOT NULL,
  `dates` date NOT NULL,
  `cashin` int(30) NOT NULL,
  `cashout` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `yote`
--

INSERT INTO `yote` (`id`, `dates`, `cashin`, `cashout`) VALUES
('1', '2014-04-28', 32501, 4523),
('2', '2014-04-27', 150400, 14890),
('3', '2014-04-29', 2272, 400);
