-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_brand` varchar(255) ,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`,`item_name`,`item_category`,`item_brand`,`item_price`, `item_image`, `item_register`) VALUES
(1,'Cool And Simple Necklace','Accessories','MostRated', 30.00,'./assets/categories/A1.jpg','2021-03-28 11:08:57'),
(2,'Emerald Bracelet','Accessories','MostRated',68.00,'./assets/categories/A2.jpg','2021-03-28 11:08:57'),
(3,'Beautiful Earrings','Accessories','MostRated',55.00,'./assets/categories/A3.jpg','2021-03-28 11:08:57'),
(4,'Adalyn Rose Gold Gray Pink Quartz Beaded Stretch Bracelet Set','Accessories','MostRated',112.00,'./assets/categories/A4.jpg','2021-03-28 11:08:57'),
(5,'Pearl Beaded Necklace','Accessories','MostRated',60.00,'./assets/categories/A5.jpg', '2021-03-28 11:08:57'),
(6,'Daisy Colorful Brass Braided Necklace','Accessories','MostRated',66.00,'./assets/categories/A6.jpg','2021-03-28 11:08:57'),
(7,'Hoop Earrings','Accessories','MostRated',110.00,'./assets/categories/A7.jpg', '2021-03-28 11:08:57'),
(8,'Lovebird Wreath Necklace','Accessories','MostRated',120.00,'./assets/categories/A8.jpg', '2021-03-28 11:08:57'),
(9,'Flower Beads Rings','Accessories','New',20.00,'./assets/categories/A9.jpg', '2021-03-28 11:08:57'),
(10,'DIY Wire-Wrapped Rings','Accessories','New',95.00,'./assets/categories/A10.jpg', '2021-03-28 11:08:57'),
(11,'Wrapped copper bracelet','Accessories','New',12.00,'./assets/categories/A11.jpg', '2021-03-28 11:08:57'),
(12,'Beads and wire Christina Harris of Tobe Rose Wire Jewelry','Accessories','New',45.00,'./assets/categories/A12.jpg', '2021-03-28 11:08:57'),
(13,'Indian Jewelery Style Earrings','Accessories','New',80.00, './assets/categories/A13.jpg', '2021-03-28 11:08:57'),
(14,'Simple Style Bracelet And Necklace','Accessories','MostRated',50.00, './assets/categories/A14.jpg', '2021-03-28 11:08:57'), 
(15,'Egyptian Style Metallic Bracelet','Accessories','MostRated',40.00, './assets/categories/A15.jpg', '2021-03-28 11:08:57'),
(16,'Indian Style Jewellery Bracelet', 'Accessories','MostRated',150.00,'./assets/categories/A16.jpg', '2021-03-28 11:08:57'),
(17,'Indian Jewelery Style Bar Bracelet','Accessories','MostRated',180.00,'./assets/categories/A17.jpg', '2021-03-28 11:08:57'),
(18,'Indian Jewellery Style Earrings','Accessories','New',50.00,'./assets/categories/A18.jpg', '2021-03-28 11:08:57'),
(19,'Indian Jewellery Style Earrings','Accessories','MostRated',50.00,'./assets/categories/A20.jpg', '2021-03-28 11:08:57'),
(20,'Beautiful Styled Beaded-Symbols Bracelet','Accessories','MostRated',60.00,'./assets/categories/A21.jpg', '2021-03-28 11:08:57'),
(21,'Summer Lightweight Bag','Bags','MostRated',20.00,'./assets/categories/B1.jpg','2021-03-28 11:08:57'),
(22,'Beaded Bag','Bags','MostRated',60.00,'./assets/categories/B2.jpg', '2021-03-28 11:08:57'),
(23,'Beautiful Small Bag','Bags','New',20.00,'./assets/categories/B3.jpg', '2021-03-28 11:08:57'),
(24,'Beaded Style Bag','Bags','MostRated',12.00,'./assets/categories/B4.jpg', '2021-03-28 11:08:57'),
(25,'Pom Pom Bag Charm','Bags','New',50.00,'./assets/categories/B5.jpg', '2021-03-28 11:08:57'),
(26,'Handmade Straw Bag','Bags','MostRated',60.00, './assets/categories/B6.jpg', '2021-03-28 11:08:57'),
(27,'Summer Bag','Bags','MostRated',95.00,'./assets/categories/B7.jpg', '2021-03-28 11:08:57'),
(28,'Natural Fiber Fabric Bamboo','Bags','New',100.00,'./assets/categories/B8.jpg', '2021-03-28 11:08:57'),
(29,'Dooney and Boorke Small Shoulder Bag','Bags','MostRated',55.00 ,'./assets/categories/B10.jpg', '2021-03-28 11:08:57'),
(30,'Dried Flower Transparent Bags','Bags','New',90.00 ,'./assets/categories/B9.jpg', '2021-03-28 11:08:57'),
(31,'Craft Sticks or Popsicle Sticks','Crafts','MostRated',50.00,'./assets/categories/C1.jpg','2021-03-28 11:08:57'),
(32,'Docking Station','Crafts','MostRated',99.00 ,'./assets/categories/C2.jpg','2021-03-28 11:08:57'),
(33,'Cute Centerpiece','Crafts','MostRated',60.00 ,'./assets/categories/C3.jpg','2021-03-28 11:08:57'),
(34,'Beautiful Landscaped Embroidery Piece','Crafts','New',80.00 ,'./assets/categories/C4.jpg','2021-03-28 11:08:57'),
(35,'Inspiring Painted-Quoted Pebbles(5)','Crafts','New',20.00  ,'./assets/categories/C5.jpg','2021-03-28 11:08:57'),
(36,'Tray Side Tables','Crafts','New',50.00 ,'./assets/categories/F1.jpg','2021-03-28 11:08:57'),
(37,'CPU Holder','Crafts','New',60.00 ,'./assets/categories/F2.jpg','2021-03-28 11:08:57'),
(38,'Star Mirrors And Unique Overlapping Table','Crafts','New',176.00 ,'./assets/categories/F3.jpg','2021-03-28 11:08:57'),
(39,'DRM Catcher','Crafts','New',76.00,'./assets/categories/drm catcher.jpg','2021-03-28 11:08:57'),
(40,'Feathers For Home Decor','Crafts','MostRated',55.00,'./assets/categories/D1.jpg','2021-03-28 11:08:57'),
(41,'Merino Roving Macrame statement piece','Crafts','New',50.00,'./assets/categories/D2.jpg','2021-03-28 11:08:57'),
(42,'Macrame Jar','Crafts','MostRated',55.00,'./assets/categories/D3.jpg','2021-03-28 11:08:57'),
(43,'Beautiful Flower Deer Decor','Crafts','MostRated',50.00,'./assets/categories/D4.jpg','2021-03-28 11:08:57'),
(44,'Lovely Gift','Gifts','New',90.00,'./assets/categories/G1.jpg','2021-03-28 11:08:57'),
(45,'DIY gifts For Mom','Gifts','New',50.00 ,'./assets/categories/G2.jpg','2021-03-28 11:08:57'),
(46,'Simple Gift For Valentine Day','Gifts','New',10.00 ,'./assets/categories/G3.jpg','2021-03-28 11:08:57'),
(47,'Gift To Close Ones','Gifts','New',50.00 ,'./assets/categories/G4.jpg','2021-03-28 11:08:57'),
(48,'Hanging Glass Frame Memory Box','Gifts','New',100.00 ,'./assets/categories/G5.jpg','2021-03-28 11:08:57'),
(49,'Easy Handmade Gift','Gifts','MostRated',60.00 ,'./assets/categories/G6.jpg','2021-03-28 11:08:57'),
(50,'Beautiful Present Wrapping','Gifts','MostRated',50.00 ,'./assets/categories/G7.jpg','2021-03-28 11:08:57'),
(51,'Earrings Gift','Gifts','MostRated',70.00,'./assets/categories/G8.jpg','2021-03-28 11:08:57'),
(52,'Gift Cookies','Gifts','MostRated',22.00,'./assets/categories/G9.jpg','2021-03-28 11:08:57'),
(53,'Doughnuts With Rich Vanilla Cream','Gifts','MostRated',50.00,'./assets/categories/G10.jpg','2021-03-28 11:08:57'),
(54,'Adorable Classic Montessori Wooden Toy','Kids','MostRated',40.00,'./assets/categories/K1.jpg','2021-03-28 11:08:57'),
(55,'Stuffed Bunny Toy','Kids','MostRated',18.00,'./assets/categories/K2.jpg','2021-03-28 11:08:57'),
(56,'Amigurumi Crochet Pattern For Soft Giraffe','Kids','MostRated',10.00,'./assets/categories/K3.jpg','2021-03-28 11:08:57'),
(57,'Lovely Bunny Toy','Kids','New',12.00,'./assets/categories/K4.jpg','2021-03-28 11:08:57'),
(58,'Finger Puppets','Kids','New',15.00,'./assets/categories/K5.jpg','2021-03-28 11:08:57'),
(59,'1-2 Year Baby Jumpsuit','Kids','MostRated',16.00,'./assets/categories/K6.jpg','2021-03-28 11:08:57'),
(60,'Crochet Pattern Baby Jumpsuit','Kids','New',12.00,'./assets/categories/K7.jpg','2021-03-28 11:08:57'),
(61,'Helicopter Toy','Kids','MostRated',12.00,'./assets/categories/K8.jpg','2021-03-28 11:08:57'),
(62,'Nursery Baby Mobile','Kids','New',12.00,'./assets/categories/K9.jpg','2021-03-28 11:08:57'),
(63,'Baby handmade Mobile For Boys','Kids','New',15.00,'./assets/categories/K10.jpg','2021-03-28 11:08:57'),
(64,'Navy Multi Spot Handmade Tie','Men','MostRated',80.00,'./assets/categories/M1.jpg','2021-03-28 11:08:57'),
(65,'Diesel Dip-dye Checked Shirt - Black','Men','New',100.00 ,'./assets/categories/M2.jpg','2021-03-28 11:08:57'),
(66,'Perfect Knock Around Town Shirt','Men','MostRated',130.00 ,'./assets/categories/M3.jpg','2021-03-28 11:08:57'),
(67,'Motorcycle Biker Real Leather Jackets','Men','New',200.00 ,'./assets/categories/M4.jpg','2021-03-28 11:08:57'),
(68,'Lush Patchwork And Jaw-dropping Embroidery','Men','MostRated',100.00 ,'./assets/categories/M5.jpg','2021-03-28 11:08:57'),
(69,'Floliage Blue Dream Kids Tee - white','Men','New',160.00 ,'./assets/categories/M6.jpg','2021-03-28 11:08:57'),
(70,'Nudie Jeans T-Shirt Roger','Men','MostRated',150.00 ,'./assets/categories/M7.jpg','2021-03-28 11:08:57'),
(71,'Black Gogh Print Shirt','Men','MostRated',100.00 ,'./assets/categories/M11.jpg','2021-03-28 11:08:57'),
(72,'Black Print Shirt','Men','MostRated',100.00 ,'./assets/categories/M12.jpg','2021-03-28 11:08:57'),
(73,'Handmade Leather Mens watch strap','Men','New',120.00 ,'./assets/categories/M8.jpg','2021-03-28 11:08:57'),
(74,'Black Structured Wool Felt Bowler Hat','Men','MostRated',120.00 ,'./assets/categories/M9.jpg','2021-03-28 11:08:57'),
(75,'Baseball Cap Lion Cougar','Men','New',120.00 ,'./assets/categories/M10.jpg','2021-03-28 11:08:57'),
(76,'Isobel Phone Crossbody With Guitar Strap','Mobile Accessories','MostRated',18.00,'./assets/categories/MB1.jpg','2021-03-28 11:08:57'),
(77,'Monochrome Phone Strap','Mobile Accessories','New',18.00,'./assets/categories/MB2.jpg','2021-03-28 11:08:57'),
(78,'Crystals Diamond Sparkle Case Cover','Mobile Accessories','MostRated',60.00,'./assets/categories/MB3.jpg','2021-03-28 11:08:57'),
(79,'Handmade Crochet Mobile Pouch','Mobile Accessories','New',52.00,'./assets/categories/MB4.jpg','2021-03-28 11:08:57'),
(80,'Blossom 13 Laptop Sleeve','Mobile Accessories','New',60.00,'./assets/categories/L1.jpg','2021-03-28 11:08:57'),
(81,'Protective Case & Keyboard Cover','Mobile Accessories','MostRated',70.00,'./assets/categories/L2.jpg','2021-03-28 11:08:57'),
(82,'Dripping Paint Keyboard Cover','Mobile Accessories','New',100.00,'./assets/categories/L3.jpg','2021-03-28 11:08:57'),
(83,'Bamboo Wooden Laptop/Mobile Lap Desk','Mobile Accessories','MostRated',150.00,'./assets/categories/L4.jpg','2021-03-28 11:08:57'),
(84,'Baby Girl Portrait',"Portraits" ,'New',50.00,'./assets/categories/P1.jpg','2021-03-28 11:08:57'),
(85,'Actress Portrait',"Portraits" ,'MostRated',50.00,'./assets/categories/P2.jpg','2021-03-28 11:08:57'),
(86,'Young Lady',"Portraits" ,'New',50.00,'./assets/categories/P3.jpg','2021-03-28 11:08:57'),
(87,'Actor Portrait',"Portraits",'MostRated',50.00,'./assets/categories/P4.jpg','2021-03-28 11:08:57'),
(88,'Two-in-one Cleanser And Exfoliator', "Skincare",'MostRated',160.00,'./assets/categories/S1.jpg', '2021-03-28 11:08:57'),
(89,'Tropic Skincare', "Skincare",'New',180.00,'./assets/categories/S2.jpg','2021-03-28 11:08:57'),
(90,'LIP FUDGE', "Skincare",'MostRated',95.00,'./assets/categories/S3.jpg', '2021-03-28 11:08:57'),
(91,'Urban Rituelle Cocoa Butter Vegetable Soaps', "Skincare",'New',180.00,'./assets/categories/S4.jpg','2021-03-28 11:08:57'),
(92,'Luxe Toiletries', "Skincare",'New',150.00,'./assets/categories/S5.jpg','2021-03-28 11:08:57'),
(93,'Rose Clay Face Mask',"Skincare",'MostRated',280.00,'./assets/categories/S6.jpg', '2021-03-28 11:08:57'),
(94,'Antioxidant-rich Gel Cleanser',"Skincare",'New',150.00,'./assets/categories/S7.jpg', '2021-03-28 11:08:57'),
(95,'Island Escape Whipped Sugar Scrub',"Skincare",'New',220.00,'./assets/categories/S8.jpg', '2021-03-28 11:08:57'),
(96,'Fragrant 3-wick Candle',"Skincare",'MostRated',170.00,'./assets/categories/S9.jpg', '2021-03-28 11:08:57'),
(97,'Strawberry Milk Roll On Perfume', "Skincare",'New',205.00,'./assets/categories/S10.jpg', '2021-03-28 11:08:57'),
(98,'Happy Sweatshirt With Daisy','Women','MostRated',100.00,'./assets/categories/W1.jpg', '2021-03-28 11:08:57'),
(99,'Simple Flower Printed Top Shirt', 'Women','MostRated',180.00,'./assets/categories/W2.jpg', '2021-03-28 11:08:57'),
(100,'Coffee Cats And Books T Shirt', 'Women','MostRated',160.00,'./assets/categories/W3.jpg', '2021-03-28 11:08:57'),
(101,'Linen Skirt','Women','MostRated',120.00 ,'./assets/categories/W4.jpg', '2021-03-28 11:08:57'),
(102,'Women Print Shirt', 'Women','MostRated',120.00,'./assets/categories/W11.jpg', '2021-03-28 11:08:57'),
(103,'Billie Print Shirt For Girls', 'Women','MostRated',160.00,'./assets/categories/W12.jpg', '2021-03-28 11:08:57'),
(104,'Van Gogh Print Yellow Shirt', 'Women','MostRated',170.00,'./assets/categories/W13.jpg', '2021-03-28 11:08:57'),
(105,'Medina Belted Tiered Linen Midi Dress', 'Women','MostRated',200.00,'./assets/categories/W5.jpg', '2021-03-28 11:08:57'),
(106,'Trendy Jacquard Printed Casual Pullover','Women','New',165.00 ,'./assets/categories/W6.jpg', '2021-03-28 11:08:57'),
(107,'Braid Texture A-Line Knit Midi Skirt', 'Women','New',150.00,'./assets/categories/W7.jpg', '2021-03-28 11:08:57'),
(108,'Dress for Joy And Comfort', 'Women','New',120.00,'./assets/categories/W8.jpg', '2021-03-28 11:08:57'),
(109,'Everyday Sweater', 'Women','MostRated',120.00,'./assets/categories/W9.jpg', '2021-03-28 11:08:57'),
(110,'Handmade Horn Scarf Rings', 'Women','New',150.00,'./assets/categories/W10.jpg', '2021-03-28 11:08:57'),
(111,'Couch Pillow Set(4)',"","",10.00,'./assets/products/1.jpg', '2021-03-28 11:08:57'),
(112,'Plate Mat',"","",4.00 ,'./assets/products/2.jpg', '2021-03-28 11:08:57'),
(113,'Women Bag',"","",8.00 ,'./assets/products/3.jpg', '2021-03-28 11:08:57'),
(114,'Small Jewellery Box',"","",2.00 ,'./assets/products/4.jpg', '2021-03-28 11:08:57'),
(115,'Cool necklace and earrings',"Jewellery border","",10.00,'./assets/products/6.jpg', '2021-03-28 11:08:57'),
(116,'Simple Lovely dress',"Clothing border","",18.00,'./assets/products/8.jpg', '2021-03-28 11:08:57'),
(117,'Beautiful design and made mug',"Craft border","",6.00,'./assets/products/11.jpg', '2021-03-28 11:08:57'),
(118,'Black Necklace',"Jewellery border","",12.00,'./assets/products/7.jpg', '2021-03-28 11:08:57'),
(119,'Cute animal scarf',"Clothing border","",10.00,'./assets/products/9.jpg', '2021-03-28 11:08:57'),
(120,'Tasty Rosemary Cheese Crackers'," Food border","",6.00,'./assets/products/10.jpg', '2021-03-28 11:08:57'),
(121,'Small Bag for jewellery',"Bag border","",5.00,'./assets/products/5.jpg', '2021-03-28 11:08:57'),
(122,'Animal Round Clock',"Craft border","",12.00,'./assets/products/13.jpg', '2021-03-28 11:08:57'),
(123,'Gift Bag',"Craft border","",2.00,'./assets/products/14.jpg', '2021-03-28 11:08:57'),
(124,'Sunglasses Pouch',"Bag border","",5.00,'./assets/products/17.jpg', '2021-03-28 11:08:57'),
(125,'Handmade Candle',"","",12.00,'./assets/products/15.jpg', '2021-03-28 11:08:57'),
(126,'Embroidery earphones',"","",12.00,'./assets/products/16.jpg', '2021-03-28 11:08:57'),
(127,'Floral Handmade Soap',"","",25.00,'./assets/products/18.jpg', '2021-03-28 11:08:57'),
(128,'Flowers Bag',"","",21.00,'./assets/products/19.jpg', '2021-03-28 11:08:57'),
(129,'Shoulder Bag for teens',"","",15.00,'./assets/products/20.jpg', '2021-03-28 11:08:57'),
(130,'Beautiful Kameez',"","",16.00,'./assets/products/21.jpg', '2021-03-28 11:08:57'),
(131,'Cute panda by clay',"","",5.00,'./assets/products/22.jpg', '2021-03-28 11:08:57'),
(132,'woman winter',"","",20.00,'./assets/products/23.jpg', '2021-03-28 11:08:57'),
(133,'Black abbaya',"","",18.00,'./assets/products/24.jpg', '2021-03-28 11:08:57'),
(134,'pyramid print shirt',"","",25.00,'./assets/products/25.jpg', '2021-03-28 11:08:57'),
(135,'mobile case print design',"","",15.00,'./assets/products/26.jpg', '2021-03-28 11:08:57'),
(136,'indian girl artwork', "Portraits","" ,8.00,'./assets/categories/p6.jpg', '2021-03-28 11:08:57'),
(137,'Faten Hamama actress ', "Portraits" ,"",20.00,'./assets/categories/p7.jpg', '2021-03-28 11:08:57'),
(138,'cute funny girl portrait', "Portraits" ,"",5.00,'./assets/categories/p8.jpg', '2021-03-28 11:08:57'),
(139,'Women Bag', "Portraits" ,"",8.00,'./assets/categories/p7.jpg', '2021-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
