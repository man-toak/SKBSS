-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 04:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_class`
--

CREATE TABLE `attendance_class` (
  `s_ic` varchar(12) NOT NULL,
  `form_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `ac_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_class`
--

INSERT INTO `attendance_class` (`s_ic`, `form_id`, `class_id`, `status_id`, `ac_date`) VALUES
('070230091802', 102, 4, 1, '2018-11-25'),
('070230091802', 102, 4, 1, '0000-00-00'),
('070230091802', 102, 4, 2, '0000-00-00'),
('070230091802', 102, 4, 1, '0000-00-00'),
('070230091802', 102, 4, 2, '0000-00-00'),
('071009140936', 102, 4, 1, '2018-11-25'),
('070908137545', 102, 4, 2, '2018-11-25'),
('070608075678', 102, 4, 1, '2018-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_event`
--

CREATE TABLE `attendance_event` (
  `s_ic` varchar(12) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `form_id` varchar(10) NOT NULL,
  `status_id` int(11) NOT NULL,
  `ev_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_event`
--

INSERT INTO `attendance_event` (`s_ic`, `class_id`, `form_id`, `status_id`, `ev_id`) VALUES
('070230091802', '4', '102', 1, '18'),
('070230091802', '4', '102', 1, '19'),
('070608075678', '4', '102', 1, '18'),
('070908137545', '4', '102', 1, '18'),
('070908137545', '4', '102', 1, '19'),
('071009140936', '4', '102', 1, '18'),
('071009140936', '4', '102', 2, '19');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` varchar(10) NOT NULL,
  `class_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
('1', 'AMANAH'),
('2', 'BESTARI'),
('3', 'CERIA'),
('4', 'DEDIKASI'),
('5', 'EHSAN');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `educationID` varchar(10) NOT NULL,
  `education_level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`educationID`, `education_level`) VALUES
('101', 'SPM'),
('102', 'DIPLOMA'),
('103', 'DEGREE'),
('104', 'MASTER'),
('105', 'PHD');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ev_id` bigint(20) UNSIGNED NOT NULL,
  `ev_name` varchar(50) NOT NULL,
  `ev_date` date NOT NULL,
  `ev_place` varchar(50) NOT NULL,
  `ev_guest` varchar(35) NOT NULL,
  `ev_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ev_id`, `ev_name`, `ev_date`, `ev_place`, `ev_guest`, `ev_desc`) VALUES
(6, 'PERKHEMAHAN PERDANA', '2018-11-06', 'BAGAN LALANG, PORT DICKSON', 'PELAJAR SMK PUCHONG', 'TERBUKA KEPADA SEMUA PELAJAR'),
(18, 'SAMBUTAN HARI RAYA AIDILFITRI', '2018-07-11', 'HOTEL  RESIDENCY, BANGI ', 'SULTAN SELANGOR ', 'SEMUA BERPAKAIAN BAJU RAYA'),
(19, 'MAJLIS BERBUKA PUASA', '2018-07-12', 'DEWAN SMK  BANDAR SUNWAY SEMENYIH ', 'USTAZ DON ', 'DANA DARIPADA KUTIPAN TABUNG AMAL '),
(20, 'SUKAN TAHUNAN', '2018-09-14', 'PADANG AWAM SEMENYIH ', 'SYED SADDIQ ', 'IBU BAPA DIJEMPUT HADIR BAGI MEMERIAHKAN SUASANA'),
(21, 'KAWAD PERDANA PERINGKAT DAERAH', '2018-04-14', 'PPD KAJANG ', 'KOMANDER SHAH ALIF ', 'KRS, PPIM DAN BSMM'),
(22, 'SAMBUTAN HARI GURU', '2018-04-19', 'DEWAN SMK  BANDAR SUNWAY SEMENYIH ', 'YB SYED AHMAD ', 'BERTEMAKAN ARABIC'),
(23, 'MAKAN MALAM PERDANA', '2018-10-01', 'HOTEL GOLDEN HORSES, SERI KEMBANGAN ', 'AIZAT HAMDAN(PENYANYI) ', 'BERTEMAKAN HAWAII');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `fam_id` bigint(20) UNSIGNED NOT NULL,
  `s_ic` varchar(12) NOT NULL,
  `fam_fathername` varchar(30) DEFAULT NULL,
  `fam_fatherIC` varchar(15) DEFAULT NULL,
  `fam_fatherjob` varchar(20) DEFAULT NULL,
  `fam_fatherbirthday` date DEFAULT NULL,
  `fam_fatherphone` varchar(10) DEFAULT NULL,
  `fam_mothername` varchar(30) DEFAULT NULL,
  `fam_motherIC` varchar(14) DEFAULT NULL,
  `fam_motherjob` varchar(15) DEFAULT NULL,
  `fam_motherbirthday` date DEFAULT NULL,
  `fam_motherphone` varchar(10) DEFAULT NULL,
  `fam_numsibling` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`fam_id`, `s_ic`, `fam_fathername`, `fam_fatherIC`, `fam_fatherjob`, `fam_fatherbirthday`, `fam_fatherphone`, `fam_mothername`, `fam_motherIC`, `fam_motherjob`, `fam_motherbirthday`, `fam_motherphone`, `fam_numsibling`) VALUES
(2, '021009107151', 'AHMAD SAZALI', '640417105321', 'BUSINESS', '1964-04-17', '0196780358', 'WATI', '740902085474', '-', '1974-09-02', '196976736', 3),
(3, '111011041233', 'AHMAD DURANI', '650111211121', 'BERNIAGA', '2018-10-02', '0197780912', 'SITI JAMILAH', '771012102121', 'SURI RUMAH', '1976-10-19', '0132143321', 5),
(6, '021031108976', 'MOHD JALANI', '651021103212', 'KERANI', '1979-03-07', '0189086678', 'SITI JUNAIDAH', '789088102111', 'KERANI', '2015-02-03', '192113333', 5),
(7, '080115086625', 'ABUJA BIN ABIJI', '640313739371', 'USTAZ', '1982-03-13', '0193749201', 'MAKCIK LEMAH', '79091842345', 'SURIRUMAH', '1979-09-18', '1923858302', 9),
(8, '080115086627', 'MUHD ARASH BIN MOHD RASHID', '870121102849', 'GURU BESAR', '1987-01-21', '0189203941', 'MAK CUN ', '740210402402', 'SURI RUMAH', '1974-02-10', '1728193940', 7),
(9, '080203086147', 'RADZI BIN AHMAD', '960212301323', 'PETANI', '1996-02-12', '0192849102', 'RASHIDAH BINTI LIMAH', '590123401243', 'SURI RUMAH', '1959-01-12', '1428394021', 4),
(10, '080415086633', 'ABD ABI BIN ABD ZAHIR ', '590219104829', 'PENSYARAH', '1959-02-19', '0124950483', 'ROSMAH MAT ARIS', '780623105830', 'SURIRUMAH', '1978-06-23', '1358492038', 12),
(11, '070212091813', 'YAYAH BIN ABU', '870416401034', 'PENSYARAH', '1987-04-16', '0193748291', 'MAZIAH BIN RAZAK', '87102801938290', 'SURI RUMAH', '1987-10-28', '129375839', 3),
(12, '070219105646', 'MOHD SANIN BIN MOHD SANI', '890216102938', 'TEKNIKAL', '1989-02-16', '0172839103', 'MAZNAH BINTI CHE', '941029491029', 'SURI RUMAH', '1994-10-29', '193850394', 7),
(13, '070230091097', 'ALIAS BIN ALI', '821021291038', 'PENSYARAH', '1982-10-21', '0192837492', 'AZIZAH BINTI OMAR', '781121104839', 'SURI RUMAH', '1978-11-21', '129405037', 9),
(14, '071209041197', 'IBRAHIM BIN ABI', '830729103810', 'PETANI', '1983-07-29', '0194838102', 'LAILI NAJLA ', '890419201928', 'SURI RUMAH', '1989-04-19', '173891028', 7),
(15, '110918067151', 'MOHD SALMAN BIN SALIMON', '8210270812029', 'PESARA', '1982-02-27', '0124859102', 'JEMAH MAT ALI ', '900512830198', 'SURI RUMAH', '1990-05-12', '192738492', 6),
(16, '061009140908', 'ABDUL RAHIMAH BIN ZAHIR', '861223204869', 'GURU BESAR', '1986-12-23', '0139402840', 'SHARIFAH BINTI ABDUL', '591023190293', 'SURI RUMAH', '1959-10-23', '192830182', 2),
(17, '061103169866', 'RADHI HADI ', '851012392018', 'PEMANDU TEKSI', '1985-10-12', '0192849202', 'MARINI BINTI ABU', '880319102910', 'PEGAWAI PENJARA', '1988-03-19', '19283910', 4),
(18, '061214183678', 'ANUR ZAIN BIN ZAINI', '94031481920', 'PENSYARAH', '1994-03-14', '0193828018', 'MAJLAH BINTI ABD HAFIZ ', '820112830182', 'GURU TADIKA', '1982-01-12', '182472190', 6),
(19, '091009121234', 'SHAZNAS BIN AHMAD ', '570623103849', 'PENSYARAH', '1957-06-23', '0192849294', 'LEHA BINTI ABDUL SAMAD', '920428294819', 'BUSINESS WOMEN', '1992-04-28', '1829337492', 8),
(20, '101010049129', 'MAHMUD BIN ABDUL HADI', '581023819378', 'PEMANDU TEKSI', '1958-10-23', '0182748510', 'QASYIDAH BINTI ABDULLAH', '91052395829', 'SURI RUMAH', '1991-05-23', '183758402', 5);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` varchar(10) NOT NULL,
  `form_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `form_name`) VALUES
('101', 'FORM 1'),
('102', 'FORM 2'),
('103', 'FORM 3'),
('104', 'FORM 4'),
('105', 'FORM 5');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `g_id` varchar(6) NOT NULL,
  `g_type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`g_id`, `g_type`) VALUES
('1', 'MALE'),
('2', 'FEMALE');

-- --------------------------------------------------------

--
-- Table structure for table `history_event`
--

CREATE TABLE `history_event` (
  `hev_id` varchar(10) NOT NULL,
  `hev_name` varchar(50) NOT NULL,
  `hev_guest` varchar(35) NOT NULL,
  `hev_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_event`
--

INSERT INTO `history_event` (`hev_id`, `hev_name`, `hev_guest`, `hev_desc`) VALUES
('0003', 'KAYUHAN BA', 'MARK ADAM ', 'SEMUA MURID TERLIBAT'),
('1', 'CERAMAH KECEMERLANGAN AKADEMIK', 'PROF MADYA SHARIFAH ', 'KHUSUS UNTUK PELAJAR TINGKATAN 5'),
('2', 'KEMPEN KITAR SEMULA', '- ', 'SEMUA MURID TERLIBAT'),
('3', 'MOTIVASI CELIK IT', 'DR AMALINA SHAH', 'SEMUA MURID TERLIBAT');

-- --------------------------------------------------------

--
-- Table structure for table `history_family`
--

CREATE TABLE `history_family` (
  `hf_id` varchar(12) NOT NULL,
  `hs_ic` varchar(12) NOT NULL,
  `hf_fathername` varchar(30) NOT NULL,
  `hf_fatherIC` varchar(15) NOT NULL,
  `hf_fatherjob` varchar(20) NOT NULL,
  `hf_fatherbirthday` date NOT NULL,
  `hf_fatherphone` varchar(10) NOT NULL,
  `hf_mothername` varchar(30) NOT NULL,
  `hf_motherIC` int(15) NOT NULL,
  `hf_motherjob` varchar(20) NOT NULL,
  `hf_motherbirthday` date NOT NULL,
  `hf_motherphone` varchar(11) NOT NULL,
  `hf_numsibling` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_student`
--

CREATE TABLE `history_student` (
  `hs_ic` varchar(12) NOT NULL,
  `hs_name` varchar(25) NOT NULL,
  `form_id` varchar(10) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `hs_address` varchar(100) NOT NULL,
  `state_id` varchar(10) NOT NULL,
  `g_id` varchar(10) NOT NULL,
  `hs_age` int(2) NOT NULL,
  `hs_nophone` int(10) NOT NULL,
  `hs_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_student`
--

INSERT INTO `history_student` (`hs_ic`, `hs_name`, `form_id`, `class_id`, `hs_address`, `state_id`, `g_id`, `hs_age`, `hs_nophone`, `hs_email`) VALUES
('001203087376', 'shahir', '101', '1', 'cengal', '01', '1', 14, 234567, 'eidel@gmail.com'),
('001211102111', 'SUHAILA JAMILA', '105', '4', 'TAMAN MUTIARA 10, KANGAR', '01', '2', 15, 198897866, 'sue@yahoo.com'),
('021031108976', 'MOHD HARITH', '101', '1', 'NO12, TAMAN AGIHAN 3, PUCHONG', '01', '1', 13, 178687765, 'harith@yahoo.com'),
('030102146693', 'AMIR NUR HAKIM', '101', '1', 'NO19, JALAN BATU PAHAT 1/3, ARAU', '01', '1', 13, 145768492, 'aamirrrlahhh@gmail.com'),
('040610541012', 'AMINAH ABU BAKAR', '104', '2', 'NO99, SIMPANG 4 JALAN SEHALA, 4100 JOHOR LAMA', '08', '2', 16, 193658295, 'aminahabubakar@yahoo.com'),
('070110086430', 'MOHD SHAHMI', '103', '6', 'SEKSYEN 7, SHAH ALAM', '05', '1', 15, 196768909, 'shahmi@yahoo.com'),
('070110561023', 'MUHD AIMAN', '102', '2', 'BANDAR BARU SEMENYIH, SEMENYIH', '05', '1', 14, 192130076, 'aimanmuhd@gmail.com'),
('081012102134', 'SITI SARAH', '103', '3', '12, JALAN SIMPANG KANAN, KUANTAN', '09', '2', 15, 197860098, 'sarah@gmail.com'),
('091012103212', 'MUHD AIMAN', '102', '3', '12, BATU 19, CHERAS', '05', '1', 15, 193215564, 'aiman@yahoo.com'),
('45678', 'shahira', '101', '1', 'ghjkl', '02', '1', 14, 7890, 'nm'),
('76869', 'ihbjk', '101', '1', 'hgjhgk', '02', '1', 14, 176760987, 'eidel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `history_teacher`
--

CREATE TABLE `history_teacher` (
  `ht_ic` varchar(12) NOT NULL,
  `ht_name` varchar(20) NOT NULL,
  `ht_address` varchar(50) NOT NULL,
  `state_id` varchar(50) NOT NULL,
  `educationID` varchar(15) NOT NULL,
  `ht_nophone` int(10) NOT NULL,
  `g_id` varchar(6) NOT NULL,
  `form_id` varchar(10) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `ht_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_teacher`
--

INSERT INTO `history_teacher` (`ht_ic`, `ht_name`, `ht_address`, `state_id`, `educationID`, `ht_nophone`, `g_id`, `form_id`, `class_id`, `ht_email`) VALUES
('09876542', 'UMAIRAH', 'NO12, JALAN PEKAN ARAU ', '01', '104', 87654, '2', '105', '8', 'umairah@gmail.com'),
('09876543', 'SARAH', '21, JALAN PAHAT 2, KLEBANG ', '07', '104', 987654, '2', '103', '8', 'sharifah@gmail.com'),
('23', 'mohd', 'LOT2162, KAMPUNG DALAM, JITRA ', '02', '101', 193215576, '1', '101', '1', '32DD'),
('534', 'gsv', 'dgfxf ', '02', '102', 23523, '1', '102', '1', 'sgd'),
('671031107865', 'AHMAD HAFIQ', 'NO12, PEKAN ARAU', '01', '101', 170981021, '1', '102', '5', 'afiq@gmail.com'),
('751717019287', 'SITI SHARIFAH', 'NO23/2, JALAN GARISAN,', '01', '101', 198785567, '1', '', '1', 'shar@gmail.com'),
('760112083214', 'ABU BAKAR', '13, JALAN DALAM, KUANTAN', '09', '102', 120098708, '2', '102', '3', 'abubak@yahoo.com'),
('791210102132', 'ABU BAKAR', 'LOT2162, KAMPUNG DALAM, JITRA ', '02', '102', 163217789, '1', '102', '10', 'abubak@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `hr_id` bigint(20) UNSIGNED NOT NULL,
  `hr_name` varchar(25) NOT NULL,
  `hr_address` varchar(50) NOT NULL,
  `state_id` varchar(10) NOT NULL,
  `p_id` varchar(15) NOT NULL,
  `g_id` varchar(6) NOT NULL,
  `hr_email` varchar(20) NOT NULL,
  `hr_nophone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`hr_id`, `hr_name`, `hr_address`, `state_id`, `p_id`, `g_id`, `hr_email`, `hr_nophone`) VALUES
(1, 'ABU SULAIMAN', 'JALAN 2, TAMAN BOTANI 4, BANGI', '05', '', '1', 'sulaiman@gmail.com', '132134432');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `p_id` varchar(10) NOT NULL,
  `p_description` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` varchar(10) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
('01', 'PERLIS'),
('02', 'KEDAH'),
('03', 'PULAU PINANG'),
('04', 'PERAK'),
('05', 'SELANGOR'),
('06', 'NEGERI SEMBILAN'),
('07', 'MELAKA'),
('08', 'JOHOR'),
('09', 'PAHANG'),
('10', 'TERENGGANU'),
('11', 'KELANTAN'),
('12', 'SARAWAK'),
('13', 'SABAH'),
('14', 'WILAYAH PERSEKUTUAN');

-- --------------------------------------------------------

--
-- Table structure for table `status_attendance`
--

CREATE TABLE `status_attendance` (
  `status_id` int(10) NOT NULL,
  `status_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_attendance`
--

INSERT INTO `status_attendance` (`status_id`, `status_name`) VALUES
(1, 'Attend'),
(2, 'Absence');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_ic` varchar(12) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `form_id` varchar(10) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  `state_id` varchar(10) NOT NULL,
  `g_id` varchar(6) NOT NULL,
  `s_age` int(2) NOT NULL,
  `s_nophone` varchar(10) NOT NULL,
  `s_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_ic`, `s_name`, `form_id`, `class_id`, `s_address`, `state_id`, `g_id`, `s_age`, `s_nophone`, `s_email`) VALUES
('001211106678', 'NUR HAKIM', '101', '1', 'NO12, KAMPUNG BARU', '12', '1', 13, '0199998888', 'amir@gmail.com'),
('021031108976', 'MOHD HARITH', '101', '1', 'NO12, TAMAN AGIHAN 3, PUCHONG', '01', '1', 13, '0178687760', 'harith@yahoo.com'),
('030102146694', 'MUHD ZULHAIRI', '102', '5', 'NO12, KAMPUNG BARU', '14', '1', 14, '0198786676', 'eri@gmail.com'),
('040109568973', 'DEVANANDAN', '105', '1', 'ARAS 7,BLOK C3, PUSAT PENTADBIRAN PERSEKUTUAN, 625', '14', '1', 17, '0134879256', 'devanandan@gmail.com'),
('040129125631', 'ZAIN AZRI HASHIM', '105', '3', '35, JALAN 16,  AMPANG JAYA,  68000 AMPANG,  SELANG', '05', '1', 17, '0132654987', 'zainazri@gmail.com'),
('040215055693', 'HAMEED JAGUBAR', '105', '1', '117, JLN. MASJID KAPITAN KELING, 10200 P PINANG', '03', '1', 17, '0168735615', 'hameed@gmail.com'),
('040228096513', 'YAZID ABD JALIL', '105', '4', '15-071, LORONG SEKOLAH KANAN 3D  DESA ANGGERIK  26', '09', '1', 17, '0168793210', 'yazid@gmail.com'),
('040305201685', 'FAIRUS ZAKARIA', '105', '4', 'LOT NO. 17, JALAN JELAWAI 1, PROTON CITY 4, 35900 ', '04', '1', 17, '0198634562', 'fairuszakaria@gmail.com'),
('040319085638', 'FADILLAH ISHAK', '105', '1', '70C, JALAN SUNGAI NIBONG BESAR, SUNGAI NIBONG, 119', '03', '2', 17, '0168735987', 'fadillahishak@gmail.com'),
('040403547863', 'HASAN ASRI', '105', '1', 'LOT 69 TAMAN KRISTAL,   SG PASIR, 08000 SG PETANI,', '02', '1', 17, '0157894659', 'hasanasri@gmail.com'),
('040418140987', 'FAHIZAM SABRI', '105', '4', '980 TAMAN AMAN, ANAK BUKIT  06550 ALOR STAR,  KEDA', '02', '1', 17, '0126543298', 'fahizam@gmail.com'),
('040516105497', 'JUFRI ARBAIN', '105', '2', 'NO 10,   PERSIARAN DAGANG, BANDAR SRI DAMANSARA,52', '14', '1', 17, '0157894981', 'jufri@yahoo.com'),
('040518145495', 'NASER ISHAK', '105', '3', 'NO45 JALAN KEMAJUAN, SEKSYEN 13, PETALING JAYA, SE', '05', '1', 17, '0167893546', 'naserishak@gmail.com'),
('040530058962', 'NOR SHAHIDA HAMID', '105', '4', 'N0.23-11, BLOCK B, SIGNATURE OFFICE,  THE BOULEVAR', '14', '2', 17, '0149861568', 'shahida@gmail.com'),
('040615069835', 'IBNU ABBAS KAMARUDIN', '105', '5', '6447-H, BANGUNAN MAIK, JALAN TELIPOT,  15150 KOTA ', '11', '1', 17, '0196543209', 'ibnuabbas@gmail.com'),
('040615149865', 'GHAZALI IBRAHIM', '105', '2', 'NO 112, 1ST FLR BLOCK A, DAMANSARA INTAN, NO 1 JLN', '05', '1', 17, '0168791645', 'ghazaliibrahim@gmail.com'),
('040702568149', 'MOHD ZAINOL RASALLI', '105', '5', 'NO 2158,JLN BSS 3/3E,  BANDAR SEREMBAN SELATAN,  7', '06', '1', 17, '0195463265', 'zainolrasalli@gmail.com'),
('040710143645', 'MUSTAKIM RASHID', '105', '2', '67 JLN 3/93, TMN MIHARJA, OFF JLN CHERAS, 55200 KL', '14', '1', 17, '0148768952', 'mustakim@gmail.com'),
('040825206589', 'RAMLAN MAT ZAIN', '105', '2', ' 6 JALAN 21,TAMAN BUKIT KUCHAI, BATU 8, JALAN PUCH', '05', '1', 17, '0198763459', 'ramlan@gmail.com'),
('040826086511', 'MOHD AIZAT ABD HALIM', '105', '5', 'NO 6, JALAN 8,  TAMAN DESA SENTOSA,  43100 HULU LA', '05', '1', 17, '0179845613', 'aizatperpisahan@gmail.com'),
('040905126548', 'AQILAH MUSTAFA', '105', '5', 'NO 147 JLN MANTAU INDAH 7  TAMAN MANTAU INDAH 1  7', '06', '2', 17, '0175643206', 'aqilahme@gmail.com'),
('040908105435', 'MOHD SHAFIQ', '105', '3', 'TKT 12,MENARA ANNEXE 1,  JALAN PANTAI BAHARU,  506', '14', '1', 17, '0123254879', 'shafiq@gmail.com'),
('041009565479', 'MD FENDY', '105', '3', '765 JALAN KOTA KENARI 4/5  KOTA KENARI 09000  KULI', '02', '1', 17, '0168795643', 'mdfendy@gmail.com'),
('041106082287', ' SYAZWAN ABDULLAH', '105', '3', 'VILLAGE 5 C-3-4-1,  UNIVERSITI TEKNOLOGI PETRONAS,', '04', '1', 17, '018789546', 'syazwan@gmail.com'),
('041215081693', ' MUHAMMAD MUZAFFAR OMAR', '105', '2', 'LOT 148,  JALAN HAJI SUPI,  KG SALAK TINGGI  43900', '05', '1', 17, '0173654987', 'muzaffar@gmail.com'),
('050109041821', 'SALLEH OMAR', '104', '1', 'NO.1112, LORONG SERAI SETIA 2/5, TAMAN SERAI SETIA', '02', '1', 16, '0147229120', 'sallehomar@gmail.com'),
('050109041849', 'AGUSALIM PAHARUDDIN', '104', '4', 'NO.77, JALAN MERANTI 6C/3 FASA 3, BANDAR UTAMA BAT', '05', '1', 16, '0156479846', 'agusalim@gmail.com'),
('050212053601', 'FAISAL YAHYA', '104', '4', '123 SEKOLAH IZZUDIN SHAH, JLN SULTAN AZLAN SHAH, 3', '04', '1', 16, '0129871546', 'faisalyahya@gmail.com'),
('050212053656', 'SITI FATIMAH HASHIM', '104', '1', '1112 LRG SERAI SETIA 2/5, TMN SERAI SETIA, 09400 P', '02', '2', 16, '0192837541', 'sitifatimah@gmail.com'),
('050312069925', 'WAN ARIFFIN JAAFAR', '104', '1', '15 LRONG 2, TAMAN BKT MAS, 34000 TAIPING', '04', '1', 16, '0109284721', 'wanariffin@gmail.com'),
('050312069955', 'HAMID MAT SAIN', '104', '5', ' 292 JALAN HARUAN 2,OAKLAND COMMERCIAL CENTRE, 730', '06', '1', 16, '0112328872', 'hamid@gmail.com'),
('050401140967', 'JOBRI JAUZI', '104', '5', 'KONDO MAHAL, TKT 7, MENARA PGRM, NO 8, JALAN PUDU,', '14', '1', 16, '0198761235', 'jobrihebat@yahoo.com'),
('050401144573', 'YUSOFF MOHAMAD', '104', '1', '17 JLN CERDIK 5, TAMAN UNIVERSITI, 43000 BANGI, SE', '05', '1', 16, '0162839856', 'yusoffmohamad@yahoo.com'),
('050505101223', 'ROZAIRI MUHAMMAD', '104', '1', '69 JLN CECAWI 6/27, KOTA DAMANSARA, 47810 P JAYA, ', '05', '1', 16, '0192837412', 'rozairihaha@gmail.com'),
('050613169568', 'ZAKARIAH SHAARI', '104', '2', '621 JLN BDR PUTERI JAYA, BDR PUTERI JAYA, 08000 SU', '02', '2', 16, '0109293457', 'zakariah@gmail.com'),
('0507181622', 'RUHANA AHMAD', '104', '5', 'NO.15, JLN. 3/4, TMN. SRI INDAH, 43200, BALAKONG,S', '05', '2', 16, '0100928734', 'ruhanaahmad@gmail.com'),
('050718176535', 'ZAKARIA SHAFFIE', '104', '2', '54, JALAN PJS 10/28, BANDAR SRI SUBANG, 46000 PETA', '05', '1', 16, '0176253829', 'zakaria@gmail.com'),
('050824103461', 'ZAULKIFLEE JAAFAR', '104', '3', '621, JLN BANDAR PUTERI JAYA 3/8 SEKSYEN 3, BANDAR ', '02', '1', 16, '0147563856', 'zaulkiflee@gmail.com'),
('050912082356', 'ZUBAIDAH CHE EMBEE', '104', '3', 'PLOT 110, KG TERSUSUN SG ARA, 11900 P PINANG', '03', '2', 16, '0172738325', 'zubaidah@gmail.com'),
('050917102863', 'ZULKIFLI AHMAD', '104', '3', '25 JLN PENANG FREE, 11600 P PINANG', '03', '1', 16, '0129356473', 'zulkiflingehh@gmail.com'),
('051026082846', 'ZUROLAINIE MOHD DIYAR', '104', '3', '27 LALUAN TASIK TIMUR, 16A GERBANG BERCHAM SELAMAT', '04', '1', 16, '0162537291', 'zurolainie@gmail.com'),
('051104107152', 'ADIDA AZIZ', '104', '4', 'UiTM CAWANGAN PERAK, KAMPUS SRI ISKANDAR, 32600 BO', '04', '2', 16, '0192368745', 'adidaaziz@gmail.com'),
('051209073561', 'ADNAN HAMIDON', '104', '4', '12 JLN 2A/27A, SEKSYEN 1, BANDAR WANGSA MAJU, 5330', '14', '1', 16, '0171290805', 'adnanhamidon@gmail.com'),
('060112081697', 'ROSLAN RAMLI', '103', '1', 'RPM 93 QUARTERS MADA, TITI HJ IDRIS, 06500 LANGGAR', '02', '1', 15, '0171689546', 'roslanramli@gmail.com'),
('060123067656', 'PATHIYAH HJ BILAL', '103', '4', '219 PERMATANG BERTAM, 13200 KEPALA BATAS', '03', '2', 15, '0160972654', 'phatiyah@gmail.com'),
('060211094711', 'RIDZUAN ISMAIL', '103', '4', '97, LEBUH NIPAH 3, SG NIBONG, 11900 BAYAN TERLEPAS', '06', '1', 15, '0120983876', 'ridzuan@gmail.com'),
('060211094789', 'SHUKOR MAHAMUD', '103', '1', '2881,JALAN TRIANG,28000 TEMERLOH,PAHANG', '09', '1', 15, '0164832986', 'shukormahmud@gmail.com'),
('060309132091', 'ZOHDI ABD HAMID', '103', '1', '20 JLN 3/16A, BANDAR BARU SELAYANG, 68100 BT CAVE,', '05', '1', 15, '0102379816', 'zohdihamid@gmail.com'),
('060309132123', 'ROMLI MOHAMAD', '103', '4', 'NO. 25, PERSIARAN KIKIK SATU, TAMAN INDERAWASIH, 1', '13', '1', 15, '0102876543', 'romlihehe@gmail.com'),
('060428105814', 'ROSIDA MOHD SAINEE', '103', '5', 'NO 7 PERSIARAN PERPADUAN 7, TAMAN PERPADUAN, 31150', '07', '2', 15, '0109875643', 'rosidasainee@yahoo.com'),
('060428105892', 'NOOR HALIZAH', '103', '1', 'BLOK A1-04 DESA CEMARA, PERSIARAN SEMBILANG, 13700', '05', '2', 15, '0120986745', 'noorhalizah@gmail.com'),
('060511029746', 'SYELA MOHD', '103', '2', '13, JALAN BUNGA MELOR 14, TAMAN MUDA, 56100 KL', '14', '2', 15, '0179283476', 'syelamohd@gmail.com'),
('060511029789', 'ROSLAN AZIZ', '103', '5', 'NO. 33 JALAN TSJ 20 TAMAN SRI JELOK, 43000 KAJANG', '05', '1', 15, '0160347654', 'roslan@yahoo.com'),
('060603187813', 'AZMI HASHIM', '103', '2', '187 JLN CENDERAWASIH 10, TMN SHAHAB 2, JLN LANGGAR', '02', '1', 15, '0167229110', 'azmihashim@gmail.com'),
('060603187827', 'ROSLI SAAD', '103', '5', '18 KONDO BUKIT JAMBUL, PAHANG', '09', '1', 15, '0102917492', 'roslisaad@gmail.com'),
('0607181688', 'ZAINAL HJ ZAINON', '103', '2', '5526 JLN TANGKI AIR, BUKIT PAK SABAH, 23000 DUNGUN', '10', '2', 15, '0169821876', 'zainal@gmail.com'),
('060814091818', 'SALBIAH IBRAHIM', '103', '5', 'NO 886 TKT PERWIRA 1, TMN WIRA, 13050 BUTTERWORTH', '03', '2', 15, '0183649875', 'salbiah@gmail.com'),
('060814091826', 'NORAINI ABU SAMAH', '103', '2', 'LOT 51 JLN 11/1 KG MELAYU KEPONG, 52100 KL', '14', '2', 15, '0150985678', 'noraini@yahoo.com'),
('060929141256', 'NORIZAN OSMAN', '103', '2', '1712 LRG E4, TMN SATRIA JAYA, BDC, 93350 KUCHING, ', '12', '2', 15, '0170432987', 'norizan@yahoo.com'),
('061009140908', 'NORSHIMAH ABDUL RAHMAN', '103', '3', '6, JALAN MADRASAH, RAPAT SETIA, 31350 IPOH, PERAK', '04', '2', 15, '0182378654', 'norshimah@yahoo.com'),
('061010049013', 'LUFFY MARZUKI', '103', '1', '6-8-7, GUGUSAN DEDAP SEKSEYN 11, KOTA DAMANSARA 68', '05', '1', 15, '0167229180', 'monekydluffy@gmail.com'),
('061103169866', 'NUNGSARI AHMAD RADHI', '103', '3', '16 LORONG KENARI 9, DESARIA SG ARA,,11900 BAYAN LE', '03', '2', 15, '0190923458', 'nungsari@gmail.com'),
('061209142979', 'OMAR HJ AHMAD', '103', '4', '6490 PERMATANG BERTAM, 13200 KEPALA BATAS, S PERAI', '03', '1', 15, '0198763456', 'omarahmad@gmail.com'),
('061214183678', 'NURULAZMI ZAINI', '103', '3', '58, JLN.USJ 4/1K, KAMPUNG SG KARAT, KELANTAN', '11', '2', 15, '0169353675', 'nurulazmi@gmail.com'),
('070115087113', 'HARITH OTHMAN', '102', '1', '14 JLN UP 3/4, UKAY P[ERDANA, 68000 AMPANG, SELANG', '05', '1', 14, '0112328128', 'harith@yahoo.com'),
('070115087164', 'FATIMATUZZAHARAH', '102', '1', '105, JLN LEGENDA 14,LAGENDA HEIGHTS, S.PETANI', '02', '2', 14, '0167229109', 'fatimah@gmail.com'),
('070129119802', 'JAMILAH HASSAN', '102', '3', '27 PERSIARAN BLM3 , BNDR LAGUNA, 08000 KEDAH', '02', '2', 14, '0112328869', 'jamilahcantik@gmail.com'),
('070212091813', 'HARUN YAHAH', '102', '2', '41 , JLN PISANG NANGKA , KG MELAYU, AIR ITAM, P PI', '03', '1', 14, '0187261234', 'harun@yahoo.com'),
('070219105646', 'HUSNA AHMAD', '102', '2', 'NO 46 JALAN WANGSA PERKASA 7, WANGSA MELAWATI, 533', '14', '2', 14, '0167229112', 'husna@yahoo.com'),
('070230091097', 'HASHIM ALIAS', '102', '2', 'NO 19, TAMAN SERI TENGGARA, 34200 PARIT BUNTAR', '04', '1', 14, '0147229116', 'hashimalias@gmail.com'),
('070230091802', 'KHADIJAH PUTEH', '102', '4', '97, LEBUH NIPAH 3, SG NIBONG, 11900 BAYAN LEPAS, P', '03', '2', 14, '0151237654', 'khadijah@gmail.com'),
('070230091813', 'NAZARI OTHMAN', '102', '5', '4, LRG 18, TAMAN MARKISAH, BUKIT MINYAK, 14000 BUK', '03', '1', 14, '0159379876', 'nazariothman@gmail.com'),
('070230091875', 'chopper', '101', '4', '6-4-7, seksyen 11 gugusan dedap, kota damansara 68', '10', '1', 13, '0167229180', 'chopper@gmail.com'),
('070415089884', 'FADILLAH  ISHAK', '102', '1', 'NO 2, LRG MACHANG BUBUK 4,TAMAN MACHANG BUBUK,1402', '03', '2', 14, '0196785456', 'fadillah@gmail.com'),
('070526071409', 'ISMAIL ABDULLAH', '102', '3', '1198 ,KUARTERS MAKTAB PERGURUAN TUANKU BAINUN , ME', '02', '1', 14, '0187265416', 'ismail@yahoo.com'),
('070526071445', 'ABDUL RAHIM', '102', '3', '79 LG 29, TAMAN PATANI JAYA, 08000 SG PETANI, KEDA', '02', '1', 14, '0135628787', 'abdulrahim@gmail.com'),
('070526071457', 'HUSNI ABD HADI', '102', '3', '22 JLN MAWAR 7, TAMAN MAWAR, 81700 PASIR GUDANG, J', '08', '1', 14, '0139807060', 'husnihadi@gmail.com'),
('070608075678', 'JESLI MAT', '102', '4', 'BANDAR SRI DAMANSARA , KL', '14', '2', 14, '0129827657', 'jesli@gmail.com'),
('070908137527', 'MOHAMMAD NAIM YAAKUB', '102', '5', '175 JLN TUJU/3A SEK 7, 43650 BANDAR BARU BANGI, SE', '05', '1', 14, '0150128765', 'naimyaakub@gmail.com'),
('070908137545', 'KADER MYDIN', '102', '4', '83, JLN JEJAWI, BKT BANDARAYA, BANGSAR, 59100 KL', '14', '1', 14, '0156271809', 'mydin@yahoo.com'),
('071009140902', 'MANISAH AHMAD', '102', '5', '87 LROG MERBOK, TMN BAHAGIA, 14300 NIBONG TEBAL, S', '03', '2', 14, '0196785603', 'manisah@gmail.com'),
('071009140936', 'LATIFAH ABD KARIM', '102', '4', 'BLOK 86-3-6, FLAT BT LANCANG, 11600 P PINANG', '03', '2', 14, '0129873456', 'latifahkarim@gmail.com'),
('071012105678', 'AHMAD SAZALI', '102', '1', 'NO12, KAMPUNG BATU PAHAT', '10', '1', 14, '0129087767', 'sazali@gmail.com'),
('071129100907', 'IZHAR TAJUDDIN', '102', '5', 'S35, JALAN PANTAI, TANJUNG PIANDANG, 34250 PARIT B', '04', '1', 14, '0132098765', 'izhartajuddin@gmail.com'),
('071208209187', 'MAMAT KHALID ', '102', '1', 'No. 510, Jalan Anggerik 4, Taman PD Utama, 71000 P', '06', '1', 14, '0123248239', 'mamat@gmail.com'),
('071209041197', 'HASRI IBRAHIM', '102', '2', '16 JALAN P9G/3, PRESINT 9, 62250 PUTRAJAYA', '14', '1', 14, '0167229190', 'hasriibrahim@gmail.com'),
('080115086604', 'FATIMAH ABDUL RAHIM', '101', '5', 'NO 1,JALAN PINGGIRAN 3/9, PINGGIRAN BATU CAVES, 68', '05', '2', 13, '0199871234', 'fatimahrahim@gmail.com'),
('080115086625', 'ABUJA ', '101', '1', 'JKR 641, KLINIK KESIHATAN KUBANG SEMANG 14400 BUKI', '03', '1', 13, '0112328772', 'abuja@yahoo.com'),
('080115086627', 'AMIR DANIEL', '101', '1', '6-4-7, seksyen 11 gugusan dedap, kota damansara 68', '05', '1', 13, '0196785642', 'abuja@yahoo.com'),
('080203086147', 'RAHMAN RADZI', '101', '1', 'C-6 FASA 1D1  32040 SERI MANJONG,  PERAK', '04', '1', 13, '0187265422', 'rahmanradzi@gmail.com'),
('080206147711', 'SUBRAMANIAM', '101', '5', '12.JALAN KELANTAN, BUKIT PERSEKUTUAN, 50480 KL', '14', '1', 13, '0196785602', 'subramaniam@gmail.com'),
('080206147769', 'SAZALI SAMAD', '105', '4', 'Paras 20, Kompleks Tun Abdul Razak (KOMTAR) 10503 ', '03', '1', 17, '0187265432', 'sazaligreat@gmail.com'),
('080415080901', 'AZHARI AHMAD', '101', '4', 'PT 2627 KAMPUNG TERSUSUN KELEDANG UTAMA FASA 13110', '04', '1', 13, '0112328870', 'azhari@gmail.com'),
('080415080914', 'ARJUNAIDI JAMALUDDIN', '101', '4', '	 19 JLN SUASANA 4/3A, BANDAR TUN HUSSEIN ONN, 432', '14', '2', 13, '0187321354', 'arjunamu@yahoo.com'),
('080415086609', 'ADNAN HAMIDAH', '101', '3', 'B-1-12 VISTA WIRA 2, SEKSYEN 2, WANGSA MAJU, 53300', '14', '2', 13, '0147229108', 'adnansempit@gmail.com'),
('080415086624', 'ZORRO D. HAWK', '105', '1', 'Jeriji U8/76, Bukit Jelutong, Seksyen U8, 40150 Sh', '05', '1', 17, '0147229187', 'zorro@gmail.com'),
('080415086627', 'ABUJA ', '101', '2', '0-0, LEAF VILLAGE KONOHA, BANDAR ALAM SENTRAL 7192', '02', '1', 13, '0187265437', 'abuja@yahoo.com'),
('080415086631', 'KADIR MANSURI', '101', '2', '67, JALAN MAMANDA 13TAMAN DATO\' AHMAD RAZALI,68000', '05', '1', 13, '0147229209', 'kadir@gmail.com'),
('080415086633', 'ABD RAHIM', '101', '1', 'NO 11 JLN 2/20E BDR BARU SELAYANG 68100 BT CAVES S', '05', '1', 13, '0187321311', 'rahim@yahoo.com'),
('080415086639', 'HALIM HUSSEIN', '101', '2', '22, LORONG RUMBIA  2, 11900 SUNGAI NIBONG, P PINAN', '03', '1', 13, '0112328824', 'halim@gmail.com'),
('080415086688', 'SABRINA TAHA', '101', '3', '10 JLN ATHINAHAPAN 7, TMN TUN 6000, KL', '14', '2', 13, '0112328878', 'sabrina@yahoo.com'),
('080415126613', 'ANUAR IBRAHIM', '101', '3', '888 MUKIM 9, SG DUA, 13800 BUTTERWORTH', '03', '1', 13, '0187321309', 'anuaribrahim@yahoo.com'),
('080419086602', 'AZILA ISMAIL', '101', '5', '6 LRG SERI IMPIAN 6/2 , TMN SERI IMPIAN , ALMA , B', '03', '2', 13, '0196785611', 'azilaismail@gmail.com'),
('080602109807', 'SHAHIRA AISYAH', '101', '2', '12, TAMAN BATANG 10, BATU PAHAT', '08', '1', 13, '0193211023', 'ira@gmail.com'),
('080914159897', 'AZMAI ISHAK', '101', '5', '451-G ,SG TIRAM , 11900 B.LEPAS  PULAU PINANG', '03', '1', 13, '0147229154', 'azmiishak@gmail.com'),
('081101098964', 'CHE NORIAH', '101', '5', '26, JLN FAJAR, TAMAN FAJAR, 14300 NIBONG TEBAL, SB', '02', '2', 13, '0112328871', 'noriah@yahoo.com'),
('081209109191', 'sanji', '101', '3', 'sdjksajdglasjgasjfSH;KSHF;AKSDHF', '05', '1', 13, '0147229187', 'sanji@gmail.com'),
('091009121234', 'QAMARINA SHAHNAS', '103', '3', '12, APARTMENT SHAMELIN2, CHERAS', '05', '2', 14, '0198897812', 'rina@yahoo.com'),
('091105068543', 'LEE CHONG WEI', '104', '5', 'NO 920, LORONG GELANGGANG  PETAK 32010, PUTRAJAYA', '14', '1', 16, '0167229556', 'leechongwei@gmail.com'),
('091209026643', 'ZAKI HADRI', '104', '3', 'NO2, JALAN BATU BATA, ALAM BUDIMAN 42300, KUALA SE', '05', '1', 16, '0133876542', 'zakihebat@gmail.com'),
('091229059302', 'ADAWIYYAH ABU HAMID', '104', '2', 'No. 336, Jalan Sri Pagi 7, Taman Sri Pagi, Senawan', '06', '2', 16, '0112328876', 'addahoho@gmail.com'),
('100219201928', 'ROSMAH NAJIB', '103', '5', '2-3-4, APARTMENT BAJET 2/20, BANDAR SERI KAYANGAN ', '03', '2', 15, '0112284567', 'rosmahhaha@gmail.com'),
('101010049129', 'SYAKIRAH MAHMUD', '103', '3', '5-4-3, TINGKAT 2 BLOK 6, ANGPASAPURI DAMAI 45390, ', '10', '2', 15, '0187229132', 'syakirah@gmail.com'),
('101208209166', 'MIRA SYAZWANI', '101', '2', ' Lot 842-1 Batu 7 1/2 Kampung Paya Rumput, Melaka', '07', '2', 13, '012324864', 'syazwanimira@gmail.com'),
('110328107157', 'RAGAMAN MASDO', '104', '5', ' No. 28 Jalan Kelabu 7, Taman Pelangi, 80400 Johor', '08', '1', 16, '0192837482', 'masdohebat@gmail.com'),
('110918067151', 'SAKURA SASUKE', '102', '2', '0-0, LEAF VILLAGE KONOHA, BANDAR ALAM SENTRAL 7192', '02', '2', 14, '016238190', 'sakura@gmail.com'),
('110929107563', 'AZHAD ZAHURIN', '102', '3', 'Tingkat 1, Wisma Sri Pahang 25503 Kuantan, PAHANG', '09', '1', 14, '0156271872', 'azhadcool@gmail.com'),
('111011041233', 'CHONG WEI FENG', '102', '4', 'Bukit Tembaga. Felda Bukit Tembaga, 06300 Kuala ', '02', '1', 14, '0109274835', 'chongwei@gmail.com'),
('120103187493', 'LIN DAN', '103', '4', 'HILTON PARK, ATAS BUKIT 50560 BUKIT AMAN KUALA LUM', '14', '1', 15, '0173745677', 'superdan@yahoo.com'),
('120304147433', 'NAMI VENNAJA NATRA', '101', '4', '4, Jln Kebangsaan 71, Taman Universiti, 81300 Skud', '08', '1', 13, '0187321363', 'namixsanji@yahoo.com'),
('120722104576', 'FAKIRAH ABD SAMAH', '101', '3', 'NO.22 TAMN RAUB JAYA 6 27600 Raub', '09', '2', 13, '0135628721', 'fakirah@gmail.com'),
('120918067482', 'NORAZLINA  ABD.AZIZ', '105', '5', 'Lot 1621, Jln Teluk Buih, Kg Air Papan, 86800 Mers', '08', '2', 17, '0127575336', 'azlina@gmailcom'),
('121208229143', 'SHAMALAN MURUGAYA', '104', '2', '17, JALAN JELAWAI 1, PROTON CITY 4, 35900 TANJUNG ', '04', '1', 15, '012324864', 'syazwanimira@gmail.com'),
('1234', 'zzz', '104', '4', 'sdjksajdglasjgasjfSH;KSHF;AKSDHF', '02', '1', 13, '0196785643', 'zzz@gmail.com'),
('130617182918', 'SALAWATI ROSYAMSUL', '104', '2', 'Tingkat Bawah Blok 2, Kompleks Kota Darulnaim, 155', '11', '2', 16, '012930392', 'salawati@yahoo.com'),
('131203089672', 'PANDALELA RENONG', '101', '4', 'NO234, JALAN AQUATIK DALAM, TERJUN SITU KOLAM 3870', '14', '2', 13, '0145067891', 'pandalela@gmail.com'),
('FGHJK', '3456789', '101', '3', 'cengal', '01', '1', 14, '5432', 'FDSA');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_ic` varchar(12) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_address` varchar(50) NOT NULL,
  `state_id` varchar(50) NOT NULL,
  `educationID` varchar(15) NOT NULL,
  `t_nophone` varchar(10) NOT NULL,
  `g_id` varchar(6) NOT NULL,
  `form_id` varchar(10) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `t_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_ic`, `t_name`, `t_address`, `state_id`, `educationID`, `t_nophone`, `g_id`, `form_id`, `class_id`, `t_email`) VALUES
('123', 'AHMAD KHUSAIREE', 'NO12, PEKAN ARAU', '03', '103', '0194567777', '1', '102', '4', 'khusairee@gmail.com'),
('660913102344', 'MOHD ZAIN', 'KAMPUNG MELAYU SUBANG ', '05', '103', '0123456678', '1', '102', '3', 'zain@gmail.com'),
('661012087987', 'SITI AMINAH', 'KAMPUNG MELAYU, BANDAR HILIR ', '07', '102', '0193321010', '2', '102', '2', 'minah@gmail.com'),
('675110121031', 'SHARIFAH LAILEE', 'LOT 23, KAMPUNG MUTIARA, PARIT EMPAT, BATU PAHAT ', '08', '103', '0193215576', '2', '101', '1', 'sharifah@gmail.com'),
('771021871123', 'NIK AMALINA', 'NO 17, BANDAR BARU AMPANG ', '05', '103', '0123432212', '2', '103', '4', 'nik@gmail.com'),
('771022108756', 'AHMAD SAMAD', 'NO12, TAMAN JAHID, KAMPUNG BARU ', '01', '101', '0128976654', '1', '101', '2', 'samad@yahoo.com'),
('771031079786', 'MUHD ZULAINI', 'KAMPUNG MELAYU 3, BANDAR HILIR ', '07', '103', '0193985567', '1', '103', '1', 'laini@gmail.com'),
('771031778567', 'JAMILAH ', 'LOT 23, KAMPUNG SUNGAI SEKAMAT ', '05', '103', '0197864450', '2', '104', '2', 'milah@gmail.com'),
('7714107890', 'LATIFATUL ATILAH', 'TAMAN SRI NANDING, HULU LANGAT ', '05', '102', '0123321111', '2', '104', '5', 'lati@yahoo.com'),
('776908107789', 'NUR SYAHIRAH', 'KAMPUNG MELATI, ALOR GAJAH ', '07', '104', '0193238890', '2', '101', '3', 'syira@gmail.com'),
('781001086678', 'NUR SYAMIMI', 'NO 21, JALAN UTAMA 16 ', '05', '104', '0193217789', '2', '105', '2', 'mimi@yahoo.com'),
('781011981022', 'MOHD AIMAN', 'JALAN 2, TAMAN SIMPANG 2 ', '06', '102', '0189907654', '1', '105', '4', 'aiman@gmail.com'),
('781012110978', 'MOHD ALI', 'NO 12, JALAN SIMPANG KECIL, PARIT 2 ', '01', '101', '0178909011', '1', '101', '4', 'alimohd@yahoo.com'),
('781071211012', 'AININ DAMIA', 'LOT 4626, HULU LANGAT ', '05', '104', '0193239685', '2', '105', '3', 'ainindamia@gmail.com'),
('781088979045', 'AMIR SULAIMAN', 'NO12, JALAN SEMENYIH 2 ', '05', '102', '0189085567', '1', '103', '5', 'amir@gmail.com'),
('789010675432', 'ASYRAFMAHMUD', 'TAMAN UDACO 3, HULU LANGAT ', '05', '103', '0178966654', '1', '104', '1', 'acap@gmail.com'),
('801021085676', 'SITI SARAH', '122, JALAN SEMENYIH 3 ', '05', '102', '0187789900', '2', '105', '1', 'sarah@yahoo.com'),
('890319041423', 'SYAMSUDIN AHMAD BIN ', 'Gerai Bumiputera Lrg Empat 90000, Sandakan Sandaka', '13', '103', '0128975136', '1', '103', '3', 'syam@gmail.com'),
('891121106700', 'NIK MOHAMAD AMRAN', 'NO12, KAMPUNG MELAYU KAJANG ', '05', '103', '0192238907', '1', '104', '3', 'nik@gmail.com'),
('901031107789', 'NUR ZULAIKHA', 'SEKSYEN 7, SHAH ALAM ', '05', '103', '0196754456', '2', '103', '2', 'ika@gmail.com'),
('930119129876', 'NADHIRAH BINTI BAKAR', 'No. 12, Jalan Bonus 23/7, Seksyen 23, 40300 Shah A', '05', '103', '0167830980', '2', '102', '1', 'ira_wowersz@gmail.com'),
('940302208198', 'HINATA NARUTO', 'No. 2A, Jalan Jubil Perak 22/1, Seksyen 22, 40300 ', '05', '105', '0171281893', '2', '101', '5', 'hinatanaruto@gmail.com'),
('951009107151', 'TOAK BIN UZUMAKI', 'no24, lorong mahkota impian 2/16, bandar puncak al', '05', '102', '0133329353', '1', '104', '4', 'toak@gmail.com'),
('970916141074', 'KHALEEDA ZAIDI', '8-13, jalan batu mertajam 4/1, tasik temerloh 7281', '11', '104', '0119832457', '2', '105', '5', 'khaleeda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password1` varchar(10) NOT NULL,
  `password2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password1`, `password2`) VALUES
('damia123', 'damia', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_event`
--
ALTER TABLE `attendance_event`
  ADD KEY `s_ic` (`s_ic`,`class_id`,`form_id`,`status_id`,`ev_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`educationID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`fam_id`),
  ADD KEY `s_ic` (`s_ic`) USING BTREE;

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `history_event`
--
ALTER TABLE `history_event`
  ADD PRIMARY KEY (`hev_id`);

--
-- Indexes for table `history_student`
--
ALTER TABLE `history_student`
  ADD PRIMARY KEY (`hs_ic`),
  ADD KEY `form_id` (`form_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `g_id` (`g_id`);

--
-- Indexes for table `history_teacher`
--
ALTER TABLE `history_teacher`
  ADD PRIMARY KEY (`ht_ic`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `educationID` (`educationID`),
  ADD KEY `g_id` (`g_id`),
  ADD KEY `form_id` (`form_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`hr_id`),
  ADD UNIQUE KEY `p_id` (`p_id`),
  ADD UNIQUE KEY `state_id` (`state_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `status_attendance`
--
ALTER TABLE `status_attendance`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_ic`),
  ADD KEY `form_id` (`form_id`,`class_id`,`state_id`,`g_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_ic`),
  ADD KEY `form_id` (`form_id`),
  ADD KEY `g_id` (`g_id`) USING BTREE,
  ADD KEY `educationID` (`educationID`) USING BTREE,
  ADD KEY `state_id` (`state_id`) USING BTREE,
  ADD KEY `class_id` (`class_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ev_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `fam_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `hr_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
