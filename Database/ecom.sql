-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 07:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `Order_ID` int(150) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(250) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quentity` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buy_product`
--

CREATE TABLE `buy_product` (
  `Order_ID` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quentity` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy_product`
--

INSERT INTO `buy_product` (`Order_ID`, `product_id`, `product_name`, `price`, `size`, `quentity`, `Date`) VALUES
(16, '#6704Men Underwear.', 'Men Underwear.', '588', 'XXL', '1', '2023-05-04'),
(16, '#12433classy-graceful-women-jeans', 'classy-graceful-women-jeans', '599', 'XL', '1', '2023-05-04'),
(17, '#34301  Add to Cart  Buy Now 6 Similar Products Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s', '  Add to Cart  Buy Now 6 Similar Products Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Appli', '499', 'L', '5', '2023-05-04'),
(17, '#50064princess-trendy-girls-frocks-dresses', 'princess-trendy-girls-frocks-dresses', '499', 'L', '3', '2023-05-04'),
(18, '#39062Pretty Fabulous Women & Tunics', 'Pretty Fabulous Women & Tunics', '299', 'XXL', '1', '2023-05-04'),
(18, '#41883I.T Kids Dress for Boys | Printed Hoisery Cotton T shirt & Short Set', 'I.T Kids Dress for Boys | Printed Hoisery Cotton T shirt & Short Set', '499', 'L', '1', '2023-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(15) NOT NULL,
  `category` varchar(255) NOT NULL,
  `category_list` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `category`, `category_list`, `date`) VALUES
(10, 'Men', 'men', '2023-04-24'),
(11, 'Women', 'women', '2023-04-24'),
(12, 'Kid\'s', 'Kid\'s', '2023-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cutomers_id` varchar(255) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `Mobile`, `password`, `cutomers_id`, `Action`, `Date`) VALUES
(5, 'vandana', 'vandana@gmail.com', '07387545206', '$2y$10$OFHzKLYLAs/spDPVSUZyfuzw8jEIEFAeYNl/P1YQVj8MATavxjSYa', '#6322vandana', 'Active', '2023-05-01'),
(7, 'vaibhav', 'vaibhav@gmail.com', '7387545206', '$2y$10$smQtoGqtds8jF6uqolPpcOPoBoVLuczSHJ8H6ypiegRKH9Yhc5.ae', '#5845vaibhav', 'Active', '2023-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `My_id` varchar(255) NOT NULL,
  `my_name` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`ID`, `Name`, `email`, `mobile`, `user_id`, `My_id`, `my_name`, `Date`) VALUES
(1, 'Vaibhav Shmarao Pawar', 'vaibhav@gmail.com', '', '', '', '', '2023-04-23'),
(2, 'Vaibhav Shmarao Pawar', 'vinod@gmail.com', '7387545206', '#Vaibhav82666', '#Vinod39362', 'VinodShamraoPawar', '2023-04-23'),
(3, 'Vaibhav Shmarao Pawar', 'vinod@gmail.com', '7387545206', '#Vaibhav82666', '#Vinod39362', 'VinodShamraoPawar', '2023-04-23'),
(4, 'Vinod Shamrao Pawar', 'vaibhav@gmail.com', '9775088904', '#Vinod39362', '#Vaibhav82666', 'VaibhavShmaraoPawar', '2023-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(15) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `Pro_category` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `info` varchar(5255) NOT NULL,
  `product_id` varchar(5255) NOT NULL,
  `file` varchar(566) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `category`, `sub_category`, `Pro_category`, `count`, `product_name`, `product_price`, `product_slug`, `info`, `product_id`, `file`, `Date`) VALUES
(35, 'Men', 'Men Ethnic', 'Kurta', '', 'KURTA ONLY FOR MENS IN COTTON BLEND', '299', 'An ethnic kurta for , for festive and marriage season  Country of Origin : India', 'Product Details\r\nName : KURTA ONLY FOR MENS IN COTTON BLEND\r\n\r\nFabric : Cotton Blend\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nPattern : Solid\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nS (Length Size : 34 in)\r\n\r\nM (Length Size : 36 in)\r\n\r\nL (Length Size : 38 in)\r\n\r\nXL (Length Size : 40 in)\r\n\r\nXXL (Length Size : 42 in)\r\n\r\nAn ethnic kurta for , for festive and marriage season\r\n\r\nCountry of Origin : India\r\n\r\n', '#22309KURTA ONLY FOR MENS IN COTTON BLEND', 'Product/m-1.jpeg', '2023-04-24'),
(36, 'Men', 'Men Ethnic', 'Kurta Set', '', 'Men\'s Cotton Kurta and Payjama', '474', 'An ethnic kurta for , for festive and marriage season  Country of Origin : India', 'Name : Men\'s Cotton Kurta and Payjama (Maroon-Set)\r\n\r\nTop Fabric : Cotton Blend\r\n\r\nBottom Fabric : Cotton\r\n\r\nScarf Fabric : No Scarf\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nBottom Type : Straight Pajama\r\n\r\nStitch Type : Stitched\r\n\r\nPattern : Striped\r\n\r\nSizes : \r\n\r\nS (Chest Size : 36 in, Top Length Size: 36 in, Top Hip Size: 38 in, Bottom Waist Size: 30 in, Bottom Length Size: 42 in)\r\n\r\nM (Chest Size : 38 in, Top Length Size: 38 in, Top Hip Size: 40 in, Bottom Waist Size: 30 in, Bottom Length Size: 42 in)\r\n\r\nL (Chest Size : 40 in, Top Length Size: 40 in, Top Hip Size: 42 in, Bottom Waist Size: 32 in, Bottom Length Size: 42 in)\r\n\r\nXL (Chest Size : 42 in, Top Length Size: 40 in, Top Hip Size: 44 in, Bottom Waist Size: 32 in, Bottom Length Size: 42 in)\r\n\r\nXXL (Chest Size : 44 in, Top Length Size: 41 in, Top Hip Size: 46 in, Bottom Waist Size: 36 in, Bottom Length Size: 42 in)\r\n\r\n(1) Fit Type : Regular (2) Care Instructions: Dry Clean Only (3) Mandarin Collar (4) Fabric: Cotton Blend (5) Sleeve : Full sleeves (6) Full Sleeves Kurta With 2 Side Pockets (7) Product Size Guidance: Please refer to CHEST size measurement in the SIZE CHART for your correct size.\r\n\r\nCountry of Origin : India', '#4254Men\'s Cotton Kurta and Payjama', 'Product/men.jpeg', '2023-04-24'),
(37, 'Men', 'Men Ethnic', 'Kurta Set', '', 'Men\'s Cotton Kurta and Payjama ', '499', 'CHEST size measurement in the SIZE CHART for your correct size.', 'Name : Men\'s Cotton Kurta and Payjama (Maroon-Set)\r\n\r\nTop Fabric : Cotton Blend\r\n\r\nBottom Fabric : Cotton\r\n\r\nScarf Fabric : No Scarf\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nBottom Type : Straight Pajama\r\n\r\nStitch Type : Stitched\r\n\r\nPattern : Striped\r\n\r\nSizes : \r\n\r\nS (Chest Size : 36 in, Top Length Size: 36 in, Top Hip Size: 38 in, Bottom Waist Size: 30 in, Bottom Length Size: 42 in)\r\n\r\nM (Chest Size : 38 in, Top Length Size: 38 in, Top Hip Size: 40 in, Bottom Waist Size: 30 in, Bottom Length Size: 42 in)\r\n\r\nL (Chest Size : 40 in, Top Length Size: 40 in, Top Hip Size: 42 in, Bottom Waist Size: 32 in, Bottom Length Size: 42 in)\r\n\r\nXL (Chest Size : 42 in, Top Length Size: 40 in, Top Hip Size: 44 in, Bottom Waist Size: 32 in, Bottom Length Size: 42 in)\r\n\r\nXXL (Chest Size : 44 in, Top Length Size: 41 in, Top Hip Size: 46 in, Bottom Waist Size: 36 in, Bottom Length Size: 42 in)\r\n\r\n(1) Fit Type : Regular (2) Care Instructions: Dry Clean Only (3) Mandarin Collar (4) Fabric: Cotton Blend (5) Sleeve : Full sleeves (6) Full Sleeves Kurta With 2 Side Pockets (7) Product Size Guidance: Please refer to CHEST size measurement in the SIZE CHART for your correct size.\r\n\r\nCountry of Origin : India', '#53948Men\'s Cotton Kurta and Payjama ', 'Product/men-2.jpeg', '2023-04-24'),
(38, 'Men', 'Men Ethnic', 'Kurta Set', '', 'Kurta Pyjama For Men White Branded Soft Cotton', '599', 'Kurta Pyjama For Men White Branded Soft Cotton', 'Name : Kurta Pyjama For Men White Branded Soft Cotton\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nPattern : Solid\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nXXS (Length Size : 34 in)\r\n\r\nXS (Length Size : 34 in)\r\n\r\nS (Length Size : 36 in)\r\n\r\nM (Length Size : 38 in)\r\n\r\nL (Length Size : 40 in)\r\n\r\nXL (Length Size : 42 in)\r\n\r\nXXL (Length Size : 44 in)\r\n\r\nXXXL (Length Size : 48 in)\r\n\r\nBuy Now Salwar Kurta White At Lowest Guaranteed Price From Any Other Online Platform and Seller\r\n\r\nSize\r\n\r\nS 36 INCH.\r\n\r\nM 38\r\n\r\nL 40\r\n\r\nXL 42\r\n\r\nXXL 44\r\n\r\nXXXL 46', '#71859Kurta Pyjama For Men White Branded Soft Cotton', 'Product/men-3.jpeg', '2023-04-24'),
(39, 'Men', 'Men Ethnic', 'Kurta', '', 'Kurta for men', '266', 'An ethnic kurta for , for festive and marriage season  Country of Origin : India', 'Name : Kurta for men\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nPattern : Embroidered\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nS (Chest Size : 36 in, Length Size: 40 in, Waist Size: 38 in)\r\n\r\nM (Chest Size : 38 in, Length Size: 41 in, Waist Size: 40 in)\r\n\r\nL (Chest Size : 40 in, Length Size: 42 in, Waist Size: 42 in)\r\n\r\nXL (Chest Size : 42 in, Length Size: 43 in, Waist Size: 44 in)\r\n\r\nCountry of Origin : India', '#68692Kurta for men', 'Product/men-4.jpeg', '2023-04-24'),
(40, 'Men', 'Men Western', 'Shirt', '', 'Vellical Men Shirts', '499', 'Vellical Men Shirts', 'Name : Vellical Men Shirts\r\n\r\nFabric : Cotton Blend\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nPattern : Checked\r\n\r\nNet Quantity (N) : 1\r\n\r\nSizes : \r\n\r\nM (Chest Size : 40 in, Length Size: 29.5 in)\r\n\r\nVELLICAL PREMIUM BRANDED SHIRTS FOR MENS WEAR\r\n\r\nCountry of Origin : India\r\n\r\n', '#55442Vellical Men Shirts', 'Product/sh-1.jpeg', '2023-04-24'),
(41, 'Men', 'Men Western', 'Shirt', '', 'COOFANDY Men\'s Casual Linen Button Down Shirt Short Sleeve Beach Shirt', '455', 'Shirt Short Sleeve Beach Shirt', 'Name : Vellical Men Shirts\r\n\r\nFabric : Cotton Blend\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nPattern : Checked\r\n\r\nNet Quantity (N) : 1\r\n\r\nSizes : \r\n\r\nM (Chest Size : 40 in, Length Size: 29.5 in)\r\n\r\nVELLICAL PREMIUM BRANDED SHIRTS FOR MENS WEAR\r\n\r\nCountry of Origin : India\r\n\r\n', '#33829COOFANDY Men\'s Casual Linen Button Down Shirt Short Sleeve Beach Shirt', 'Product/sh-2.jpeg', '2023-04-24'),
(42, 'Men', 'Men Western', 'Shirt', '', 'Urbane Sensational Men Shirts', '328', 'Urbane Sensational Men Shirts', 'Name : Urbane Sensational Men Shirts\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nPattern : Striped\r\n\r\nNet Quantity (N) : 1\r\n\r\nSizes : \r\n\r\nM (Chest Size : 38 in, Length Size: 28 in)\r\n\r\nL (Chest Size : 40 in, Length Size: 28 in)\r\n\r\nXL (Chest Size : 42 in, Length Size: 29.5 in)\r\n\r\nXXL (Chest Size : 44 in, Length Size: 30.5 in)\r\n\r\nXXXL (Chest Size : 46 in, Length Size: 32 in)\r\n\r\nCountry of Origin : India', '#78824Urbane Sensational Men Shirts', 'Product/shirt-4.png', '2023-04-24'),
(43, 'Men', 'Men Ethnic', 'Jackets', '', 'Fancy Men Ethnic Jackets', '499', 'Fancy Men Ethnic Jackets', 'Name : Fancy Men Ethnic Jackets\r\n\r\nFabric : Cotton Slub\r\n\r\nSleeve Length : Sleeveless\r\n\r\nPattern : Solid\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nM (Length Size : 24 in)\r\n\r\nL (Length Size : 25 in)\r\n\r\nXL (Length Size : 26 in)\r\n\r\nFancy Party wear Ethnic Modi jacket / Nehru jacket / koti\r\n\r\nCountry of Origin : India\r\n\r\nCountry of Origin : India', '#10500Fancy Men Ethnic Jackets', 'Product/su-1.jpeg', '2023-04-24'),
(44, 'Men', 'Men Ethnic', 'Jackets', '', '  Add to Cart  Buy Now 5 Similar Products Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi', '586', '  Add to Cart  Buy Now 5 Similar Products Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi', 'Product Details\nName : Men ethnic nehru modi jacket koti double button\n\nFabric : Cotton Slub\n\nSleeve Length : Sleeveless\n\nPattern : Solid\n\nCombo of : Single\n\nSizes : \n\nS (Length Size : 24 in)\n\nM (Length Size : 25 in)\n\nL (Length Size : 26 in)\n\nXL (Length Size : 27 in)\n\nFancy Party wear Men Ethnic Modi jackets / Nehru jackets / koti\n\nCountry of Origin : India', '#4221  Add to Cart  Buy Now 5 Similar Products Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button Men ethnic nehru modi jacket koti double button', 'Product/su-2.jpeg', '2023-04-24'),
(45, 'Men', 'Men Ethnic', 'Jackets', '', 'Fancy Men Ethnic Jackets', '586', 'Fancy Men Ethnic Jackets', 'Product Details\r\nName : Men ethnic nehru modi jacket koti double button\r\n\r\nFabric : Cotton Slub\r\n\r\nSleeve Length : Sleeveless\r\n\r\nPattern : Solid\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nS (Length Size : 24 in)\r\n\r\nM (Length Size : 25 in)\r\n\r\nL (Length Size : 26 in)\r\n\r\nXL (Length Size : 27 in)\r\n\r\nFancy Party wear Men Ethnic Modi jackets / Nehru jackets / koti\r\n\r\nCountry of Origin : India', '#48369Fancy Men Ethnic Jackets', 'Product/suit-3.jpeg', '2023-04-24'),
(46, 'Men', 'Men Western', 'InnerWare', '', 'BS DAS Mens Cotton Brief, Underwear for Men, Men Cotton Brief Underwear', '588', 'BS DAS Mens Cotton Brief, Underwear for Men, Men Cotton Brief Underwear', 'Name : BS DAS Mens Cotton Brief, Underwear for Men, Men Cotton Brief Underwear\r\n\r\nFabric : Cotton\r\n\r\nColor : Blue\r\n\r\nOccasion : Casual\r\n\r\nPattern : Solid\r\n\r\nNet Quantity (N) : 5\r\n\r\nSuper soft 100% combed cotton fabric\r\n\r\nSoft waistband layered with cotton for added comfort\r\n\r\nDouble layered contoured pouch for extra absorbency\r\n\r\nSmooth and comfortable grip; Pack Contains : 5 Pcs Trunk (Color may vary)\r\n\r\nBottom Style : Trunks; Pattern Type: Solid; Pattern Name: Solid; Age Range Description: Adult\r\n\r\nSizes : \r\n\r\nS, M, L, XL\r\n\r\nCountry of Origin : India', '#16134BS DAS Mens Cotton Brief, Underwear for Men, Men Cotton Brief Underwear', 'Product/man-in2.jpeg', '2023-04-24'),
(47, 'Men', 'Men Western', 'InnerWare', '', 'Men Underwear.', '588', 'Men Underwear.', 'Name : Men Underwear.\r\n\r\nFabric : Nylon\r\n\r\nColor : Multicolor\r\n\r\nOccasion : Casual\r\n\r\nPattern : Checked\r\n\r\nNet Quantity (N) : 3', '#6704Men Underwear.', 'Product/inner-1.png', '2023-04-24'),
(48, 'Men', 'Men Western', 'InnerWare', '', 'Men Underwear.', '785', 'Men Underwear.', 'Name : Men Underwear.\r\n\r\nFabric : Nylon\r\n\r\nColor : Multicolor\r\n\r\nOccasion : Casual\r\n\r\nPattern : Checked\r\n\r\nNet Quantity (N) : 3', '#14338Men Underwear.', 'Product/inner-3.png', '2023-04-24'),
(49, 'Men', 'Men Western', 'InnerWare', '', 'Comfy Men Vest', '216', 'Comfy Men Vest', 'Name : Comfy Men Vest\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Sleeveless\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : 1\r\n\r\nAdd on : No Add Ons\r\n\r\nRivazo Men\'s vest comes with cotton combed fabric dyed with bio dies. Rich biowashed cotton with a trendy vest over it gives the perfect feel\r\n\r\nSizes : \r\n\r\nS (Chest Size : 36 in, Length Size: 26 in)\r\n\r\nM (Chest Size : 38 in, Length Size: 27 in)\r\n\r\nL (Chest Size : 40 in, Length Size: 27 in)\r\n\r\nXL (Chest Size : 42 in, Length Size: 28 in)\r\n\r\nCountry of Origin : India', '#47041Comfy Men Vest', 'Product/in-1.png', '2023-04-24'),
(50, 'Men', 'Men Western', 'InnerWare', '', 'Men\'s Premium Cotton Modal Round Neck Ace Vest ', '236', 'Men\'s Premium Cotton Modal Round Neck Ace Vest ', 'Product Details\r\nName : Men\'s Premium Cotton Modal Round Neck Ace Vest ( Pack of 4)(3XL-105)\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Sleeveless\r\n\r\nPattern : Solid\r\n\r\nNet Quantity (N) : 4\r\n\r\nAdd on : No Add Ons\r\n\r\nSizes : \r\n\r\nS\r\n\r\nCountry of Origin : India', '#36563Men\'s Premium Cotton Modal Round Neck Ace Vest ', 'Product/inn-2.png', '2023-04-24'),
(51, 'Men', 'Men Western', 'InnerWare', '', 'Smarty Men Vest', '175', 'Smarty Men Vest', 'Name : Smarty Men Vest\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Sleeveless\r\n\r\nPattern : Solid\r\n\r\nNet Quantity (N) : 1\r\n\r\nAdd on : No Add Ons\r\n\r\nTHIS VEST IS MADE BY 100% COTTON\r\n\r\nSizes : \r\n\r\nM (Chest Size : 38 in, Length Size: 27 in)\r\n\r\nCountry of Origin : India', '#57759Smarty Men Vest', 'Product/inn-3.png', '2023-04-24'),
(52, 'Women', 'Woman Ethnic', 'Kurta', '', 'Womans Kurta', '499', 'Woman\'s Kurta', 'Product Details\r\nName : Kurtis\r\n\r\nFabric : Rayon\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nPattern : Printed\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nS, M (Bust Size : 38 in)\r\n\r\nL (Bust Size : 40 in)\r\n\r\nXL (Bust Size : 42 in)\r\n\r\nXXL (Bust Size : 44 in)\r\n\r\n100% reyoan fabrick charming look with gold print\r\n\r\nCountry of Origin : Indi', '#93428Womans Kurta', 'Product/set-1.jpeg', '2023-04-25'),
(53, 'Women', 'Woman Ethnic', 'Kurta', '', 'charvi-superior-kurtis/', '366', 'charvi-superior-kurtis/', 'Name : Kurti\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Sleeveless\r\n\r\nPattern : Printed\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nS (Bust Size : 36 in, Size Length: 43 in)\r\n\r\nM (Bust Size : 38 in, Size Length: 43 in)\r\n\r\nL (Bust Size : 40 in, Size Length: 43 in)\r\n\r\nXL (Bust Size : 42 in, Size Length: 43 in)\r\n\r\nXXL (Bust Size : 44 in, Size Length: 43 in)\r\n\r\nCountry of Origin : India', '#80734charvi-superior-kurtis/', 'Product/set-4.jpeg', '2023-04-25'),
(54, 'Women', 'Woman Ethnic', 'Kurta', '', 'aagyeyi-refined-kurtis', '599', 'aagyeyi-refined-kurtis', 'Product Details\r\nName : LADYLAZ SELFIE KURTIS\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nPattern : Solid\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nL (Bust Size : 40 in, Size Length: 45 in)\r\n\r\nXXXL (Bust Size : 46 in, Size Length: 45 in)\r\n\r\nCountry of Origin : India', '#3022aagyeyi-refined-kurtis', 'Product/set-2.jpeg', '2023-04-25'),
(55, 'Women', 'Woman Western', 'Kurta', '', 'LADYLAZ SELFIE KURTIS', '599', 'LADYLAZ SELFIE KURTIS', 'Product Details\r\nName : LADYLAZ SELFIE KURTIS\r\n\r\nFabric : Cotton\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nPattern : Solid\r\n\r\nCombo of : Single\r\n\r\nSizes : \r\n\r\nL (Bust Size : 40 in, Size Length: 45 in)\r\n\r\nXXXL (Bust Size : 46 in, Size Length: 45 in)\r\n\r\nCountry of Origin : India', '#58589LADYLAZ SELFIE KURTIS', 'Product/set-3.jpeg', '2023-04-25'),
(56, 'Women', 'Woman Ethnic', 'Kurta Set', '', 'Latest Stylish Regular Fit Causal Reyone Round Necked Embroidered Mirror Work Women\'s Kurta with Sharara Set', '499', 'Latest Stylish Regular Fit Causal Reyone Round Necked Embroidered Mirror Work Women\'s Kurta with Sharara Set', 'Name : Latest Stylish Regular Fit Causal Reyone Round Necked Embroidered Mirror Work Women\'s Kurta with Sharara Set\r\n\r\nKurta Fabric : Viscose Rayon\r\n\r\nBottomwear Fabric : Viscose Rayon\r\n\r\nFabric : Viscose Rayon\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nSet Type : Kurta With Dupatta And Bottomwear\r\n\r\nBottom Type : Sharara\r\n\r\nPattern : Embroidered\r\n\r\nNet Quantity (N) : Single\r\n\r\nSizes : \r\n\r\nM (Bust Size : 38 in, Shoulder Size: 14.5 in, Kurta Length Size: 38 in, Bottom Waist Size: 32 in, Bottom Hip Size: 40 in)\r\n\r\nHeer bey is a Modern Casual brand for Woman, which merges Indian and western sensibilities with an emphasis on distinctive design and styling. Understanding the changing fashion requirements of the Woman, we felt the need of one-stop solution for all style queries. with the same thought, we introduced the brand Heer bey. Keeping the pace with ever-evolving demand of fashion-conscious genre, we have also explored trendy occasion wear.\r\n\r\nCountry of Origin : India', '#67510Latest Stylish Regular Fit Causal Reyone Round Necked Embroidered Mirror Work Women\'s Kurta with Sharara Set', 'Product/k-set4.png', '2023-04-25'),
(57, 'Women', 'Woman Ethnic', 'Kurta Set', '', 'DECIZE WOMEN KURTA SET WITH SHARARA', '588', 'DECIZE WOMEN KURTA SET WITH SHARARA', 'Product Details\r\nName : DECIZE WOMEN KURTA SET WITH SHARARA\r\n\r\nKurta Fabric : Georgette\r\n\r\nBottomwear Fabric : Georgette\r\n\r\nFabric : Georgette\r\n\r\nSleeve Length : Sleeveless\r\n\r\nSet Type : Kurta With Dupatta And Bottomwear\r\n\r\nBottom Type : Sharara\r\n\r\nPattern : Embellished\r\n\r\nNet Quantity (N) : Single\r\n\r\nSizes : \r\n\r\nS, M (Bust Size : 38 in, Shoulder Size: 14.5 in, Kurta Waist Size: 36 in, Duppatta Length Size: 2.2 in)\r\n\r\nL (Bust Size : 40 in, Shoulder Size: 15 in, Kurta Waist Size: 38 in, Duppatta Length Size: 2.2 in)\r\n\r\nXL (Bust Size : 42 in, Shoulder Size: 15.5 in, Kurta Waist Size: 40 in, Duppatta Length Size: 2.2 in)\r\n\r\nXXL (Bust Size : 44 in, Shoulder Size: 16 in, Kurta Waist Size: 42 in, Duppatta Length Size: 2.2 in)\r\n\r\nCountry of Origin : India', '#81047DECIZE WOMEN KURTA SET WITH SHARARA', 'Product/k-set3.png', '2023-04-25'),
(58, 'Women', 'Woman Ethnic', 'Kurta Set', '', 'Khadi cotton kurti pant', '756', 'Khadi cotton kurti pant', 'Product Details\r\nName : Khadi cotton kurti pant\r\n\r\nKurta Fabric : Khadi Cotton\r\n\r\nBottomwear Fabric : Khadi Cotton\r\n\r\nFabric : Khadi Cotton\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nSet Type : Kurta With Bottomwear\r\n\r\nBottom Type : Trousers\r\n\r\nPattern : Striped\r\n\r\nNet Quantity (N) : Single\r\n\r\nSizes : \r\n\r\nM, L, XL, XXL, XXXL\r\n\r\nCountry of Origin : India\r\n\r\nMore Information', '#93505Khadi cotton kurti pant', 'Product/k-set2.png', '2023-04-25'),
(59, 'Women', 'Woman Ethnic', 'Kurta Set', '', 'Shri Ram Women\'s Cotton Blend Straight Blue Printed Kurta with Trouser', '458', 'Shri Ram Women\'s Cotton Blend Straight Blue Printed Kurta with Trouser', 'Product Details\r\nName : Shri Ram Women\'s Cotton Blend Straight Blue Printed Kurta with Trouser\r\n\r\nKurta Fabric : Cotton Blend\r\n\r\nBottomwear Fabric : Cotton Blend\r\n\r\nFabric : No Dupatta\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nSet Type : Kurta With Bottomwear\r\n\r\nBottom Type : Pants\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : Single', '#26589Shri Ram Women\'s Cotton Blend Straight Blue Printed Kurta with Trouser', 'Product/k-set.png', '2023-04-25'),
(60, 'Women', 'Woman Ethnic', 'Sarees', '', 'Amazing Flower Butta Work Sarees With Jacquard Blous', '522', 'Amazing Flower Butta Work Sarees With Jacquard Blous', 'Product Details\r\nName : Amazing Flower Butta Work Sarees With Jacquard Blouse(0.80m).\r\n\r\nSaree Fabric : Art Silk\r\n\r\nBlouse : Running Blouse\r\n\r\nBlouse Fabric : Jacquard\r\n\r\nPattern : Solid\r\n\r\nBlouse Pattern : Same as Border\r\n\r\nNet Quantity (N) : Single\r\n\r\nArt Silk Saree With Big Jacquard Panel and Daimond work,Jacquard Flower Butta,Jacquard Big Lase. Jacquard Blouse(0.80m).Thank you For Choosing Our Brand Product To Wear. We Hope That You Feel too much Better After Purchase Our Product.', '#38227Amazing Flower Butta Work Sarees With Jacquard Blous', 'Product/s-1.jpeg', '2023-04-25'),
(61, 'Women', 'Woman Ethnic', 'Sarees', '', 'Georgette Floral Printed', '236', 'Georgette Floral Printed', 'Product Details\r\nName : Georgette Floral Printed Voilet Saree With blouse\r\n\r\nSaree Fabric : Georgette\r\n\r\nBlouse : Running Blouse\r\n\r\nBlouse Fabric : Georgette\r\n\r\nNet Quantity (N) : Single\r\n\r\nCare Instructions : Hand Wash', '#37291Georgette Floral Printed', 'Product/s-2.jpeg', '2023-04-25'),
(62, 'Women', 'Woman Ethnic', 'Sarees', '', 'Fabwomen Mysore & Art Silk White Colored Saree with Tassels/ Latkans and Blouse', '253', 'Fabwomen Mysore & Art Silk White Colored Saree with Tassels/ Latkans and Blouse', 'Product Details\r\nName : Fabwomen Mysore & Art Silk White Colored Saree with Tassels/ Latkans and Blouse\r\n\r\nSaree Fabric : Art Silk\r\n\r\nBlouse : Separate Blouse Piece\r\n\r\nBlouse Fabric : Art Silk\r\n\r\nPattern : Printed\r\n\r\nBlouse Pattern : Same as Saree\r\n\r\nNet Quantity (N) : Single\r\n\r\nArt Silk Saree With Blouse Piece', '#66204Fabwomen Mysore & Art Silk White Colored Saree with Tassels/ Latkans and Blouse', 'Product/s-3.jpeg', '2023-04-25'),
(63, 'Women', 'Woman Ethnic', 'Sarees', '', 'Designer Lycra Saree With Blouse', '235', 'Designer Lycra Saree With Blouse', 'Product Details\r\nName : Designer Lycra Saree With Blouse\r\n\r\nSaree Fabric : Lycra Blend\r\n\r\nBlouse : Separate Blouse Piece\r\n\r\nBlouse Fabric : Georgette\r\n\r\nPattern : Solid\r\n\r\nBlouse Pattern : Solid\r\n\r\nNet Quantity (N) : Single\r\n\r\nAlluring Sarees , Solid Bollywood Silk Blend Saree ,Embellished Fashion Lycra Blend Saree ,\r\n\r\nSizes : ', '#87346Designer Lycra Saree With Blouse', 'Product/s-4.jpeg', '2023-04-25'),
(64, 'Women', 'Woman Ethnic', 'Sarees', '', 'FABULOUS BANARASI SILK ZARI WORK SAREE', '533', 'FABULOUS BANARASI SILK ZARI WORK SAREE', 'Product Details\r\nName : FABULOUS BANARASI SILK ZARI WORK SAREE\r\n\r\nSaree Fabric : Banarasi Silk\r\n\r\nBlouse : Separate Blouse Piece\r\n\r\nBlouse Fabric : Banarasi Silk\r\n\r\nPattern : Zari Woven\r\n\r\nBlouse Pattern : Zari Woven\r\n\r\nNet Quantity (N) : Single\r\n\r\n5.5 METERS BANARASI SILK ZARI WORK SAREE WITH 0.8 METERS UNSTITCHED BLOUSE PIECE', '#38071FABULOUS BANARASI SILK ZARI WORK SAREE', 'Product/s-5.jpeg', '2023-04-25'),
(65, 'Women', 'Woman Western', 'One piece', '', 'Pretty Fabulous Women & Tunics', '299', 'Pretty Fabulous Women & Tunics', 'Product Details\r\nName : Pretty Fabulous Women & Tunics\r\n\r\nFabric : Rayon\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : 1', '#39062Pretty Fabulous Women & Tunics', 'Product/k-1.jpeg', '2023-04-25'),
(66, 'Women', 'Woman Western', 'One piece', '', 'AAIRA\'S NEW COLLECTION DRESS', '299', 'AAIRA\'S NEW COLLECTION DRESS', 'Product Details\r\nName : AAIRA\'S NEW COLLECTION DRESS\r\n\r\nFabric : Poly Crepe\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nPattern : Colorblocked\r\n\r\nNet Quantity (N) : 1', '#25466AAIRA\'S NEW COLLECTION DRESS', 'Product/k-3.jpeg', '2023-04-25'),
(67, 'Women', 'Woman Western', 'One piece', '', 'classy-retro-women-dresses', '499', 'classy-retro-women-dresses', 'Product Details\r\nName : AAIRA\'S NEW COLLECTION DRESS\r\n\r\nFabric : Poly Crepe\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nPattern : Colorblocked\r\n\r\nNet Quantity (N) : 1', '#68628classy-retro-women-dresses', 'Product/k-2.jpeg', '2023-04-25'),
(68, 'Women', 'Woman Western', 'One piece', '', '  Add to Cart  Buy Now 6 Similar Products Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Appli', '499', '  Add to Cart  Buy Now 6 Similar Products Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Appli', 'Product Details\r\nName : Women\'s Applique Crepe Anarkali Dresses\r\n\r\nFabric : Crepe\r\n\r\nSleeve Length : Long Sleeves\r\n\r\nPattern : Printed', '#34301  Add to Cart  Buy Now 6 Similar Products Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses Women\'s Applique Crepe Anarkali Dresses', 'Product/k-4.jpeg', '2023-04-25'),
(69, 'Women', 'Woman Western', 'pant', '', 'classy-graceful-women-jeans', '599', 'classy-graceful-women-jeans', 'Product Details\r\nName : Solid Denim Single Button mid Waist Rugged Slim Fit Stretchable Ankle Length Jeans for Women/Girls Button Stylish and Casual mid Waist Jeans for Women.', '#12433classy-graceful-women-jeans', 'Product/wb-1.jpeg', '2023-04-25'),
(70, 'Women', 'Woman Western', 'pant', '', 'urbane-fashionista-women-jeans', '499', 'urbane-fashionista-women-jeans', 'Product Details\r\nName : Women\'s slim fit 5 button casual denim Jeans || High Waist ankle Length Jeans || Stretchable High Rise Skinny Fit Jeans for Girls/Ladies\r\n\r\nFabric : Denim\r\n\r\nSurface Styling : Fringed\r\n\r\nNet Quantity (N) : 1', '#54778urbane-fashionista-women-jeans', 'Product/wb-3.jpeg', '2023-04-25'),
(71, 'Women', 'Woman Western', 'pant', '', 'trendy-designer-women-jeans', '488', 'trendy-designer-women-jeans', 'Product Details\r\nName : Jeans\r\n\r\nFabric : Denim\r\n\r\nSurface Styling : Tie-Ups\r\n\r\nNet Quantity (N) : 1', '#22531trendy-designer-women-jeans', 'Product/wb-2.jpeg', '2023-04-25'),
(72, 'Women', 'Woman Western', 'InnerWare', '', 'Pack Of 4 Premium Quality Bra For Women&Girls', '478', 'Pack Of 4 Premium Quality Bra For Women&Girls', 'Product Details\r\nName : Pack Of 4 Premium Quality Bra For Women&Girls\r\n\r\nFabric : Cotton Blend\r\n\r\nPrint or Pattern Type : Solid\r\n\r\nPadding : Non Padded\r\n\r\nType : Everyday Bra\r\n\r\nWiring : Non Wired\r\n\r\nSeam Style : Seamless\r\n\r\nNet Quantity (N) : 6\r\n\r\nAdd On : Straps\r\n\r\n', '#41391Pack Of 4 Premium Quality Bra For Women&Girls', 'Product/w-5.jpeg', '2023-04-25'),
(73, 'Women', 'Woman Western', 'InnerWare', '', 'Padded Bra Combo ', '666', 'Padded Bra Combo ', 'Product Details\r\nName : Padded Bra Combo of 4\r\n\r\nFabric : Hosiery\r\n\r\nPrint or Pattern Type : Solid\r\n\r\nPadding : Padded\r\n\r\nType : Everyday Bra\r\n\r\nWiring : Non Wired\r\n\r\nSeam Style : Seamless\r\n\r\nNet Quantity (N) : 4\r\n\r\nAdd On : Hooks', '#17174Padded Bra Combo ', 'Product/wi-6.jpeg', '2023-04-25'),
(74, 'Women', 'Woman Western', 'InnerWare', '', 'LIGHT COLOUR PANTY COMBO PAKE', '455', 'LIGHT COLOUR PANTY COMBO PAKE', 'Product Details\r\nName : LIGHT COLOUR PANTY COMBO PAKE\r\n\r\nFabric : Cotton\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : 3\r\n\r\nSizes : \r\n\r\nXXS, M (Waist Size : 32 in)\r\n\r\nL (Waist Size : 34 in)\r\n\r\nCOMFORTABLE COTTON FABRIC : This women\'s high waisted panties contain 100% combed. They are soft, comfortable and skin-friendly.Made from high quality stretch cotton Material to ensure the comfort, breathability and durability. The soft material makes feel safe to wear .', '#34014LIGHT COLOUR PANTY COMBO PAKE', 'Product/wi-4.jpeg', '2023-04-25'),
(75, 'Women', 'Woman Western', 'InnerWare', '', 'fancy women breifs', '236', 'fancy women breifs', 'Product Details\r\nName : fancy women breifs\r\n\r\nFabric : Cotton\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : 3', '#30766fancy women breifs', 'Product/wn-2.jpeg', '2023-04-25'),
(76, 'Kids', 'Kids Western', 'Kids boy', '', 'KRISHNA INDUSTRIES', '399', 'KRISHNA INDUSTRIES', '\r\nSpecial offers and product promotions\r\n5% Instant Discount up to INR 250 on HSBC Cashback Card Credit Card Transactions. Minimum purchase value INR 1000 Here\'s how\r\nNo cost EMI available on select cards. Please check \'EMI options\' above for more details. Here\'s how\r\nGet GST invoice and save up to 28% on business purchases.', '#25917KRISHNA INDUSTRIES', 'Product/boy.png', '2023-05-02'),
(77, 'Kids', 'Kids Western', 'Kids boy', '', 'I.T Kids Dress for Boys | Printed Hoisery Cotton T shirt & Short Set', '499', 'I.T Kids Dress for Boys | Printed Hoisery Cotton T shirt & Short Set', 'Care Instructions: Machine Wash\r\nFit Type: Regular\r\nMaterial:- Cotton | Colour:- White | Sleeve Type:- Half Sleeves | Neck Style:- Round | Age:- 4-5 Years\r\nIt is composed of cotton, your kid will feel cool and comfortable while wearing this set.\r\nPackage Contains:- 1 T-Shirt & 1 Shorts set\r\nComfortable beautifully crafted dress with smooth and Finish fabric.\r\nThe T-Shirt has a print on the front of the set that will make your child look cute and smart.', '#41883I.T Kids Dress for Boys | Printed Hoisery Cotton T shirt & Short Set', 'Product/boy-1.png', '2023-05-02'),
(78, 'Kids', 'Kids Western', 'Kids boy', '', 'SATPURUSH Fashion- Kids Stylish Dungaree Jumpsuit Set for Boys', '499', 'SATPURUSH Fashion- Kids Stylish Dungaree Jumpsuit Set for Boys', 'Care Instructions: Hand Wash Only\r\nFit Type: Regular\r\n★Material: 95% Cotton and 5% Polyester★\r\n★Package Includes: 1 T-Shirt, 1 Dungaree,1 bow tie★\r\n★The actual product may differ slightly in color from the one illustrated★\r\n★Occasion - Casual & Stylish Collection for regular wear, parties & gifting purpose★\r\n★WASH CARE - Easy Wash And Dry. Can Be Hand Washed And Machine Wash. Do Not Bleach Or Wring★', '#35383SATPURUSH Fashion- Kids Stylish Dungaree Jumpsuit Set for Boys', 'Product/boy-2.png', '2023-05-02'),
(79, 'Kids', 'Kids Western', 'Kids boy', '', 'Googo Gaaga Boy\'s Cotton T-Shirt With Shorts', '442', 'Googo Gaaga Boy\'s Cotton T-Shirt With Shorts', 'Fit Type: Regular\r\nItems Included - 1 T-shirt, 1 Pant\r\nColor: Black Tshirt and Camaflouge Short\r\nFabric: 90% Cotton\r\nSleeve Type: Half Sleeve, Occasion: Party Dress, Birthday Dress option', '#44090Googo Gaaga Boy\'s Cotton T-Shirt With Shorts', 'Product/boy-3.png', '2023-05-02'),
(80, 'Kids', 'Kids Western', 'Kids boy', '', 'Googo Gaaga Boy\'s T-Shirt', '446', 'Googo Gaaga Boy\'s T-Shirt', 'Care Instructions: Machine Wash\r\nFit Type: Regular\r\nItem Included : Baby Boys 1 T-shirt & 1 Shorts | Boys Dress | Toddlers kids wear\r\nFit Type: Regular | Boys Clothing Set\r\nFabric: 95% Cotton 5% Spandax\r\nCare Instruction: Gentle Wash or Dry Cleaning for a long-lasting Product Life', '#93173Googo Gaaga Boy\'s T-Shirt', 'Product/boy-4.png', '2023-05-02'),
(81, 'Kids', 'Kids Western', 'Kids boy', '', 'Elnido Baby Boys and Kids Ethnic Pathani Suit/Kurta Pyjama Set for Boys', '1099', 'Elnido Baby Boys and Kids Ethnic Pathani Suit/Kurta Pyjama Set for Boys', 'Care Instructions: Machine Wash\r\nFit Type: Regular\r\nPackage Contains - 1 Set of Pathani Suit\r\nFit Type - Comfort Fit\r\nMaterial - 100 % Cotton\r\nIdeal Gift - Gift This Pathani Suit Set to Your Loved Ones and they will Love it', '#93073Elnido Baby Boys and Kids Ethnic Pathani Suit/Kurta Pyjama Set for Boys', 'Product/boy-5.png', '2023-05-02'),
(82, 'Kids', 'Kids Western', 'Kids boy', '', 'AJ DEZINES Kids Cotton Silk Printed 3pc Kurta Set For Boys', '1071', 'AJ DEZINES Kids Cotton Silk Printed 3pc Kurta Set For Boys', 'Care Instructions: Hand Wash Only\r\nFit Type: Regular\r\n3 pc set: 1 Kurta, 1 Pyjama, 1 Jacket\r\nKurta: Solid raw silk regular fit, long sleeve Kurta. Featuring mandarin collor, front bottons, side slit and straight hem.\r\nPajama: Straight fit Pyjama made in raw silk with elasticated waist to best fit.\r\nJacket: Raw Silk jacket, printed, round neck, comes without pocket.\r\nCare: Gentle Hand wash seperately.', '#58200AJ DEZINES Kids Cotton Silk Printed 3pc Kurta Set For Boys', 'Product/boy-6.png', '2023-05-02'),
(83, 'Kids', 'Kids Western', 'Kids girl', '', 'princess-trendy-girls-frocks-dresses', '499', 'princess-trendy-girls-frocks-dresses', 'Product Details\r\nName : New stylish Green floral Baby Girls Dress/Frocks\r\n\r\nFabric : Satin\r\n\r\nSleeve Length : Short Sleeves\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : Single', '#50064princess-trendy-girls-frocks-dresses', 'Product/kids.png', '2023-05-02'),
(84, 'Kids', 'Kids Western', 'Kids girl', '', 'princess-classy-girls-frocks-dresses', '230', 'princess-classy-girls-frocks-dresses', 'Fashion trends are not only for the grown ups even the kids also go to do some fashion. Laraib Fashion, brings to you this beautiful party wear for your little angel. The dress features comfortable fabric, Half sleeve less design and fluffy look for your daughter to look like a doll.\r\n\r\nCountry of Origin : India', '#34193princess-classy-girls-frocks-dresses', 'Product/ki-1.png', '2023-05-02'),
(85, 'Kids', 'Kids Western', 'Kids girl', '', 'Frocks & Dresses', '399', 'Frocks & Dresses', 'Product Details\r\nName : Frocks & Dresses\r\n\r\nFabric : Crepe\r\n\r\nSleeve Length : Short Sleeves\r\n\r\nPattern : Solid\r\n\r\nNet Quantity (N) : Single', '#18773Frocks & Dresses', 'Product/ki-2.png', '2023-05-02'),
(86, 'Kids', 'Kids Western', 'Kids girl', '', 'cutiepie-elegant-girls-', '313', 'cutiepie-elegant-girls-', 'Product Details\r\nName : Girls Black Polyester Frocks & Dresses Pack Of 1\r\n\r\nFabric : Polyester\r\n\r\nSleeve Length : Short Sleeves\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : Single', '#89475cutiepie-elegant-girls-', 'Product/ki-3.png', '2023-05-02'),
(87, 'Kids', 'Kids Western', 'Kids girl', '', 'ARK DRESSES, Girls Elegant Frock & Dresses', '313', 'ARK DRESSES, Girls Elegant Frock & Dresses', 'Product Details\r\nName : ARK DRESSES, Girls Elegant Frock & Dresses\r\n\r\nFabric : Cotton Blend\r\n\r\nSleeve Length : Three-Quarter Sleeves\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : Single', '#91537ARK DRESSES, Girls Elegant Frock & Dresses', 'Product/ki-4.png', '2023-05-02'),
(88, 'Kids', 'Kids Western', 'Kids girl', '', 'frocks-dresse', '256', 'frocks-dresse', 'Product Details\r\nName : clothing set\r\n\r\nFabric : Crepe\r\n\r\nSleeve Length : Sleeveless\r\n\r\nPattern : Printed\r\n\r\nNet Quantity (N) : Single', '#6407frocks-dresse', 'Product/ki-5.png', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `ID` int(26) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `Cat_sub` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`ID`, `category`, `sub_category`, `Cat_sub`, `Date`) VALUES
(17, 'Men', 'Men Ethnic', 'Kurta', '2023-04-24'),
(18, 'Men', 'Men Ethnic', 'set', '2023-04-24'),
(19, 'Men', 'Men Western', 'Shirt', '2023-04-24'),
(20, 'Men', 'Men Western', 'Pant', '2023-04-24'),
(21, 'Men', 'Men Western', 'InnerWare', '2023-04-24'),
(22, 'Women', 'Woman Ethnic', 'Kurta', '2023-04-24'),
(23, 'Women', 'Woman Ethnic', 'Kurta Set', '2023-04-24'),
(24, 'Women', 'Woman Ethnic', 'Sarees', '2023-04-24'),
(25, 'Women', 'Woman Western', 'Top ', '2023-04-24'),
(26, 'Women', 'Woman Western', 'One piece', '2023-04-24'),
(27, 'Women', 'Woman Western', 'pant', '2023-04-24'),
(28, 'Women', 'Woman Western', 'InnerWare', '2023-04-24'),
(29, 'Men', 'Men Ethnic', 'Jackets', '2023-04-24'),
(30, 'Kid\'s', 'Kid\'s Western', 'Kid\'s boy', '2023-05-02'),
(31, 'Kid\'s', 'Kid\'s Western', 'Kid\'s girl', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `first_name`, `middle_name`, `last_name`, `email`, `mobile`, `department`, `post`, `password`, `user_id`, `profile`, `Status`, `Date`) VALUES
(1, 'Vaibhav', 'Shmarao', 'Pawar', 'vaibhav@gmail.com', '7387545206', 'I.T', 'Software Devloper', '$2y$10$jTiDFCM2YgRCA4DIq2e60.pVcuwq8J0Zl0KHIjy/juXFc6eXhuL2.', '#Vaibhav82666', 'USER/vaibhav.jpeg', '', '2023-04-22'),
(2, 'Vinod', 'Shamrao', 'Pawar', 'vinod@gmail.com', '9775088904', 'Admin', 'Collection', '$2y$10$R6xuwr2IjLBDHhXKmsMReuvnzhwhvQSDqYY0xdPfjOLFn.dFtlL/6', '#Vinod39362', 'USER/men.png', '', '2023-04-22'),
(3, 'Kareena', 'Ravindra', 'Sapkale', 'Kareena@gmail.com', '9145853205', 'I.I', 'Wordpress Devloper', '$2y$10$ds98LuN95JaaB0XG787QruCFt1aFpyfkdEIMVdICcA82nhcDPy1we', '#Kareena30971', 'USER/save.png', '', '2023-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `Order_ID` int(150) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `p_mode` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`Order_ID`, `customer_id`, `name`, `mobile`, `address`, `p_mode`, `date`) VALUES
(16, '#5845vaibhav', 'vaibhav', '7387545206', 'Kalyan', 'cash on delivery', '2023-05-04'),
(17, '#6322vandana', 'vandana', '07387545206', 'kalyan', 'cash on delivery', '2023-05-04'),
(18, '#5845vaibhav', 'vaibhav', '7387545206', '', 'cash on delivery', '2023-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`Order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `ID` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `Order_ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
