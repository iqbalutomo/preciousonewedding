-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 06:25 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thepreciousonewedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `image_loc` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `judul`, `cover_image`, `image_loc`, `type`, `konten`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
('1010839078', 'Tips Agar Pernikahan Kamu Memorable', 'image-5bc8afae965894_25343053.jpg', 'uploads/blog/wedding-ideas/blog-4', '2', '<p>Lorem ipsum dolor sit amet, vis equidem ceteros ut, ne doctus omnesque nam. Eu nec ignota docendi fierent, tota movet molestie cu est, duo at platonem definiebas. Consulatu definitionem usu ut, altera reprehendunt nam in. Vel causae reprimique an. Adhuc consectetuer sit te, eam tota omnium accommodare at.&nbsp;<br><br>Quis stet ex nam, no eripuit numquam omittantur qui. Tractatos explicari mediocritatem ut pro, et mea prima fugit accusam, ne his accusata convenire persecuti. Eu est omnesque adipiscing, propriae reprimique scripserit sea at, eam laboramus voluptatum ei. Quo at eius molestie.&nbsp;<br><br>Nam mucius blandit torquatos ei, sit postea omittam ad, ut malis dolorum sit. Ex duis tempor discere per, no lorem omnesque deserunt his, duo ne dictas discere constituam. In dolores gloriatur cum. Pri audiam praesent ad. Duo aeque intellegat ea, ius apeirian volutpat ad. Cum in omittam scaevola consectetuer, eu tation doming denique nam.&nbsp;<br><br>Vix ea lorem meliore fastidii. Congue voluptua pri eu. Atqui viris patrioque ex quo, civibus pertinax vulputate pro ei. Ne eos atqui insolens, cu cum atqui vituperata, est ad copiosae officiis.&nbsp;<br><br>Pri delicata interesset deterruisset ex, sonet possim legimus ea pro. Vel diam honestatis no. Ei pri hinc graeci eruditi, ex sit accusam corpora ocurreret, esse civibus euripidis pri ut. Munere discere nec id. Graece ignota ne vis, an eos illum partem vituperata. Mei at tibique suscipiantur, ne quis legimus voluptatibus pri. Sanctus singulis efficiendi ex eam, velit tation perpetua cu sit, pro te solet ocurreret iracundia.&nbsp;<br><br>Sea cu graeci essent, his ad corrumpit dissentias. Partiendo reprimique sadipscing ea sea, ea sea omnesque probatus antiopam. Te nulla movet convenire duo, ridens propriae expetendis ut duo, an primis sadipscing vix. No alii novum dissentias mei, odio aliquip et nam. Mea eu summo philosophia, qualisque dissentias id sed.&nbsp;<br><br>Vocent minimum dolores eu nam. Affert soleat scribentur an quo. Sit ne volumus temporibus, iusto vocent id mel, his cu veniam vidisse. Novum veritus constituam cum in, ei mea impetus accommodare philosophia.&nbsp;<br><br>Has saepe vitae torquatos no, ut nostrud sapientem mea. Ea vis dicunt viderer, molestie euripidis intellegat cum te, mel ei erant graecis. Agam mollis est eu. Nulla paulo viderer ne ius, id per nonumy suscipiantur. Ad sumo malorum duo, eam doctus delenit fierent ex, eripuit graecis ex nam. Vel et albucius fabellas maluisset.&nbsp;<br><br>Aeque adipisci prodesset nam in. At audiam accusamus vituperata has, no affert nonumy accusata sit. Et ipsum perpetua eam, at graeci omnesque epicurei sed. Usu id nobis nostro epicurei. Nullam scriptorem reformidans quo at, minimum apeirian accommodare eos ex, stet scriptorem ea pri.&nbsp;<br><br>Ei quodsi regione pri, per agam brute pertinacia et, mei te utamur suavitate. Quo ei facer equidem fastidii, et posse saperet sea. Tota lorem appetere nec id. His ex choro impedit concludaturque.</p>', '2018-10-18 23:07:10', 'master', '2018-10-18 23:07:10', 'master'),
('650154726', 'Post Preparation', 'image-5bc88e93ba6ce2_07805987.jpg', 'uploads/blog/wedding-preparation/blog-1', '1', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p>', '2018-10-18 20:45:55', 'master', '2018-10-18 20:45:55', 'master'),
('938768801', 'Travel 1', 'image-5bc89b58668ce0_01773112.jpg', 'uploads/blog/honeymoon-travel/blog-3', '3', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p>', '2018-10-18 21:40:24', 'master', '2018-10-18 21:40:24', 'master'),
('949170739', 'Siap 2', 'image-5bc89a3773e408_78756243.jpg', 'uploads/blog/wedding-preparation/blog-2', '1', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae aspernatur ipsam accusantium pariatur nemo quod eveniet sapiente ea non, quia incidunt minus. Sequi laborum soluta facere fugiat laboriosam autem.</p><p>&nbsp;</p>', '2018-10-18 20:46:54', 'master', '2018-10-18 21:35:52', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `deadline` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `working_time` varchar(255) NOT NULL,
  `qualification` text NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `job_name`, `deadline`, `location`, `working_time`, `qualification`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(10, 'Back-end Web Administrator', 'Oct 31, 2018', 'Location 4', 'Part-time', '<ol><li>mySQL</li><li>PHP</li><li>JS</li><li>AJAX</li><li>Cassandra.</li><li>Drupal.</li><li>CodeIgniter</li><li>Laravel</li></ol>', '<ol><li>sda31r1wd</li><li>asd</li><li>asd</li><li>asd</li><li>asd</li></ol>', '2018-10-09 20:01:21', 'master', '2018-10-09 20:01:21', 'master'),
(11, 'asd', 'asd', 'asd', 'Full-time', '<ol><li>asdasd</li><li>asdasd</li><li>asdasd</li><li>asdas</li><li>dasd</li></ol>', '<ol><li>asdasd</li><li>asdasd</li><li>asdasd</li><li>asdasd</li></ol>', '2018-10-13 16:35:02', 'master', '2018-10-13 16:35:02', 'master'),
(12, 'rsxasf', 'Oct 17, 2018', 'ggwedsasf', 'Full-time', '<ol><li>asdasdasd</li><li>asdasd</li><li>asdasd</li><li>asdasd</li><li>asdasd</li></ol>', '<ol><li>asdasd</li><li>asdasd</li><li>asdasd</li><li>asdasd</li></ol>', '2018-10-14 13:01:41', 'master', '2018-10-14 13:01:41', 'master'),
(13, 'Front End Web', 'Oct 31, 2018', 'Lokasi 4', 'Part-time', '<ol><li>PHP</li><li>Phyton</li><li>AngularJS</li><li>ReactJS</li><li>HTMLDOM Element.</li></ol>', '<ol><li>Working at Site.</li><li>Free Lunch.</li></ol>', '2018-10-17 18:27:10', 'master', '2018-10-17 18:27:10', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `wedding_date` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `testimonial` text NOT NULL,
  `embed_youtube` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `image_loc` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_name`, `wedding_date`, `lokasi`, `testimonial`, `embed_youtube`, `cover_image`, `image_loc`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
('1065313250', 'fsdgrh2rt2', 'Oct 13, 2018', 'saveh3re2', 'fbetrher13t', 'https://www.youtube.com/embed/Wm9YrKhMLjA', 'image-5bc35c30afe4b0_90479052.jpg', 'uploads/clients/Client-2', '2018-10-14 22:09:36', 'master', '2018-10-14 22:09:36', 'master'),
('1252915705', 'dtwqfqefq', 'Oct 27, 2018', 'rgsqds', 'safascasas', 'https://www.youtube.com/embed/Wm9YrKhMLjA', 'image-5bc35addceda92_92755578.jpg', 'uploads/clients/Client-1', '2018-10-14 22:03:57', 'master', '2018-10-14 22:03:57', 'master'),
('1436254398', 'Leon & Ada', 'Oct 25, 2018', 'Raccoon City', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium nam voluptates et! Alias fugiat quibusdam iste repudiandae accusamus. Nam commodi aperiam aliquid magnam, blanditiis laudantium quos sit quaerat minus.', 'https://www.youtube.com/embed/Wm9YrKhMLjA', 'image-5bc35cdc4a6f87_41499621.jpg', 'uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-15 23:24:54', 'master'),
('1630614354', 'Sinta & Santo', 'Oct 12, 2018', 'Lokasi 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium nam voluptates et! Alias fugiat quibusdam iste repudiandae accusamus. Nam commodi aperiam aliquid magnam, blanditiis laudantium quos sit quaerat minus.', 'https://www.youtube.com/embed/U900Q4Ok5DY', 'image-5bc35cf69353f0_30643250.jpg', 'uploads/clients/Client-6', '2018-10-14 22:12:54', 'master', '2018-10-15 23:23:18', 'master'),
('1743092802', 'Charles & Diana', 'Oct 01, 2018', 'Lokasi 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium nam voluptates et! Alias fugiat quibusdam iste repudiandae accusamus. Nam commodi aperiam aliquid magnam, blanditiis laudantium quos sit quaerat minus.', 'https://www.youtube.com/embed/Wm9YrKhMLjA', 'image-5bc721e0bc7f09_82159642.jpg', 'uploads/clients/Client-4', '2018-10-14 22:11:56', 'master', '2018-10-17 19:46:53', 'master'),
('543431748', 'hswhwdfq', 'Oct 13, 2018', 'xbwrtqerq', 'xqe', 'https://www.youtube.com/embed/Wm9YrKhMLjA', 'image-5bc35c983c7517_23069340.png', 'uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `client_gallery`
--

CREATE TABLE `client_gallery` (
  `id` int(11) NOT NULL,
  `client_id` varchar(255) NOT NULL COMMENT 'Reference ID',
  `image_name` varchar(255) NOT NULL,
  `image_loc` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_gallery`
--

INSERT INTO `client_gallery` (`id`, `client_id`, `image_name`, `image_loc`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(73, '1252915705', 'image-5bc35addeb30f8_46604449.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:57', 'master', '2018-10-14 22:03:57', 'master'),
(74, '1252915705', 'image-5bc35addedfca0_20712687.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(75, '1252915705', 'image-5bc35ade040cb8_87365291.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(76, '1252915705', 'image-5bc35ade06cad0_37243602.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(77, '1252915705', 'image-5bc35ade0a2b71_14761095.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(78, '1252915705', 'image-5bc35ade0ccac1_57362490.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(79, '1252915705', 'image-5bc35ade107532_96580200.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(80, '1252915705', 'image-5bc35ade133316_77546502.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(81, '1252915705', 'image-5bc35ade163788_72948144.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(82, '1252915705', 'image-5bc35ade1926c1_87861230.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(83, '1252915705', 'image-5bc35ade1bdbb0_20661367.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(84, '1252915705', 'image-5bc35ade1f1ce1_76134053.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(85, '1252915705', 'image-5bc35ade220a06_78623752.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(86, '1252915705', 'image-5bc35ade277b45_49653491.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(87, '1252915705', 'image-5bc35ade2a4658_77472177.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(88, '1252915705', 'image-5bc35ade2d0e33_69845597.jpg', './uploads/clients/Client-1', '2018-10-14 22:03:58', 'master', '2018-10-14 22:03:58', 'master'),
(89, '1065313250', 'image-5bc35c30ce2996_23294051.jpg', './uploads/clients/Client-2', '2018-10-14 22:09:36', 'master', '2018-10-14 22:09:36', 'master'),
(90, '1065313250', 'image-5bc35c30d7d2d6_18262305.jpg', './uploads/clients/Client-2', '2018-10-14 22:09:36', 'master', '2018-10-14 22:09:36', 'master'),
(91, '1065313250', 'image-5bc35c30e29205_03976594.png', './uploads/clients/Client-2', '2018-10-14 22:09:36', 'master', '2018-10-14 22:09:36', 'master'),
(92, '1065313250', 'image-5bc35c30ef61f9_57749643.png', './uploads/clients/Client-2', '2018-10-14 22:09:36', 'master', '2018-10-14 22:09:36', 'master'),
(93, '1065313250', 'image-5bc35c30f2ad08_20400499.jpg', './uploads/clients/Client-2', '2018-10-14 22:09:37', 'master', '2018-10-14 22:09:37', 'master'),
(94, '1065313250', 'image-5bc35c31012665_89676610.jpg', './uploads/clients/Client-2', '2018-10-14 22:09:37', 'master', '2018-10-14 22:09:37', 'master'),
(95, '1065313250', 'image-5bc35c310ab772_54181829.jpg', './uploads/clients/Client-2', '2018-10-14 22:09:37', 'master', '2018-10-14 22:09:37', 'master'),
(96, '1065313250', 'image-5bc35c31162ce7_60461579.jpg', './uploads/clients/Client-2', '2018-10-14 22:09:37', 'master', '2018-10-14 22:09:37', 'master'),
(97, '1065313250', 'image-5bc35c311f0da3_69864754.jpg', './uploads/clients/Client-2', '2018-10-14 22:09:37', 'master', '2018-10-14 22:09:37', 'master'),
(98, '543431748', 'image-5bc35c98699c32_05492268.jpg', './uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master'),
(99, '543431748', 'image-5bc35c98a40973_16628546.jpg', './uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master'),
(100, '543431748', 'image-5bc35c98adce23_57433735.jpg', './uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master'),
(101, '543431748', 'image-5bc35c98d67d90_83186265.png', './uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master'),
(102, '543431748', 'image-5bc35c98d961c9_74220855.png', './uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master'),
(103, '543431748', 'image-5bc35c98dbbc86_19226071.jpg', './uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master'),
(104, '543431748', 'image-5bc35c98e11c89_47782641.jpg', './uploads/clients/Client-3', '2018-10-14 22:11:20', 'master', '2018-10-14 22:11:20', 'master'),
(105, '543431748', 'image-5bc35c98ebb695_18025827.jpg', './uploads/clients/Client-3', '2018-10-14 22:11:21', 'master', '2018-10-14 22:11:21', 'master'),
(106, '543431748', 'image-5bc35c991b5174_75755732.jpg', './uploads/clients/Client-3', '2018-10-14 22:11:21', 'master', '2018-10-14 22:11:21', 'master'),
(107, '1743092802', 'image-5bc35cbcf3aa91_53204017.jpg', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-14 22:11:57', 'master'),
(108, '1743092802', 'image-5bc35cbd10f2c3_69115535.jpg', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-14 22:11:57', 'master'),
(109, '1743092802', 'image-5bc35cbd1c1ef9_10900517.jpg', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-14 22:11:57', 'master'),
(110, '1743092802', 'image-5bc4d1fdf3b3b6_66668321.png', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-16 00:44:30', 'master'),
(111, '1743092802', 'image-5bc35cbd34c200_98655345.jpg', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-14 22:11:57', 'master'),
(112, '1743092802', 'image-5bc35cbd3ae3c4_79768807.jpg', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-14 22:11:57', 'master'),
(113, '1743092802', 'image-5bc35cbd4623a9_58181472.jpg', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-14 22:11:57', 'master'),
(114, '1743092802', 'image-5bc35cbd4fd8a8_09626083.jpg', './uploads/clients/Client-4', '2018-10-14 22:11:57', 'master', '2018-10-14 22:11:57', 'master'),
(115, '1436254398', 'image-5bc35cdc66c5f8_01344787.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(116, '1436254398', 'image-5bc35cdc6b8129_51894249.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(117, '1436254398', 'image-5bc35cdc6d95b4_92566948.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(118, '1436254398', 'image-5bc35cdc703625_73486689.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(119, '1436254398', 'image-5bc35cdc724db5_18386804.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(120, '1436254398', 'image-5bc35cdc752c20_99612028.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(121, '1436254398', 'image-5bc35cdc779b95_76954485.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(122, '1436254398', 'image-5bc35cdc7b3499_47792812.jpg', './uploads/clients/Client-5', '2018-10-14 22:12:28', 'master', '2018-10-14 22:12:28', 'master'),
(124, '1630614354', 'image-5bc35cf6a97109_04419354.jpg', './uploads/clients/Client-6', '2018-10-14 22:12:54', 'master', '2018-10-14 22:12:54', 'master'),
(125, '1630614354', 'image-5bc4bbc9333d37_68857807.jpg', './uploads/clients/Client-6', '2018-10-14 22:12:54', 'master', '2018-10-15 23:09:45', 'master'),
(126, '1630614354', 'image-5bc35cf6b40117_17853947.jpg', './uploads/clients/Client-6', '2018-10-14 22:12:54', 'master', '2018-10-14 22:12:54', 'master'),
(127, '1630614354', 'image-5bc35cf6ba85e6_30394533.jpg', './uploads/clients/Client-6', '2018-10-14 22:12:54', 'master', '2018-10-14 22:12:54', 'master'),
(128, '1630614354', 'image-5bc35cf6bded36_79039222.jpg', './uploads/clients/Client-6', '2018-10-14 22:12:54', 'master', '2018-10-14 22:12:54', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL,
  `desc5` text NOT NULL,
  `desc6` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`id`, `nama`, `harga`, `desc1`, `desc2`, `desc3`, `desc4`, `desc5`, `desc6`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'BRONZE', 'IDR 130.900K', 'Makanan & Minum (Up to 50 Guest)', 'Prewedding Shoot', 'Outdoor Party', 'Dress & Suit', 'Home Band Indie', '-', 1, '2018-04-10 20:10:00', 'master', '2018-10-08 11:28:29', 'master'),
(2, 'SILVER', 'IDR 144.900K', 'Makanan & Minum (Up to 100 Guest).', 'Prewedding Shoot', 'Indoor Party', 'Dress & Suit', 'Home Band', '30 pelayan', 1, '2018-04-10 20:10:00', 'master', '2018-10-05 13:47:01', 'master'),
(3, 'GOLD-TEST', 'IDR 169.900K', 'berhasil12000', 'desc2', 'berhasil123123', 'desc4', 'desc5', 'desc6', 1, '2018-04-10 20:10:00', 'master', '2018-10-13 16:24:33', 'master'),
(4, 'PLATINUM', 'IDR 179.900K', 'desc1', 'desc2', 'desc3', 'desc4', 'desc5', 'desc6', 1, '2018-04-10 20:10:00', 'master', '2018-10-05 13:47:04', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `promo_package`
--

CREATE TABLE `promo_package` (
  `id` int(11) NOT NULL,
  `nama_promo` varchar(255) NOT NULL,
  `nama_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_package`
--

INSERT INTO `promo_package` (`id`, `nama_promo`, `nama_image`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(12, 'test promo 1', 'image-5bc35344170083_16415490.jpg', '2018-10-14 21:31:32', 'master', '2018-10-14 21:31:32', 'master'),
(14, 'Promo Ceria', 'image-5bc7313b18e716_26900951.jpg', '2018-10-16 00:46:46', 'master', '2018-10-17 19:55:23', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `nama_slider` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `nama_slider`, `deskripsi`, `nama_image`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Welcome', 'lorem ipsum', 'image-5bc3368375ba81_71515793.jpg', '2018-10-14 19:28:51', 'master', '2018-10-14 19:28:51', 'master'),
(2, 'sfasasf', 'asf2qe', 'image-5bc3368e678ee2_60906611.jpg', '2018-10-14 19:29:02', 'master', '2018-10-14 19:29:02', 'master'),
(4, 'asdghth3re', 'asasq', 'image-5bc34e238e51c4_17942304.png', '2018-10-14 21:09:39', 'master', '2018-10-14 21:09:39', 'master'),
(5, 'asfasdad', 'asfasdasd', 'image-5bc730875a0289_86884399.jpg', '2018-10-16 00:45:21', 'master', '2018-10-17 19:52:23', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1',
  `is_active` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL DEFAULT 'root',
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL DEFAULT 'root'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nama`, `role`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(17, 'master', '$2y$10$5ujHcY2NpCAmp92NA4kN1OoWuyPQVZ4aBYBgxdO28eEKooKfOQgSy', 'admin@thepreciousonewedding.com', 'Master', 1, 1, '2018-10-04 12:03:53', 'root', '2018-10-05 16:02:09', 'master'),
(18, 'userblog', '$2y$10$5HZIDxUqeCJ/CrkgRpNwN.uo5gaVT.5fPYEHNskwgkQre4XV3z3L2', 'userblog@thepreciousonewedding.com', 'User Blog', 2, 1, '2018-10-04 12:06:24', 'root', '2018-10-05 13:49:31', 'master'),
(19, 'blogger2', '$2y$10$.P8wH7AmfaGSrNOo8.M7ReezI1ZiDugIJYiie1poxHYloOAf6yWh6', 'blogger2@gmail.com', 'Blogger 2', 2, 0, '2018-10-05 13:53:15', 'root', '2018-10-13 16:36:26', 'master'),
(20, 'blog', '$2y$10$Wf7UN3NRsNGRgyBKR8gc/eswlJdl5jYqBhwjgdp7MG5iPqYGQlYfa', 'blog@gmail.com', 'blog-user', 2, 0, '2018-10-13 16:38:20', 'master', '2018-10-13 16:40:52', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `nama`, `kategori`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'Dinda Sakato', 1, '2018-10-12 11:12:29', 'master', '2018-10-12 11:16:37', 'master'),
(4, 'Ratu Wedding', 1, '2018-10-12 11:12:59', 'master', '2018-10-12 11:12:59', 'master'),
(5, 'Red Berry', 1, '2018-10-12 11:13:08', 'master', '2018-10-12 11:13:08', 'master'),
(6, 'Precious Motret', 2, '2018-10-12 11:13:22', 'master', '2018-10-12 11:15:42', 'master'),
(7, 'Verve Photo', 2, '2018-10-12 11:13:40', 'master', '2018-10-12 11:13:40', 'master'),
(8, 'Mirza Photography', 2, '2018-10-12 11:13:51', 'master', '2018-10-12 11:13:51', 'master'),
(9, 'Adam', 3, '2018-10-12 11:14:12', 'master', '2018-10-12 11:14:12', 'master'),
(10, 'Rich Art', 3, '2018-10-12 11:14:21', 'master', '2018-10-12 11:14:21', 'master'),
(11, 'Adam Catering', 4, '2018-10-12 11:14:52', 'master', '2018-10-12 11:14:52', 'master'),
(12, 'Alfabet', 4, '2018-10-12 11:15:03', 'master', '2018-10-12 11:15:03', 'master'),
(13, 'Puspa', 4, '2018-10-12 11:15:10', 'master', '2018-10-12 11:15:10', 'master'),
(14, 'Kenny Jo Entertainment', 5, '2018-10-12 11:15:24', 'master', '2018-10-12 11:16:27', 'master'),
(15, 'vendor test', 5, '2018-10-13 16:29:00', 'master', '2018-10-13 16:29:00', 'master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_gallery`
--
ALTER TABLE `client_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `promo_package`
--
ALTER TABLE `promo_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_slider` (`nama_slider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client_gallery`
--
ALTER TABLE `client_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promo_package`
--
ALTER TABLE `promo_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
