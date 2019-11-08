-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 09:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pensa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `a_usern` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `fname`, `lname`, `a_usern`, `a_password`) VALUES
(1, 'Josh', 'Pong', 'purple', 'purple');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL,
  `c_email` varchar(100) DEFAULT NULL,
  `c_phone` varchar(10) DEFAULT NULL,
  `c_msg` text DEFAULT NULL,
  `c_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(100) NOT NULL,
  `e_msg` varchar(255) NOT NULL,
  `e_date` date NOT NULL,
  `e_pic` varchar(100) NOT NULL,
  `e_vid` varchar(100) NOT NULL,
  `e_loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(24) DEFAULT NULL,
  `l_portfolio` varchar(10) DEFAULT NULL,
  `l_contact` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`l_id`, `l_name`, `l_portfolio`, `l_contact`) VALUES
(1, 'ANASTASIA MILLS', NULL, '0501237951'),
(2, 'RHODA AKU-SIKA OFORI', NULL, '0555838883'),
(3, 'MESHACK TWUM-BARIMA', NULL, '0542327549'),
(4, 'LYDIA ADAMPTEY', NULL, '0557888924'),
(5, 'RACHAEL ABUGRI', NULL, '0548414490'),
(6, 'SOLOMON RICHARD ADJEI', NULL, '0549563861'),
(7, 'MACHAEL OPPNG', NULL, '0546404070'),
(8, 'EUNICE TETTEH', NULL, '0503945739'),
(9, 'OBED SAPPOR', NULL, '0279955075'),
(10, 'ABIGAIL ATUAHENE', NULL, '0272755103'),
(11, 'EMMANUELLA AGGREY', NULL, '0547993619'),
(12, 'VIDA BOSOMTWE', NULL, '0553481587'),
(13, 'STEPHEN KYEI ODURO', NULL, '0556521819'),
(14, 'ALPHAEUS AMOASI', NULL, '0242036391'),
(15, 'MICHAEL BONSU', NULL, '0247573600'),
(16, 'GETRUDE MIREKU', NULL, '0553207469'),
(17, 'EMMANUEL OFOSU', NULL, '0273593663'),
(18, 'VICTORIA AGYARKOA', NULL, '0553475526'),
(19, 'KWEKU PEPRAH', NULL, '0570915293'),
(20, 'MARY SOWAH TETTEH', NULL, '0272142423'),
(21, 'BENEDICTA BRIGHT MENSAH', NULL, '0248681189'),
(22, 'DERRICK ASAMOAH AMEYAW', NULL, '0248301566'),
(23, 'JEFFREY KOOMSON', NULL, '0241370748'),
(24, 'ISAAC AFRANE ODURO', NULL, '0248869239'),
(25, 'JOSHUA AMFOH', NULL, '0545045946'),
(26, 'DOREEN KORANTENG', NULL, '0240949910'),
(27, 'ERNESTINA ELIKPLIM', NULL, '0576238880'),
(28, 'MARINA NTIM FORDJOUR', NULL, '0200471006'),
(29, 'JUDITH LAMPTEY LAMIOKOR', NULL, '0543665072'),
(30, 'THEOPHILUS AMOAH', NULL, '0554942742'),
(31, 'ESTELLA OSEI AMANIAMPONG', NULL, '0262705839'),
(32, 'ZUTA JETHRO', NULL, '0558507516'),
(33, 'MICHAEL APPIAH JNR.', NULL, '0274489982'),
(34, 'RICHMOND BOATENG', NULL, '0574679686'),
(35, 'EMMANUEL GYIMAH', NULL, '0208014543'),
(36, 'FAUSTINA GYAMFUAH', NULL, '0549254935'),
(37, 'EMMANUEL OSIAN DARKO', NULL, '0267345088'),
(38, 'CHARITY AMA AFFUL', NULL, '0276204064'),
(39, 'NATHANIEL MENSAH', NULL, '0247769478'),
(40, 'ISABELLA MAKAFUI', NULL, '0263832611'),
(41, 'GLADYS AWUKU', NULL, '0248232369'),
(42, 'FELICIA SIAW', NULL, '0556741479'),
(43, 'PHILIP ACQUAH BONDZIE', NULL, '0245701338'),
(44, 'MARY BAAH', NULL, '0546622167'),
(45, 'ERIC SEKYI', NULL, '0540879730'),
(46, 'GRACE ADU BUABENG', NULL, '0548938144'),
(47, 'SAMUEL ADJEI BADU', NULL, '0542185708'),
(48, 'NUAKOH GAIUS KOJO', NULL, '0 '),
(49, 'TIEKU DAVID-LORD', NULL, '0542810663'),
(50, 'FELICIA ADOM', NULL, '0203981269'),
(51, 'JOSEPHINE SEKYI TETTEH', NULL, '0245585477'),
(52, 'LOIS AGYEMANG OFORI', NULL, '0208008729'),
(53, 'SHADRACH KWESI ADAMS', NULL, '0246502354'),
(54, 'RHODALYN ODURO', NULL, '0267673339'),
(55, 'ELD. CLEMENT AWUKU', NULL, '0549473690'),
(56, 'ABIGAIL ABA MENSAH', NULL, '0509401105'),
(57, 'GIFTY KATTAH', NULL, '0557612034'),
(58, 'JOSEPH ASANTE SARKODIE', NULL, '0247284147'),
(59, 'ESTHER SARFOWAA OPONG', NULL, '0544857131'),
(60, 'ANTHONY BAIDOO', NULL, '0543407319'),
(61, 'EMMANUEL KWAME AGYEMANG', NULL, '0543804764'),
(62, 'BRIGHT ASANTE WIAFE', NULL, '026827099'),
(63, 'REBECCA AIKINS', NULL, '0557889201'),
(64, 'JUSTICE AGYEKUM KUFFOUR', NULL, '0279778860'),
(65, 'ROBERT DOMO DIRETUO', NULL, '0543629979'),
(66, 'DANIEL ADDOFO MIREKU', NULL, '0543285587'),
(67, 'DEBORAH ASIEDU', NULL, '0508278233'),
(68, 'DAVID ANNAN', NULL, '0247130085'),
(69, 'ELIJAH MAJEWEN', NULL, '0543096190'),
(70, 'GIFTY ADDO', NULL, '0243963904'),
(71, 'JOSEPH MAWUENYA AGBESI', NULL, '0542539078'),
(72, 'ELVIS OPPONG', NULL, '0549371182'),
(73, 'DANIEL LARBI', NULL, '0549019485'),
(74, 'NICHOLAS TEYE NARTEY', NULL, '0546548096'),
(75, 'JOB NAGARMI SOWAH', NULL, '0552536358');

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `s_sermon` varchar(100) NOT NULL,
  `s_pic` varchar(100) NOT NULL,
  `s_author` varchar(50) NOT NULL,
  `s_msg` text NOT NULL,
  `s_type` varchar(20) DEFAULT NULL,
  `s_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `t_id` int(11) NOT NULL,
  `t_author` varchar(100) DEFAULT NULL,
  `t_msg` text DEFAULT NULL,
  `t_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `sermons`
--
ALTER TABLE `sermons`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
