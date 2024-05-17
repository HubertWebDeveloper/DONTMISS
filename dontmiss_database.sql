-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 06:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dontmiss_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_categ`
--

CREATE TABLE `admin_categ` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_categ`
--

INSERT INTO `admin_categ` (`id`, `name`, `title`) VALUES
(1, 'Dashboard', 'dashboard'),
(2, 'Payment', 'payment'),
(3, 'Shop registration', 'register'),
(4, 'Advertisement', 'advert'),
(5, 'Story topic', 'story'),
(6, 'Doctors/Partners', 'partner'),
(7, 'Support message', 'support'),
(8, 'Comments', 'comment'),
(9, 'Products', 'product'),
(10, 'Sessions', 'session'),
(11, 'Subscribe User', 'subscribe'),
(12, 'Categories', 'category'),
(13, 'Staff Members', 'staff'),
(14, 'Admin_category', 'admincateg'),
(15, 'Session_files', 'file'),
(16, 'Prod_comment', 'prodComment');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(10) NOT NULL,
  `file` varchar(255) NOT NULL,
  `content` varchar(298) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `file`, `content`, `status`) VALUES
(21, 'menu_bg2.jpg', 'Dont Miss! Is a one stop website. It intends to empower individuals with quality products and services from the comfort of their gadgets for a happier fulfilled & independent life, it provides a variety of services and products including beauty, financial hacks, relationship tips amongst others.', 'default'),
(22, 'video.mp4', '', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `apointment`
--

CREATE TABLE `apointment` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `image`, `date`, `category`) VALUES
(3, 'about dont miss ltd', 'Don\'t Miss! Is A One Stop Website For All Your Financial And Lifestyle Hacks. It Intends To Empower Individuals With Quality Products And Services From The Comfort Of Their Gadgets For A Happier Fulfilled & Independent Life, It Provides A Variety Of Services And Products Including Beauty, Financial Hacks, Relationship Tips Amongst Others. ', 'myLogo.png', '2023-01-10', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `logo` text NOT NULL,
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `logo`, `category`) VALUES
(3, 'Love /Urukundo', 'fas fa-heart', 'consultation'),
(4, 'Money / Amafaranga', 'fas fa-credit-card', 'consultation'),
(5, 'Sex / Igitsina', 'fas fa-venus-mars', 'consultation'),
(6, 'Attention / Kwitaho', 'fas fa-assistive-listening-systems', 'consultation'),
(11, 'Responsibilities / Inshingano', 'fas fa-asterisk', 'consultation'),
(16, 'Clothing / Imyambaro', 'cloth.png', 'shopping'),
(17, 'Shoes / Inkweto', 'sho.png', 'shopping'),
(20, 'Jewelry / Imirimbo', 'jewerly.png', 'shopping'),
(21, 'Lotion / Amavuta yokwisiga', 'lotion.png', 'shopping'),
(22, 'Sports / Ibijyanye nimikino', 'ball.png', 'shopping'),
(23, 'Electronic devices / ibikoresho byumuriro', 'frigo.png', 'shopping'),
(24, 'Phones / Amatelephone', 'phone.png', 'shopping'),
(25, 'Utensils / Ibikoresho byomukikoni', 'utensils.png', 'shopping'),
(26, 'Hardware Store / Ibikoresho bijyanye nubwubatsi', 'tiles.png', 'shopping'),
(27, 'Furniture / Ibikoresho bibajwe mubiti', 'sofa.png', 'shopping'),
(28, 'Spare parts / Ibikoresho byibinyabiziga', 'spare.png', 'shopping'),
(29, 'Chronic Lung Disease', 'lungs.png', 'health'),
(30, 'Chronic Kidney Disease', 'kidney.png', 'health'),
(31, 'Cancer Disease', 'cancer.png', 'health'),
(32, 'Stroke Disease', 'stroke.png', 'health'),
(33, 'Heart Disease', 'heart.png', 'health'),
(34, 'Diabetes Disease', 'diabete.png', 'health'),
(35, 'Alzheimer Disease', 'alz.jpg', 'health'),
(36, 'Arthritis Disease', 'knee.png', 'health'),
(37, 'Ischemic Heart', 'iscemic.jpg', 'health'),
(38, 'Depression Disease', 'depression.png', 'health'),
(39, 'Hypertension Disease', 'hyper.png', 'health'),
(40, 'Communication / Kuganira', 'fas fa-comment', 'consultation'),
(41, 'Clear & Clear / Isuku', 'fas fa-battery-empty', 'consultation'),
(42, 'Religion / imyemerere', 'fas fa-plus', 'consultation'),
(43, 'Culture / Imico', 'fas fa-crosshairs', 'consultation'),
(44, 'Party & enjoyment / Ibirori cg gusohoka', 'fas fa-glass', 'consultation'),
(45, 'Power / Imbaraga', 'fas fa-microphone', 'consultation'),
(46, 'Plant nurseries / ibiti byigemwe ', 'plant.png', 'shopping'),
(47, 'mattress / amamatera', 'mattress.png', 'shopping'),
(48, 'bags / Ibikapu', 'bags.png', 'shopping'),
(49, 'Obesity/ Umubyibuho ukabije', 'ff', 'health'),
(53, 'Inter & Intra Disputes', 'images (49).jpg', 'mediation'),
(54, 'Political Disputes', 'download - 2023-05-03T225847.898.jpg', 'mediation'),
(55, 'Commercial trade Disputes', 'download - 2023-05-03T225914.782.jpg', 'mediation'),
(56, 'Labour & Employee Disputes', 'download - 2023-05-03T225935.267.jpg', 'mediation'),
(57, 'Marital Disputes', 'download - 2023-05-03T230004.153.jpg', 'mediation'),
(58, 'Child custody Disputes', 'download - 2023-05-03T230028.011.jpg', 'mediation'),
(59, 'Corporate Disputes', 'download - 2023-05-03T230105.266.jpg', 'mediation'),
(60, 'Succession Disputes', 'download - 2023-05-03T230129.610.jpg', 'mediation'),
(61, 'Tenant landlord Disputes', 'download - 2023-05-03T230206.331.jpg', 'mediation');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dontmiss_category`
--

CREATE TABLE `dontmiss_category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dontmiss_category`
--

INSERT INTO `dontmiss_category` (`id`, `name`, `category`) VALUES
(5, 'Home', 'home'),
(6, 'Health Services', 'health'),
(7, 'Life Consultation', 'consultation'),
(8, 'Mediation Services', 'mediation'),
(9, 'Blog', 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) NOT NULL,
  `document` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `document`, `category`, `language`) VALUES
(4, 'COMM (AutoRecovered).docx', 'consultation', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `hcomment`
--

CREATE TABLE `hcomment` (
  `id` int(10) NOT NULL,
  `topic_title` text NOT NULL,
  `comment` text NOT NULL,
  `user` text NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hcomment`
--

INSERT INTO `hcomment` (`id`, `topic_title`, `comment`, `user`, `type`) VALUES
(1, 'Communication to married couple', 'nice one', 'hhirwa1390@stu.kemu.ac.ke', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `location` varchar(20) NOT NULL,
  `code` varchar(4) NOT NULL,
  `phone` int(9) NOT NULL,
  `about` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `email`, `profile`, `location`, `code`, `phone`, `about`, `category`) VALUES
(1, 'Mr. Remy remezo', 'remezoremy12@gmail.com', '', 'Kenya, Meru.', '+254', 768791231, 'Counseling therapist', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `topic_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `code` varchar(30) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `ksh_price` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `image`, `price`, `ksh_price`, `description`, `category`) VALUES
(95, 'sling bags', 'WhatsApp Image 2023-02-23 at 11.05.51 AM.jpeg', 16000, '1600', 'A sling bag is a medium bag that is unstructured and worn across the body with a wide strap. The bag is normally made from cotton or cloth and may feature many patterns and prints often focusing on an African styled patterned.', 'bags / Ibikapu'),
(96, 'sling bags', 'WhatsApp Image 2023-02-23 at 11.05.52 AM.jpeg', 16000, '1600', 'A sling bag is a medium bag that is unstructured and worn across the body with a wide strap. The bag is normally made from cotton or cloth and may feature many patterns and prints often focusing on an African styled patterned.', 'bags / Ibikapu'),
(97, 'sling bags', 'WhatsApp Image 2023-02-23 at 11.05.53 AM.jpeg', 16000, '1600', 'A sling bag is a medium bag that is unstructured and worn across the body with a wide strap. The bag is normally made from cotton or cloth and may feature many patterns and prints often focusing on an African styled patterned.', 'bags / Ibikapu'),
(98, 'high heel wear', '80e42ce0f8a8f3a24baf075064087b64.png', 16000, '1600', 'High-heeled shoes, also known as high heels, are a type of shoe with an angled sole. The heel in such shoes is raised above the ball of the foot. High heels cause the legs to appear longer, make the wearer appear taller, and accentuate the calf muscle.', 'Shoes / Inkweto'),
(99, 'high heel wear', '23131829_xxl.webp', 15000, '1500', 'High-heeled shoes, also known as high heels, are a type of shoe with an angled sole. The heel in such shoes is raised above the ball of the foot. High heels cause the legs to appear longer, make the wearer appear taller, and accentuate the calf muscle.', 'Shoes / Inkweto'),
(100, 'high heel wear', 'WhatsApp Image 2023-02-22 at 9.25.15 PM (1).jpeg', 16000, '1600', 'High-heeled shoes, also known as high heels, are a type of shoe with an angled sole. The heel in such shoes is raised above the ball of the foot. High heels cause the legs to appear longer, make the wearer appear taller, and accentuate the calf muscle.', 'Shoes / Inkweto'),
(101, 'handbag', 'WhatsApp Image 2023-04-02 at 11.35.08 PM.jpeg', 18000, '1800', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(102, 'handbag', 'WhatsApp Image 2023-04-02 at 11.35.12 PM.jpeg', 16000, '1600', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(103, 'handbag', 'WhatsApp Image 2023-04-02 at 11.35.14 PM.jpeg', 18000, '1800', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(104, 'handbag', 'WhatsApp Image 2023-04-02 at 11.35.33 PM.jpeg', 18000, '1800', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(105, 'handbag', 'WhatsApp Image 2023-04-02 at 11.35.40 PM.jpeg', 16000, '1600', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(106, 'handbag', 'WhatsApp Image 2023-04-02 at 11.35.41 PM.jpeg', 16000, '1600', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(107, 'Ankara original cotton', 'WhatsApp Image 2023-02-21 at 5.03.46 PM (1).jpeg', 25000, '2500', 'African print fabric, also known as kitenge or Ankara fabric, is 100% cotton cloth. The method of producing African print fabric is called batik, a wax-resist dyeing technique. The design and colours look the same on both sides of the fabric.', 'Clothing / Imyambaro'),
(108, 'Ankara original cotton', 'WhatsApp Image 2023-02-21 at 5.03.49 PM (2).jpeg', 25000, '2500', 'African print fabric, also known as kitenge or Ankara fabric, is 100% cotton cloth. The method of producing African print fabric is called batik, a wax-resist dyeing technique. The design and colours look the same on both sides of the fabric.', 'Clothing / Imyambaro'),
(109, 'Ankara original cotton', 'WhatsApp Image 2023-02-21 at 5.03.48 PM (3).jpeg', 25000, '2500', 'African print fabric, also known as kitenge or Ankara fabric, is 100% cotton cloth. The method of producing African print fabric is called batik, a wax-resist dyeing technique. The design and colours look the same on both sides of the fabric.', 'Clothing / Imyambaro'),
(110, 'Massai Blankets fleeces', 'WhatsApp Image 2023-02-21 at 5.07.35 PM (3).jpeg', 25000, '2500', 'Masai Shuka, also referred to as the African blanket is a traditional clothing of the Masai people, the world known semi nomadic tribe from East Africa.', 'Clothing / Imyambaro'),
(111, 'Massai Blankets fleeces', 'WhatsApp Image 2023-02-21 at 5.07.34 PM (3).jpeg', 25000, '2500', 'Masai Shuka, also referred to as the African blanket is a traditional clothing of the Masai people, the world known semi-nomadic tribe from East Africa. ', 'Clothing / Imyambaro'),
(112, 'Massai Blankets fleeces', 'WhatsApp Image 2023-02-21 at 5.07.34 PM (2).jpeg', 25000, '2500', 'Masai Shuka, also referred to as the African blanket is a traditional clothing of the Masai people, the world known semi nomadic tribe from East Africa.', 'Clothing / Imyambaro'),
(113, 'handbag', 'WhatsApp Image 2023-04-03 at 12.04.01 AM.jpeg', 26000, '2600', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(114, 'handbag', 'WhatsApp Image 2023-04-03 at 12.03.50 AM.jpeg', 26000, '2600', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(115, 'handbag', 'WhatsApp Image 2023-04-03 at 12.03.18 AM.jpeg', 26000, '2600', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap, commonly used for holding money, personal grooming items, small purchases', 'bags / Ibikapu'),
(116, 'couple clothing', 'WhatsApp Image 2023-02-21 at 5.12.55 PM (1).jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(117, 'couple clothing', 'WhatsApp Image 2023-02-21 at 5.12.53 PM (1).jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(118, 'women hoodies', 'WhatsApp Image 2023-02-21 at 5.12.56 PM (3).jpeg', 25000, '2500', 'the best hoodies for women, whether youre looking for cozy options for working from home or breathable layers for your daily jog', 'Clothing / Imyambaro'),
(119, 'women hoodies', 'WhatsApp Image 2023-02-21 at 5.12.56 PM (2).jpeg', 25000, '2500', 'the best hoodies for women, whether youre looking for cozy options for working from home or breathable layers for your daily jog', 'Clothing / Imyambaro'),
(120, 'women hoodies', '1.jpg', 30000, '3000', 'the best hoodies for women, whether youre looking for cozy options for working from home or breathable layers for your daily jog', 'Clothing / Imyambaro'),
(121, 'women hoodies', 'ec95ba60-a14d-4a5f-9895-024c17a96d81.b67c7021954d479ce2550f48cf48cbc1.jpeg', 30000, '3000', 'the best hoodies for women, whether youre looking for cozy options for working from home or breathable layers for your daily jog', 'Clothing / Imyambaro'),
(122, 'women hoodies', 'download (41).jpg', 25000, '2500', 'the best hoodies for women, whether youre looking for cozy options for working from home or breathable layers for your daily jog', 'Clothing / Imyambaro'),
(123, 'men shirt', 'WhatsApp Image 2023-02-22 at 1.24.05 AM.jpeg', 20000, '2000', 'is a garment that features a collar and full-length opening fastened with buttons or studs. Traditionally, this shirt was effectively an undergarment, always being worn beneath a waistcoat and jacket.', 'Clothing / Imyambaro'),
(124, 'men shirt', 'WhatsApp Image 2023-02-22 at 1.24.04 AM.jpeg', 20000, '2000', 'is a garment that features a collar and full-length opening fastened with buttons or studs. Traditionally, this shirt was effectively an undergarment, always being worn beneath a waistcoat and jacket.', 'Clothing / Imyambaro'),
(125, 'men shirt', 'WhatsApp Image 2023-02-22 at 1.24.03 AM.jpeg', 20000, '2000', 'is a garment that features a collar and full-length opening fastened with buttons or studs. Traditionally, this shirt was effectively an undergarment, always being worn beneath a waistcoat and jacket.', 'Clothing / Imyambaro'),
(126, 'men shirt', 'WhatsApp Image 2023-02-22 at 1.24.02 AM.jpeg', 20000, '2000', 'is a garment that features a collar and full-length opening fastened with buttons or studs. Traditionally, this shirt was effectively an undergarment, always being worn beneath a waistcoat and jacket.', 'Clothing / Imyambaro'),
(127, 'men shirt', 'WhatsApp Image 2023-02-22 at 1.23.49 AM.jpeg', 20000, '2000', 'is a garment that features a collar and full-length opening fastened with buttons or studs. Traditionally, this shirt was effectively an undergarment, always being worn beneath a waistcoat and jacket.', 'Clothing / Imyambaro'),
(128, 'couple clothing', 'WhatsApp Image 2023-02-22 at 1.24.10 AM.jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(129, 'couple clothing', 'WhatsApp Image 2023-02-22 at 1.24.06 AM (1).jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(130, 'couple clothing', 'WhatsApp Image 2023-02-22 at 1.24.05 AM (1).jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(131, 'couple clothing', 'WhatsApp Image 2023-02-22 at 1.24.06 AM.jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(132, 'couple clothing', 'WhatsApp Image 2023-02-22 at 1.24.12 AM (1).jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(133, 'couple clothing', 'WhatsApp Image 2023-02-22 at 1.24.12 AM.jpeg', 40000, '4000', 'They usually wear corresponding T-shirts, shirts, hoodies, sweaters and jackets or coats. Because these clothes are often printed with funny graphics or slogans', 'Clothing / Imyambaro'),
(134, 'Nice&lovely body lotion', 'download (44).jpg', 1950, '195', 'Nice&lovely Body lotion 200ml.', 'Lotion / Amavuta yokwisiga'),
(135, 'Nice&lovely body lotion', 'download (43).jpg', 3050, '305', 'Nice&lovely Body lotion 400ml.', 'Lotion / Amavuta yokwisiga'),
(136, 'Nice&lovely body lotion', 'download (42).jpg', 1600, '160', 'Nice&lovely cocoa butter body lotion.', 'Lotion / Amavuta yokwisiga'),
(137, 'Cantu wave whip', 'pack_image.jpeg', 11600, '1160', 'Creates crunch-free, touchable waves and curls for frizz-free and styles full of volume', 'Lotion / Amavuta yokwisiga'),
(138, 'Cantu s/b tea tree', '6182AD8ExqL._SL1500_.jpg', 12700, '1270', 'Cantu tea tree & jojoba hair & scalp oil is great for weaves, extensions and braids.', 'Lotion / Amavuta yokwisiga'),
(139, 'Cantu curl activator', '51OeiISMlZL._AC_.jpg', 13150, '1315', 'Smoothes and enhances natural curl pattern revealing frizz-free volume', 'Lotion / Amavuta yokwisiga'),
(140, 'Cantu curl activator', 'images (36).jpg', 13150, '1315', 'Smoothes and enhances natural curl pattern revealing frizz-free volume', 'Lotion / Amavuta yokwisiga'),
(141, 'Cantu curl activator', 'images (35).jpg', 12700, '1270', 'Smoothes and enhances natural curl pattern revealing frizz-free volume', 'Lotion / Amavuta yokwisiga'),
(142, 'Cantu curl activator', 'images (34).jpg', 11600, '1160', 'Smoothes and enhances natural curl pattern revealing frizz-free volume', 'Lotion / Amavuta yokwisiga'),
(143, 'Bio oil', 'images (37).jpg', 6650, '665', 'a specialist skincare product formulated to help improve the appearance of scars, stretch marks and uneven skin tone.', 'Lotion / Amavuta yokwisiga'),
(144, 'Bio oil', 'download (49).jpg', 6650, '665', 'a specialist skincare product formulated to help improve the appearance of scars, stretch marks and uneven skin tone.', 'Lotion / Amavuta yokwisiga'),
(145, 'Bio oil', 'Bio-Oil_SkincareOil_HeroSquare-2c1f4b38644a4dfe84677636b63d568e.jpg', 6650, '665', 'a specialist skincare product formulated to help improve the appearance of scars, stretch marks and uneven skin tone.', 'Lotion / Amavuta yokwisiga'),
(146, 'Bio oil', 'download (48).jpg', 6650, '665', 'a specialist skincare product formulated to help improve the appearance of scars, stretch marks and uneven skin tone.', 'Lotion / Amavuta yokwisiga'),
(147, 'Angelique massage oil', 'images (38).jpg', 3350, '335', 'nourishes and protects the skin; olfactory properties provide deep relaxation and open the mind. ', 'Lotion / Amavuta yokwisiga'),
(148, 'Angelique massage oil', 'download (52).jpg', 3350, '335', 'nourishes and protects the skin; olfactory properties provide deep relaxation and open the mind. ', 'Lotion / Amavuta yokwisiga'),
(149, 'Angelique massage oil', 'download (51).jpg', 3350, '335', 'nourishes and protects the skin; olfactory properties provide deep relaxation and open the mind. ', 'Lotion / Amavuta yokwisiga'),
(150, 'Angelique massage oil', 'download (50).jpg', 3350, '335', 'nourishes and protects the skin; olfactory properties provide deep relaxation and open the mind. ', 'Lotion / Amavuta yokwisiga'),
(151, 'Vaseline intensive care', 'download (55).jpg', 5500, '550', 'A body lotion that works to heal dry skin from deep within, it is designed to prevent dryness and provide 48 hours of moisture.', 'Lotion / Amavuta yokwisiga'),
(152, 'Vaseline intensive care', 'download (54).jpg', 5500, '550', 'A body lotion that works to heal dry skin from deep within, it is designed to prevent dryness and provide 48 hours of moisture.', 'Lotion / Amavuta yokwisiga'),
(153, 'Vaseline intensive care', 'download (53).jpg', 5500, '550', 'A body lotion that works to heal dry skin from deep within, it is designed to prevent dryness and provide 48 hours of moisture.', 'Lotion / Amavuta yokwisiga'),
(154, 'Revlon natural honey original', 'images (39).jpg', 8650, '865', 'richly nourishes the skin, healing very dry skin and softening the skin for a healthier looking skin.', 'Lotion / Amavuta yokwisiga'),
(155, 'Revlon natural honey original', 'download (58).jpg', 8650, '865', 'richly nourishes the skin, healing very dry skin and softening the skin for a healthier looking skin.', 'Lotion / Amavuta yokwisiga'),
(156, 'Revlon natural honey original', 'download (57).jpg', 8650, '865', 'richly nourishes the skin, healing very dry skin and softening the skin for a healthier looking skin.', 'Lotion / Amavuta yokwisiga'),
(157, 'Revlon natural honey original', 'download (56).jpg', 8650, '865', 'richly nourishes the skin, healing very dry skin and softening the skin for a healthier looking skin.', 'Lotion / Amavuta yokwisiga'),
(158, 'Clere glycerin', 'images (41).jpg', 1350, '135', 'used as a moisturizer to treat or prevent dry, rough, scaly, itchy skin and minor skin irritations.', 'Lotion / Amavuta yokwisiga'),
(159, 'Clere glycerin', 'images (40).jpg', 1350, '135', 'used as a moisturizer to treat or prevent dry, rough, scaly, itchy skin and minor skin irritations.', 'Lotion / Amavuta yokwisiga'),
(160, 'Clere glycerin', 'download (59).jpg', 1350, '135', 'used as a moisturizer to treat or prevent dry, rough, scaly, itchy skin and minor skin irritations.', 'Lotion / Amavuta yokwisiga'),
(161, 'Girlfriend cocoa butter', 'images (42).jpg', 2050, '205', ' known for its sweet aroma and natural skin soothing properties that soften even very dry skin.', 'Lotion / Amavuta yokwisiga'),
(162, 'Girlfriend cocoa butter', 'download (62).jpg', 2050, '205', ' known for its sweet aroma and natural skin soothing properties that soften even very dry skin.', 'Lotion / Amavuta yokwisiga'),
(163, 'Girlfriend cocoa butter', 'download (61).jpg', 2050, '205', ' known for its sweet aroma and natural skin soothing properties that soften even very dry skin.', 'Lotion / Amavuta yokwisiga'),
(164, 'Imperial leather spa body lotion', 'download (65).jpg', 2600, '260', 'Body lotion enriched with up to 24 hours of hydrating, rose and milk extracts, and long-lasting floral aroma, quickly penetrated by skin tests. ', 'Lotion / Amavuta yokwisiga'),
(165, 'Imperial leather spa body lotion', 'download (64).jpg', 2600, '260', 'Body lotion enriched with up to 24 hours of hydrating, rose and milk extracts, and long-lasting floral aroma, quickly penetrated by skin tests. ', 'Lotion / Amavuta yokwisiga'),
(166, 'Imperial leather spa body lotion', 'download (63).jpg', 2600, '260', 'Body lotion enriched with up to 24 hours of hydrating, rose and milk extracts, and long-lasting floral aroma, quickly penetrated by skin tests. ', 'Lotion / Amavuta yokwisiga'),
(167, 'Venus 24hrs nourishing lotion ', 'download (69).jpg', 1800, '180', 'Venus Nourishing Moroccan Argan Oil Body Lotion with an exclusive moisture lock system made of quickly absorbing Moroccan argan oil to restore skins elasticity', 'Lotion / Amavuta yokwisiga'),
(168, 'Venus 24hrs nourishing lotion ', 'download (68).jpg', 1800, '180', 'Venus Nourishing Moroccan Argan Oil Body Lotion with an exclusive moisture lock system made of quickly absorbing Moroccan argan oil to restore skins elasticity', 'Lotion / Amavuta yokwisiga'),
(169, 'Venus 24hrs nourishing lotion ', 'download (67).jpg', 1800, '180', 'Venus Nourishing Moroccan Argan Oil Body Lotion with an exclusive moisture lock system made of quickly absorbing Moroccan argan oil to restore skins elasticity', 'Lotion / Amavuta yokwisiga'),
(170, 'Venus 24hrs nourishing lotion ', 'download (66).jpg', 1800, '180', 'Venus Nourishing Moroccan Argan Oil Body Lotion with an exclusive moisture lock system made of quickly absorbing Moroccan argan oil to restore skins elasticity', 'Lotion / Amavuta yokwisiga'),
(171, 'Valon glycerine&vitamin', 'images (44).jpg', 2450, '245', 'made with real milk and shea butter. Milk is loaded with potent antioxydants, minerals, vitamin', 'Lotion / Amavuta yokwisiga'),
(172, 'Valon glycerine&vitamin', 'images (43).jpg', 2450, '245', 'made with real milk and shea butter. Milk is loaded with potent antioxydants, minerals, vitamin', 'Lotion / Amavuta yokwisiga'),
(173, 'Valon glycerine&vitamin', 'download (70).jpg', 2450, '245', 'made with real milk and shea butter. Milk is loaded with potent antioxydants, minerals, vitamin', 'Lotion / Amavuta yokwisiga'),
(174, 'Luron cocoa butter', 'images (45).jpg', 3700, '370', 'Natural Honey and Cocoa Glow is a rich moisture men', 'Lotion / Amavuta yokwisiga'),
(175, 'Luron cocoa butter', 'download (75).jpg', 3700, '370', 'Natural Honey and Cocoa Glow is a rich moisture men', 'Lotion / Amavuta yokwisiga'),
(176, 'Luron cocoa butter', 'download (74).jpg', 3700, '370', 'Natural Honey and Cocoa Glow is a rich moisture men', 'Lotion / Amavuta yokwisiga'),
(177, 'Alana glycerine', 'download (78).jpg', 1400, '140', 'nourishes and brings soft radiance to your skin.', 'Lotion / Amavuta yokwisiga'),
(178, 'Alana glycerine', 'download (77).jpg', 1400, '140', 'nourishes and brings soft radiance to your skin.', 'Lotion / Amavuta yokwisiga'),
(179, 'Alana glycerine', 'download (76).jpg', 1400, '140', 'nourishes and brings soft radiance to your skin.', 'Lotion / Amavuta yokwisiga'),
(180, 'Nivea vanilla&almand', '71Zp9KuAJsL.jpg', 7100, '710', 'contains precious almond oil carefully blended for 24h deep moisture, without stickiness.', 'Lotion / Amavuta yokwisiga'),
(181, 'Nivea nourishing cocoa butter', 'download (79).jpg', 6800, '680', 'delivers intense hydration, deeply moisturizing skin for up to 48 hours.', 'Lotion / Amavuta yokwisiga'),
(182, 'Nivea aloe&hydration', 'download (81).jpg', 6600, '660', ' it soothes dry and irritated skin and leaves you with comfortable, soft and hydrated skin.', 'Lotion / Amavuta yokwisiga'),
(183, 'Nivea maximun hydration', 'download (82).jpg', 4000, '400', 'It boosts the moisture level in the skin and intensively moisturizes.', 'Lotion / Amavuta yokwisiga'),
(184, 'Nivea Q10 firming body', '2DF_800.jpg', 7350, '735', 'noticeably firms the skin & improves elasticity in 10 days.', 'Lotion / Amavuta yokwisiga'),
(185, 'P.o care sun lotion spf50', 'images (46).jpg', 7250, '725', 'Formulated with Aloe Vera, Honey extract and Vitamin-E helps to soften and prevent your skin from roughness dryness and premature aging and affords Protection from the suns burning.', 'Lotion / Amavuta yokwisiga'),
(186, 'P.o care sun lotion spf50', 'download (83).jpg', 7250, '725', 'Formulated with Aloe Vera, Honey extract and Vitamin-E helps to soften and prevent your skin from roughness dryness and premature', 'Lotion / Amavuta yokwisiga'),
(187, 'P.o care sun lotion spf50', '71VuBEllR-L.jpg', 7250, '725', 'Formulated with Aloe Vera, Honey extract and Vitamin-E helps to soften and prevent your skin from roughness dryness and premature aging and affords Protection from the suns burning.', 'Lotion / Amavuta yokwisiga'),
(188, 'Xiaomi Redmi 10A', 'xiaomi-redmi-10a-2.jpg', 166990, '16699', 'Xiaomi Redmi 10A Android smartphone. Announced Mar 2022. Features 6.53 display, MT6762G Helio G25 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM.', 'Phones / Amatelephone'),
(189, 'Xiaomi Redmi 10A', 'download.jpg', 166990, '16699', 'Xiaomi Redmi 10A Android smartphone. Announced Mar 2022. Features 6.53 display, MT6762G Helio G25 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM.', 'Phones / Amatelephone'),
(190, 'Xiaomi Redmi 10A', 'download (1).jpg', 166990, '16699', 'Xiaomi Redmi 10A Android smartphone. Announced Mar 2022. Features 6.53 display, MT6762G Helio G25 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM.', 'Phones / Amatelephone'),
(191, 'Tecno pop 7', 'download (2).jpg', 128490, '12849', 'Tecno Pop 7 Pro ; Size, 6.56 inches, 103.4 cm2 (~83.5% screen-to-body ratio) ', 'Phones / Amatelephone'),
(192, 'Tecno pop 7', 'tecno-pop-7-pro--.jpg', 127490, '12749', 'Tecno Pop 7 Pro ; Size, 6.56 inches, 103.4 cm2 (~83.5% screen-to-body ratio) ', 'Phones / Amatelephone'),
(193, 'Freeyond F9', 'FreeYond-F9-Review-plus.jpg', 92990, '9299', 'FreeYond F9 ; Display: 6.52-inch HD+ screen ; Camera: 13MP Dual camera / 8MP front ; Memory: 2/3GB RAM with 64/128GB ROM ; Platform: UNiSOC SC9863A1 / Android 11 .', 'Phones / Amatelephone'),
(194, 'Freeyond F9', 'download (4).jpg', 92990, '9299', 'FreeYond F9 ; Display: 6.52-inch HD+ screen ; Camera: 13MP Dual camera / 8MP front ; Memory: 2/3GB RAM with 64/128GB ROM ; Platform: UNiSOC SC9863A1 / Android 11 .', 'Phones / Amatelephone'),
(195, 'Freeyond F9', 'download (5).jpg', 92990, '9299', 'FreeYond F9 ; Display: 6.52-inch HD+ screen ; Camera: 13MP Dual camera / 8MP front ; Memory: 2/3GB RAM with 64/128GB ROM ; Platform: UNiSOC SC9863A1 / Android 11 .', 'Phones / Amatelephone'),
(196, 'Samsung M33', 'download (6).jpg', 269980, '26998', 'Samsung Galaxy M33 ; Display, Type ; Size, 6.6 inches, 104.9 cm2 (~82.5% screen-to-body ratio) ; Resolution, 1080 x 2408 pixels, 20:9 ratio (~400 ppi density).', 'Clothing / Imyambaro'),
(197, 'Samsung A13', '81i1A1MgXBL._SX679_.jpg', 211990, '21199', 'Samsung Galaxy A13 ; Resolution, 1080 x 2408 pixels, 20:9 ratio (~400 ppi density) ; Protection, Corning Gorilla Glass 5 ; Platform, OS ; Chipset, Exynos 850 (8nm).', 'Phones / Amatelephone'),
(198, 'Xiaomi Redmi A13', 'SM-A136ULGAATT-1.webp', 211990, '21199', 'Samsung Galaxy A13 ; Resolution, 1080 x 2408 pixels, 20:9 ratio (~400 ppi density) ; Protection, Corning Gorilla Glass 5 ; Platform, OS ; Chipset, Exynos 850 (8nm).', 'Clothing / Imyambaro'),
(199, 'Vivo Y02', '714ob55p5IL._SX679_.jpg', 114990, '11499', 'vivo Y02 Android smartphone. Announced Nov 2022. Features 6.51â€³ display, MT6762 Helio P22 chipset, 5000 mAh battery, 32 GB storage, 3 GB RAM.', 'Phones / Amatelephone'),
(200, 'Vivo Y02', 'a74a659703ef5eeb691eae154b5a47dc.png', 114990, '11499', 'vivo Y02 Android smartphone. Announced Nov 2022. Features 6.51â€³ display, MT6762 Helio P22 chipset, 5000 mAh battery, 32 GB storage, 3 GB RAM.', 'Phones / Amatelephone'),
(201, 'Vivo Y02', 'download (7).jpg', 114990, '11499', 'vivo Y02 Android smartphone. Announced Nov 2022. Features 6.51â€³ display, MT6762 Helio P22 chipset, 5000 mAh battery, 32 GB storage, 3 GB RAM.', 'Phones / Amatelephone'),
(202, 'Oppo A17', 'download (8).jpg', 199990, '19999', 'Oppo A17 ; Size, 6.56 inches, 103.4 cm2 (~83.3% screen-to-body ratio) ; Resolution, 720 x 1612 pixels, 20:9 ratio (~269 ppi density) ; Platform, OS ; Chipset .', 'Clothing / Imyambaro'),
(203, 'Oppo A17', 'f7932b7b-11dd-45d7-be08-43093f49477422070827_416x416.jpg', 199990, '19999', 'Oppo A17 ; Size, 6.56 inches, 103.4 cm2 (~83.3% screen-to-body ratio) ; Resolution, 720 x 1612 pixels, 20:9 ratio (~269 ppi density) ; Platform, OS ; Chipset .', 'Phones / Amatelephone'),
(204, 'Oppo A17', 'download (9).jpg', 199990, '19999', 'Oppo A17 ; Size, 6.56 inches, 103.4 cm2 (~83.3% screen-to-body ratio) ; Resolution, 720 x 1612 pixels, 20:9 ratio (~269 ppi density) ; Platform, OS ; Chipset .', 'Phones / Amatelephone'),
(205, 'Lenovo think center M92p Tower I3', 'download (89).jpg', 119990, '11999', 'fully featured desktop workstation or replacement computer which features a powerful and quick Intel Core processor.', 'Electronic devices / ibikoresho byumuriro'),
(206, 'Lenovo think center M92p Tower I3', 'download (88).jpg', 119990, '11999', 'fully featured desktop workstation or replacement computer which features a powerful and quick Intel Core processor.', 'Electronic devices / ibikoresho byumuriro'),
(207, 'Lenovo think center M92p Tower I3', 'download (87).jpg', 119990, '11999', 'fully featured desktop workstation or replacement computer which features a powerful and quick Intel Core processor.', 'Electronic devices / ibikoresho byumuriro'),
(208, 'Hp z230 workstation refurbished I7  ', 'download (91).jpg', 160000, '16000', 'HP WORKSTATION Z230 TOWER Â· Memory: 32GB DDR3 Hard Drive: Brand 512GB SSD + 3TB HDD Â· Wifi: Built in WiFi + BT 6E AX210 Combo ', 'Electronic devices / ibikoresho byumuriro'),
(209, 'Hp z230 workstation refurbished I7  ', 'download (90).jpg', 160000, '16000', 'HP WORKSTATION Z230 TOWER Â· Memory: 32GB DDR3 Hard Drive: Brand 512GB SSD + 3TB HDD Â· Wifi: Built in WiFi + BT 6E AX210 Combo ', 'Electronic devices / ibikoresho byumuriro'),
(210, 'Hp z230 workstation refurbished I7  ', '51tdN0mWUPL.jpg', 160000, '16000', 'HP WORKSTATION Z230 TOWER Â· Memory: 32GB DDR3 Hard Drive: Brand 512GB SSD + 3TB HDD Â· Wifi: Built in WiFi + BT 6E AX210 Combo \r\n', 'Electronic devices / ibikoresho byumuriro'),
(211, 'Hp refurbished proDesk 600g i5', 'download (94).jpg', 150000, '15000', 'HP ProDesk 600 G1 Small Form Factor PC is speedy and responsive to keep pace with your multitasking', 'Electronic devices / ibikoresho byumuriro'),
(212, 'Hp refurbished proDesk 600g i5', 'download (93).jpg', 150000, '15000', 'HP ProDesk 600 G1 Small Form Factor PC is speedy and responsive to keep pace with your multitasking\r\n', 'Electronic devices / ibikoresho byumuriro'),
(213, 'Hp refurbished proDesk 600g i5', 'download (92).jpg', 150000, '15000', 'HP ProDesk 600 G1 Small Form Factor PC is speedy and responsive to keep pace with your multitasking', 'Electronic devices / ibikoresho byumuriro'),
(214, 'Dell cheap and affordable CPU', 'download (96).jpg', 36800, '3680', 'Know all about a variety of processors and their capabilities to enable yourself to choose the best processor for your PC.', 'Electronic devices / ibikoresho byumuriro'),
(215, 'Dell cheap and affordable CPU', 'download (95).jpg', 36800, '3680', 'Know all about a variety of processors and their capabilities to enable yourself to choose the best processor for your PC.', 'Electronic devices / ibikoresho byumuriro'),
(216, 'Hp desktop cpu intel core 2', 'download (98).jpg', 79990, '7999', 'HP Desktop Core 2 Duo 2.6GHz - New 4GB Memory - 500GB HDD - Windows 10 Home Edition - 19\" Generic Monitor, NEW Keyboard, Mouse, WiFi Sold (Renewed).', 'Electronic devices / ibikoresho byumuriro'),
(217, 'Hp desktop cpu intel core 2', 'download (97).jpg', 79990, '7999', 'HP Desktop Core 2 Duo 2.6GHz - New 4GB Memory - 500GB HDD - Windows 10 Home Edition - 19\" Generic Monitor, NEW Keyboard, Mouse, WiFi Sold (Renewed).', 'Electronic devices / ibikoresho byumuriro'),
(218, 'Hp desktop cpu intel core 2', '51ONTcwLWHL.jpg', 79990, '7999', 'HP Desktop Core 2 Duo 2.6GHz - New 4GB Memory - 500GB HDD - Windows 10 Home Edition - 19\" Generic Monitor, NEW Keyboard, Mouse, WiFi Sold (Renewed).', 'Electronic devices / ibikoresho byumuriro'),
(219, 'Apple refurbished IMac year 2012', 'download - 2023-04-28T111729.610.jpg', 400000, '40000', 'Display. 21.5-inch (diagonal) LED-backlit display with IPS technology; 1920-by-1080 resolution with support for millions of colors', 'Electronic devices / ibikoresho byumuriro'),
(220, 'Apple refurbished IMac year 2012', 'download (100).jpg', 400000, '40000', 'Display. 21.5-inch (diagonal) LED-backlit display with IPS technology; 1920-by-1080 resolution with support for millions of colors', 'Electronic devices / ibikoresho byumuriro'),
(221, 'Apple refurbished IMac year 2012', 'download (99).jpg', 400000, '40000', 'Display. 21.5-inch (diagonal) LED-backlit display with IPS technology; 1920-by-1080 resolution with support for millions of colors', 'Electronic devices / ibikoresho byumuriro'),
(222, 'Hp proDesk 600 G2 desktop intel core 5', '61KtFTRVsTS.jpg', 199990, '19999', 'the 6th-generation Skylake CPU can achieve speeds up to 3.6 GHz.', 'Electronic devices / ibikoresho byumuriro'),
(223, 'Hp proDesk 600 G2 desktop intel core 5', 'c04821911.jpg', 199990, '19999', 'the 6th-generation Skylake CPU can achieve speeds up to 3.6 GHz.', 'Electronic devices / ibikoresho byumuriro'),
(224, 'Hp proDesk 600 G2 desktop intel core 5', '83-997-341-S01.jpg', 199990, '19999', 'the 6th-generation Skylake CPU can achieve speeds up to 3.6 GHz.', 'Electronic devices / ibikoresho byumuriro'),
(225, 'Hp refurbished compaq pro 6200 i5', 'download - 2023-04-28T112327.844.jpg', 209990, '20999', 'HP Compaq 6200 Pro SFF Desktop PC - Intel Core i5 3.1GHz 8GB 1.0TB DVD Windows 10 Pro', 'Electronic devices / ibikoresho byumuriro'),
(226, 'Hp refurbished compaq pro 6200 i5', 'download - 2023-04-28T112316.959.jpg', 207500, '20750', 'HP Compaq 6200 Pro SFF Desktop PC - Intel Core i5 3.1GHz 8GB 1.0TB DVD Windows 10 Pro', 'Electronic devices / ibikoresho byumuriro'),
(227, 'Hp refurbished compaq pro 6200 i5', 'download - 2023-04-28T112255.554.jpg', 89000, '8900', 'HP Compaq 6200 Pro SFF Desktop PC - Intel Core i5 3.1GHz 8GB 1.0TB DVD Windows 10 Pro', 'Electronic devices / ibikoresho byumuriro'),
(228, 'Hp refurbished compaq pro 6200 i5', '81zhP7EluEL.jpg', 184990, '18499', 'HP Compaq 6200 Pro SFF Desktop PC - Intel Core i5 3.1GHz 8GB 1.0TB DVD Windows 10 Pro', 'Electronic devices / ibikoresho byumuriro'),
(229, 'Dell complete set dell optiplex 3040', 'download - 2023-04-28T112722.679.jpg', 200000, '20000', 'Intel Quad Core i5-6500 3.2GHz up to 3.6GHz 16GB New 1TB SSD Built-in WiFi & Bluetooth HDMI Dual Monitor Support Wireless Keyboard & Mouse Win10 Pro', 'Electronic devices / ibikoresho byumuriro'),
(230, 'Dell complete set dell optiplex 3040', 'download - 2023-04-28T112716.221.jpg', 200000, '20000', 'Intel Quad Core i5-6500 3.2GHz up to 3.6GHz 16GB New 1TB SSD Built-in WiFi & Bluetooth HDMI Dual Monitor Support Wireless Keyboard & Mouse Win10 Pro', 'Electronic devices / ibikoresho byumuriro'),
(231, 'Dell complete set dell optiplex 3040', 'download - 2023-04-28T112709.865.jpg', 200000, '20000', 'Intel Quad Core i5-6500 3.2GHz up to 3.6GHz 16GB New 1TB SSD Built-in WiFi & Bluetooth HDMI Dual Monitor Support Wireless Keyboard & Mouse Win10 Pro', 'Electronic devices / ibikoresho byumuriro'),
(232, 'Dell refurbished optiplex 9020 sff', 'download - 2023-04-28T112937.664.jpg', 349990, '34999', 'affordable desktop computing solution for essential user productivity and efficient in-band system management.', 'Electronic devices / ibikoresho byumuriro'),
(233, 'Dell refurbished optiplex 9020 sff', 'download - 2023-04-28T112924.830.jpg', 349990, '34999', 'affordable desktop computing solution for essential user productivity and efficient in-band system management.', 'Electronic devices / ibikoresho byumuriro'),
(234, 'Dell refurbished optiplex 9020 sff', 'download - 2023-04-28T112918.810.jpg', 349990, '34999', 'affordable desktop computing solution for essential user productivity and efficient in-band system management.', 'Electronic devices / ibikoresho byumuriro'),
(236, 'Hp deskJet 2320', 'download - 2023-04-28T114002.984.jpg', 69990, '6999', 'HP DeskJet 2320 All in One Printer (7WN42B)  Copy resolution. Up to 600 x 300 dpi  Input capacity', 'Electronic devices / ibikoresho byumuriro'),
(237, 'Hp deskJet 2320', 'download - 2023-04-28T113949.561.jpg', 69990, '6999', 'HP DeskJet 2320 All in One Printer (7WN42B) Copy resolution. Up to 600 x 300 dpi Input capacity', 'Electronic devices / ibikoresho byumuriro'),
(238, 'Hp deskJet 2320', 'download - 2023-04-28T113942.715.jpg', 69990, '6999', 'HP DeskJet 2320 All in One Printer (7WN42B) Copy resolution. Up to 600 x 300 dpi Input capacity', 'Electronic devices / ibikoresho byumuriro'),
(239, 'Generic H18 wireless', 'download - 2023-04-28T114450.426.jpg', 28990, '2899', 'Compared to the standard keyboard, the H18 mini keyboard is small and light, dont need to take up big space, take and put down conveniently.', 'Electronic devices / ibikoresho byumuriro'),
(240, 'Generic H18 wireless', 'download - 2023-04-28T114435.408.jpg', 28990, '2899', 'Compared to the standard keyboard, the H18 mini keyboard is small and light, dont need to take up big space, take and put down conveniently.', 'Electronic devices / ibikoresho byumuriro'),
(241, 'Generic H18 wireless', '6f2e72482b14c99154e5a401fefc225b0553e0fb.webp', 29880, '2988', 'Compared to the standard keyboard, the H18 mini keyboard is small and light, dont need to take up big space, take and put down conveniently.', 'Electronic devices / ibikoresho byumuriro'),
(242, 'Generic zero client R1 mini pc', 'download - 2023-04-28T114729.605.jpg', 115990, '11599', 'Zero Client R1 Mini PC, CORTEX QUAD A9 Quad Core up to 1.6GHz, RAM: 1GB, ROM: 8GB, Support HDMI, VGA, RJ45, SPK Ship Time Lead Time: 1-2 Days ', 'Electronic devices / ibikoresho byumuriro'),
(243, 'Generic zero client R1 mini pc', 'download - 2023-04-28T114717.056.jpg', 115990, '11599', 'Zero Client R1 Mini PC, CORTEX QUAD A9 Quad Core up to 1.6GHz, RAM: 1GB, ROM: 8GB, Support HDMI, VGA, RJ45, SPK Ship Time Lead Time: 1-2 Days ', 'Electronic devices / ibikoresho byumuriro'),
(244, 'Generic zero client R1 mini pc', 'ecb65a4e08b7957503f60d5c0d728870e367191c.webp', 115990, '11599', 'Zero Client R1 Mini PC, CORTEX QUAD A9 Quad Core up to 1.6GHz, RAM: 1GB, ROM: 8GB, Support HDMI, VGA, RJ45, SPK Ship Time Lead Time: 1-2 Days ', 'Electronic devices / ibikoresho byumuriro'),
(245, 'Minisforum brand new mini pc', 'download - 2023-04-28T115000.195.jpg', 354000, '35400', 'premium thin and light Mini PC for high-performance gaming. Powered by IntelÂ® Coreâ„¢ i7-11800H and NVIDIA GeForce RTX 3070. Supports 1x M.2 2280', 'Clothing / Imyambaro'),
(246, 'Minisforum brand new mini pc', 'download - 2023-04-28T114955.040.jpg', 590000, '59000', 'premium thin and light Mini PC for high-performance gaming. Powered by IntelÂ® Coreâ„¢ i7-11800H and NVIDIA GeForce RTX 3070. Supports 1x M.2 2280', 'Electronic devices / ibikoresho byumuriro'),
(247, 'Minisforum brand new mini pc', 'download - 2023-04-28T114950.225.jpg', 590000, '59000', 'premium thin and light Mini PC for high-performance gaming. Powered by IntelÂ® Coreâ„¢ i7-11800H and NVIDIA GeForce RTX 3070. Supports 1x M.2 2280', 'Electronic devices / ibikoresho byumuriro'),
(248, 'Minisforum UM 700', 'download (3).png', 700350, '70035', 'AMD Ryzen 7 3750H 4C/8T Windows 11 Desktop Computer, DDR4 16G RAM+256G SSD, HDMI/DP/USB-C 4K@60Hz Output, 1X RJ45 Port, 4x USB3.0 Port, Dual Band WiFi, Radeon Vega 10 Graphics.', 'Electronic devices / ibikoresho byumuriro'),
(249, 'Minisforum UM 700', 'download - 2023-04-28T115208.502.jpg', 1287600, '128760', 'AMD Ryzen 7 3750H 4C/8T Windows 11 Desktop Computer, DDR4 16G RAM+256G SSD, HDMI/DP/USB-C 4K@60Hz Output, 1X RJ45 Port, 4x USB3.0 Port, Dual Band WiFi, Radeon Vega 10 Graphics.', 'Electronic devices / ibikoresho byumuriro'),
(250, 'Minisforum intel celeron N4000', 'download - 2023-04-28T115417.106.jpg', 293650, '29365', 'N40 micro pc comes with Intel Celeron Gemini Lake N4000 Processor(up to 2.6Gz), with Intel UHD Graphics 600, the resolution up to 4096*2160@60Hz and able to play 4K video smoothly.', 'Electronic devices / ibikoresho byumuriro'),
(251, 'Minisforum intel celeron N4000', '71Ms58lddZL._AC_UF1000,1000_QL80_.jpg', 293650, '29365', 'N40 micro pc comes with Intel Celeron Gemini Lake N4000 Processor(up to 2.6Gz), with Intel UHD Graphics 600, the resolution up to 4096*2160@60Hz and able to play 4K video smoothly.', 'Electronic devices / ibikoresho byumuriro'),
(252, 'Minisforum AMD ryzen 7 5700', 'images (48).jpg', 1500000, '150000', 'upgraded version of UM580 Mini PC, which is a small form factor Desktop Tower Computer with an AMD Ryzen 7 5800H (8C/16T up to 4.4Ghz) processor.', 'Electronic devices / ibikoresho byumuriro'),
(253, 'Generic plastic protective storage cover', '91OGtKtMJjL._SX679_.jpg', 3080, '308', 'Generic Plastic Protective Storage Cover Cases For Raspberry Pi 2 3 Model B B Â· Variations: Â· Promotions Â· Delivery & Returns Â· Product details Â· Customer feedback.', 'Electronic devices / ibikoresho byumuriro'),
(254, 'Generic plastic protective storage cover', 'download - 2023-04-28T115832.497.jpg', 3080, '308', 'Generic Plastic Protective Storage Cover Cases For Raspberry Pi 2 3 Model B B Â· Variations: Â· Promotions Â· Delivery & Returns Â· Product details Â· Customer feedback.', 'Electronic devices / ibikoresho byumuriro'),
(255, 'Generic plastic protective storage cover', '1 (1).jpg', 3080, '308', 'Generic Plastic Protective Storage Cover Cases For Raspberry Pi 2 3 Model B B Â· Variations: Â· Promotions Â· Delivery & Returns Â· Product details Â· Customer feedback.', 'Electronic devices / ibikoresho byumuriro'),
(256, 'Generic laptop stand wooden', 'download - 2023-04-28T120109.646.jpg', 36760, '3676', 'Practical. Simplistic. Well constructed. Sturdy. Secure. Easy use and store with laptop. Holds my laptop (15 inch) comfortably', 'Electronic devices / ibikoresho byumuriro'),
(257, 'Generic laptop stand wooden', 'download - 2023-04-28T120054.550.jpg', 36760, '3676', 'Practical. Simplistic. Well constructed. Sturdy. Secure. Easy use and store with laptop. Holds my laptop (15 inch) comfortably', 'Electronic devices / ibikoresho byumuriro'),
(258, 'Generic laptop stand wooden', 'download - 2023-04-28T120046.412.jpg', 36760, '3676', 'Practical. Simplistic. Well constructed. Sturdy. Secure. Easy use and store with laptop. Holds my laptop (15 inch) comfortably', 'Electronic devices / ibikoresho byumuriro'),
(259, 'Generic 5N1 bestway inflatable', '41QbG8jM9tL.jpg', 90000, '9000', 'The 5in1 air sofabed is an ultimate solution for seating and sleeping problems for you and your family.', 'Furniture / Ibikoresho bibajwe mubiti'),
(260, '1/2/3 seater elastic sofa covers slipcover', 'download (11).jpg', 12190, '1219', 'Yeahmart Thick Sofa Covers 1/2/3 Seater Pure Color Sofa Protector Velvet Easy Fit Elastic Fabric Stretch Couch Slipcover (Silver Grey, 2 Seater 145-185cm).', 'Furniture / Ibikoresho bibajwe mubiti'),
(261, '1/2/3 seater elastic sofa covers slipcover', 'download (10).jpg', 12190, '1219', 'Yeahmart Thick Sofa Covers 1/2/3 Seater Pure Color Sofa Protector Velvet Easy Fit Elastic Fabric Stretch Couch Slipcover (Silver Grey, 2 Seater 145-185cm).', 'Furniture / Ibikoresho bibajwe mubiti'),
(263, 'Generic 5N1 bestway inflatable', 'download (13).jpg', 90000, '9000', 'The 5in1 air sofabed is an ultimate solution for seating and sleeping problems for you and your family.', 'Furniture / Ibikoresho bibajwe mubiti'),
(264, 'Generic 5N1 bestway inflatable', 'download (12).jpg', 90000, '9000', 'The 5in1 air sofabed is an ultimate solution for seating and sleeping problems for you and your family.', 'Furniture / Ibikoresho bibajwe mubiti'),
(265, 'sofa slipcover sofa cet stretch', 'download (14).jpg', 87980, '8798', ' a sofa that comes with a removable cover that protects the upholstery. ', 'Furniture / Ibikoresho bibajwe mubiti'),
(266, 'sofa slipcover sofa cet stretch', '81snS5ByDqL._AC_UF894,1000_QL80_.jpg', 87980, '8798', 'a sofa that comes with a removable cover that protects the upholstery', 'Furniture / Ibikoresho bibajwe mubiti'),
(267, 'sofa slipcover sofa cet stretch', '81GYVBhJm0S.jpg', 87980, '8798', 'a sofa that comes with a removable cover that protects the upholstery', 'Furniture / Ibikoresho bibajwe mubiti'),
(268, 'Armchair', 'download (17).jpg', 54900, '5490', 'a comfortable, cushioned chair with a support on each side, where you can rest your arms while you sit.', 'Furniture / Ibikoresho bibajwe mubiti'),
(269, 'Armchair', 'download (16).jpg', 54900, '5490', 'a comfortable, cushioned chair with a support on each side, where you can rest your arms while you sit.', 'Furniture / Ibikoresho bibajwe mubiti'),
(270, 'Armchair', 'download (15).jpg', 54900, '5490', 'a comfortable, cushioned chair with a support on each side, where you can rest your arms while you sit.', 'Furniture / Ibikoresho bibajwe mubiti'),
(271, 'Armchair', 'armchair_374900644.jpg', 54900, '5490', 'a comfortable, cushioned chair with a support on each side, where you can rest your arms while you sit.', 'Furniture / Ibikoresho bibajwe mubiti'),
(272, 'Office Desk', 'MF-22MKD163LeftRet-1000_1024x1024.webp', 1699000, '169900', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(273, 'Office Desk', 'PUR_480-2.jpg', 899000, '89900', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(274, 'Office Desk', 'download - 2023-05-05T073450.624.jpg', 1699000, '169900', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(275, 'Office Desk', 'download - 2023-05-05T073441.317.jpg', 899000, '89900', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(276, 'Brown wooden home office desk', 'download - 2023-05-05T074516.503.jpg', 159000, '15900', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(277, 'Temperature office desk', 'images (51).jpg', 790000, '79000', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(278, 'Skater office desk', 'images (50).jpg', 3285000, '328500', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(279, 'Cheap dining table', 'HTB1kNvPKFXXXXaiXVXXq6xXFXXXM.jpg', 49000, '4900', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(280, 'IANIYA 5-piece tempered glass dining', 'images (54).jpg', 209000, '20900', 'piece of furniture with a flat table-style work surface used in a school, office, home or the like for academic, professional or domestic activities such as reading, writing, or using equipment such as a computer.', 'Furniture / Ibikoresho bibajwe mubiti'),
(281, 'Direct sale full solid wood ', 'download - 2023-05-05T075542.109.jpg', 495000, '49500', 'table, especially one seating several persons, where meals are served and eaten, especially the major or more formal meals.', 'Furniture / Ibikoresho bibajwe mubiti'),
(282, 'Hudson dining table set', 'U7a6567716c4a4f3393d4f8fbbc277679H.jpg', 436000, '43600', 'table, especially one seating several persons, where meals are served and eaten, especially the major or more formal meals.', 'Clothing / Imyambaro'),
(283, 'Bernice Study desk Oak', 'images (51).jpg', 297000, '29700', 'table, especially one seating several persons, where meals are served and eaten, especially the major or more formal meals.', 'Furniture / Ibikoresho bibajwe mubiti');

-- --------------------------------------------------------

--
-- Table structure for table `prod_comments`
--

CREATE TABLE `prod_comments` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prod_comments`
--

INSERT INTO `prod_comments` (`id`, `email`, `message`, `date`) VALUES
(2, 'hhirwa1390@stu.kemu.ac.ke', 'Thank you, I am satisfied enough ', '2023-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `subcontent` varchar(350) NOT NULL,
  `content` longtext NOT NULL,
  `date_release` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `title`, `video`, `subcontent`, `content`, `date_release`, `type`, `category`) VALUES
(10, 'Communication to married couple', 'communication2.mp4', 'Sarah has been married to john for 2 years and they have not been able to give birth yet, as far as their culture is concerned, the woman is the one to blame for this unfortunate. ', '<h4><strong>Introduction</strong></h4><p>The word communication has different meanings depending on the context it is being used in. however, in this paper, we shall use this term in the context of relationship or rather marriage. This paper will discuss the following sub-topics. The meaning of communication among married couples, importance of good communication, faulty assumptions, and issues associated to communication, and how to improve communication.&nbsp;</p><p><strong>What is communication?</strong></p><p>Communication simply refers to the process of transferring information from one place/person to another. Communication to married couples can possess furthermore meaning due to the nature of relation. Young couple in relationship may not experience more difficulties with communication. Romance and clinging are still new and sweet, people donâ€™t argue most of the time. As time passes, lovers experience some sort of disturbances in their relationship due to challenges that arises. Some of these challenges may be related to poor communication.</p><p>For instance, Sarah has been married to john for 2 years and they have not been able to give birth yet, as far as their culture is concerned, the woman is the one to blame for this unfortunate. Sarah, also believes that sheâ€™s the one to take the blame. She has been trying all possible ways she can use to be able to conceive from traditional medicine to different gynecologists. Unfortunately, none of them seemed to respond. To cut story short, turns out that the man was fearing to disclose that he was the one not able to start a pregnancy with his partner.</p>', '2023-05-01', 'consultation', 'Communication / Kuganira'),
(16, 'Money makes loss the friends.', 'money.mp4', 'Money can sometimes strain or even lead to the loss of friendships in different ways let us look some of them. ', 'MONEY MAKES YOU LOSS FRIEND Money in a friendship should not overshadow the emotional connection and mutual support. Genuine friendships are built on trust, respect, and shared values, and money should not be the sole determinant of the friendship\'s worth.  Money can sometimes strain or even lead to the loss of friendships in different ways let us look some of them.  Financial disputes: Disagreements over money can arise when friends borrow or lend money to each other. If one friend fails to repay a loan or there are disputes over repayment terms, it can lead to resentment, arguments, and the decline of the friendship. Lesson: if you friends borrow you money try to make your friendship endless and strong, don’t give them all as they ask, give them less than what they ask and that money will define your friendship and it will be easy to forget about it once they fail to repay.  Lifestyle disparities: Significant differences in financial situations can create a rift between friends. For example, if one friend consistently earns significantly more or less money than the other, it can lead to feelings of jealousy, inadequacy, or an inability to relate to each other\'s lifestyles. Over time, these disparities can strain the friendship and create a sense of imbalance.  Lesson: if you earns good money than your friends try to communicate first than them and share with them your ideas.  Conflicting financial priorities: Money-related choices and priorities can differ among friends. For instance, if one friend prioritizes saving for the future, while the other prefers to spend lavishly on immediate gratification, it can create tension and differences in values. These conflicting views on money can make it difficult for the friends to understand and support each other, leading to strained relationships. Lesson: friendship does not mean spending all your money to your friends for showing them how your care about them, train your friends saving for the future and spending money in necessary things.  Borrowing and lending issues: Lending money to a friend can become complicated, especially if expectations and repayment terms are not clearly defined. When loans are not repaid as agreed upon or if the borrower consistently relies on the lender for financial support, it can create resentment, mistrust, and strain the friendship.  Materialistic attitudes: If a friend becomes excessively materialistic or constantly focuses on money, it can change the dynamics of the friendship. When monetary values overshadow personal connections, genuine friendship can be compromised. Other friends may feel used or see their relationship reduced to financial transactions, which can lead to distance and the eventual loss of the friendship.  It\'s important to note that money itself does not cause the loss of a friend, but rather how it is handled within the friendship. Open communication, setting clear boundaries, and mutual understanding of each other\'s financial situations can help prevent money-related conflicts and preserve friendships.  How you should use money for developing friendship. Developing genuine friendships based solely on money can be challenging because authentic friendships typically require shared interests, emotional connection, trust, and mutual support. While money can facilitate certain activities or opportunities, it\'s important to focus on building relationships that go beyond financial transactions. Here are some tips for developing friendships:  Shared Interests: Engage in activities or join groups where you can meet people who share similar interests. This can be a hobby, a sports club, a volunteering opportunity, or any other activity that allows you to connect with others on a personal level.  Be Genuine: Show genuine interest in getting to know others and be yourself. Authenticity is key in building meaningful relationships. Focus on forming connections based on common values and experiences rather than financial status.  Mutual Support: Offer support and be there for your friends in both good and challenging times. Show empathy, listen actively, and provide help when needed. Friendship is built on mutual care and support.  Equal Give-and-Take: In friendships, it\'s important to have a balanced give-and-take dynamic. Avoid situations where one person feels used or taken advantage of due to financial disparities. Focus on non-material aspects of friendship, such as emotional support and companionship.  Avoid Transactional Relationships: Steer clear of relationships where money becomes the primary basis of interaction. Seek out friendships that are based on genuine connection and shared values rather than financial transactions.  Open Communication: Maintain open and honest communication with your friends. Talk about your expectations, boundaries, and concerns. Discussing money matters openly can help prevent misunderstandings and foster a healthier friendship.  Remember, true friendships are built on trust, shared experiences, and emotional connection. While money can facilitate certain aspects of friendship, it should not be the foundation of your relationships. Focus on building connections based on mutual understanding, respect, and support.', '2023-05-21', 'consultation', 'Money / Amafaranga'),
(17, 'A small lie destroy trust.', 'lie.mp4', 'Telling a lie, regardless of its size, can erode trust between personal to personal. Trust is built on honesty and transparency, so when someone tells even a small lie, it can raise doubts about their credibility and integrity.', '', '2023-05-21', 'consultation', 'Communication / Kuganira');

-- --------------------------------------------------------

--
-- Table structure for table `shopuser`
--

CREATE TABLE `shopuser` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(4) NOT NULL,
  `phone` int(9) NOT NULL,
  `product` text NOT NULL,
  `address` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopuser`
--

INSERT INTO `shopuser` (`id`, `name`, `email`, `code`, `phone`, `product`, `address`, `image1`, `image2`, `image3`, `status`) VALUES
(33, 'Janviere shop', 'janvishoesandbags@gmail.com', '+254', 723640338, 'Shoes / Inkweto, bags / Ibikapu', 'Nairobi, Embakassi standard drive', '', '', '', 'approved'),
(35, 'pierra outfit collection', 'uwapiera88@gmail.com', '+254', 759585735, 'Clothing / Imyambaro, Shoes / Inkweto, bags / Ibikapu', 'Meru, kemu scholars road', '', '', '', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'hubert hirwa', 'hhirwa1390@stu.kemu.ac.ke', 'Reslyyolly123@', 'admin'),
(2, 'jack Uwimana', 'jack123.dontmiss@gmail.com', '22233', 'staff'),
(3, 'staff', 'venustemukantwari@gmail.com', '123', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(10) NOT NULL,
  `share_topic` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `subcontent` varchar(150) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`) VALUES
(1, 'hubert yolly', 'hirwa1998.hubert@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_categ`
--
ALTER TABLE `admin_categ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apointment`
--
ALTER TABLE `apointment`
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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dontmiss_category`
--
ALTER TABLE `dontmiss_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hcomment`
--
ALTER TABLE `hcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_comments`
--
ALTER TABLE `prod_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopuser`
--
ALTER TABLE `shopuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_categ`
--
ALTER TABLE `admin_categ`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `apointment`
--
ALTER TABLE `apointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dontmiss_category`
--
ALTER TABLE `dontmiss_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hcomment`
--
ALTER TABLE `hcomment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `prod_comments`
--
ALTER TABLE `prod_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shopuser`
--
ALTER TABLE `shopuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
