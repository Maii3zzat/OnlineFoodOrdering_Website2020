-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 09:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofo_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_faq`
--

CREATE TABLE `admin_faq` (
  `faq_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `question` varchar(256) DEFAULT NULL,
  `answer` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_faq`
--

INSERT INTO `admin_faq` (`faq_id`, `users_id`, `question`, `answer`) VALUES
(1, NULL, 'How can I pay online?', 'You will be able to choose the online payment option from participating restaurants as part of the checkout process. The payment selection screen appears after confirming the address and before the final order confirmation screen.'),
(2, NULL, 'How do I create an account?', 'On our website you can create an account by clicking on the Register at the top right of the website. You can register by using your email address.'),
(3, NULL, 'How do i report for a problem?', 'Use contact us page and send us your inquiry!'),
(4, NULL, 'Can I cancel my order?', 'Yes you can, but you need to contact us as fast as you can to cancel the order'),
(5, NULL, 'How can I get in touch with your customer care team?', 'By mailing us or call, you can find this at contact us page!'),
(6, NULL, 'when do you make offers and for how long?', 'We make offers one time in months and its for a week'),
(7, NULL, 'Can I make a payment online in a foreign currency?', ' Ramen Ichiraku only accepts Egyptian pounds.'),
(8, NULL, 'Can I add an item or modify my order after the order has been accepted?', 'Yes you can. Contact us through our number or mail and we will be happy to make the modifcations you need even after placing the order.'),
(9, NULL, 'How can I cancel my order?', ' 1. Call us on our number and cancel the order or 2. Mail us or use contact us page as fast as you can before the order is placed and shipped.'),
(10, NULL, 'How do I place an order?', ' \r\n1. Open the RamenIchiraku.com \r\n2. Select your delivery area \r\n3. Choose a your meal \r\n4. Add items to your cart \r\n5. View your cart, add comments or voucher code, select “checkout” \r\n6. Create an account or select your delivery and contact info \r\n7. Ch');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(256) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `contact_name` varchar(40) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `comment` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `users_id`, `contact_name`, `email`, `mobile`, `comment`) VALUES
(1, 1, 'no wait', 'alitaha05@hotmail.com', '0100150330', 'I don’t like to wait for my the food'),
(2, 2, 'cold food', 'mai146607@bue.edu.eg', '01026957460', ' if it’s not hot from the oven I’ll not take it'),
(3, 3, 'quality issue', 'aserehab564@gmail.com', '01528453579', 'I expected good quality'),
(4, 4, 'amazing food', 'omar176454@bue.edu.eg', '01152781579', 'I’ll eat any thing you make you are awesome!'),
(5, 5, 'make your own', 'hossamHeily55@gmail.com', '01078965400', 'you may wanna add an option to make my own Ramen'),
(6, 6, 'no onions', 'mostafatefa88@gmail.com', '01555698450', 'I hate onions'),
(7, 7, 'offers', 'omrhessen6q@gmail.com', '01236598745', 'do you have 1 plus 1 offer?'),
(8, 8, 'meh', 'amrmostafa5fe@gmail.com', '01021503214', 'no comment'),
(9, 9, 'discount!', 'samyaaagamal11@gmail.com', '01002584567', 'I’m famous … I want a discount'),
(10, 10, 'warning', 'yusefgo34@gmail.com', '01003694570', 'I’ll pay in coins if the food not good');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `dish_id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `decs` text DEFAULT NULL,
  `d_img` varchar(256) DEFAULT NULL,
  `offer` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`dish_id`, `name`, `price`, `decs`, `d_img`, `offer`) VALUES
(1, 'Miso Tonkotsu Ramen', 120, ' our best selling ramen with rich flavorful broth and miso paste to give it that unique taste.. It\'\'s simply a bowl of happiness ', 'images/dish/Miso Tonkotsu Ramen.jpg', b'0'),
(2, 'Shio Ramen', 110, ' a light, clear broth and a nuanced lemon and salt seasoning results in a beautiful yet flavorful bowl of shio ramen ', 'images/dish/Shio Ramen.jpg', b'0'),
(3, 'Hakata Ramen', 90, ' the simple ramen consists of a silky smooth rich broth with extra thin noodles and minimal toppings ', 'images/dish/Hakata Ramen.jpg', b'1'),
(4, 'Shoyu Ramen', 90, ' a sweet soy sauce based broth with additional ingredients made according to a secret recipe all combined to make the perfect bowl of shoyu ramen.', 'images/dish/Shoyu Ramen.jpg', b'0'),
(5, 'Tsukemen Ramen', 100, 'A ramen dish which noodles are eaten after being dipped in a separate bowl of broth of your choice ', 'images/dish/Tsukemen Ramen.jpg', b'0'),
(6, 'chicken ramen', 85, ' a magical bowl of ramen with very flavor and tender chicken', 'images/dish/chicken ramen.jpg', b'1'),
(7, 'Muroran curry ramen', 90, 'if you love curry so this one is for you', 'images/dish/Muroran curry ramen.jpg', b'0'),
(8, 'Kagoshima ramen', 115, 'Its soup is mainly based on tonkotsu. It is a little cloudy, and chicken stock, vegetables, dried sardines, kelp and dried mushrooms are added', 'images/dish/Kagoshima ramen.jpg', b'0'),
(9, 'Hiyashi chuka', 100, 'it’s a cold ramen salad it’s so good and refreshing for hot days', 'images/dish/Hiyashi chuka.jpg', b'1'),
(10, 'Tonkotsu ramen', 100, 'the broth is typically cloudy in appearance for those who love the rich powerful flavors ', 'images/dish/Tonkotsu ramen.jpg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `order_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `order_quantity` int(11) DEFAULT NULL,
  `order_price` float DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `order_status` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`order_id`, `users_id`, `order_quantity`, `order_price`, `order_date`, `order_status`) VALUES
(1, 1, 3, 560, '2020-05-03', 'Out for Delivery'),
(2, 2, 2, 230, '2020-05-03', 'Out for Delivery'),
(3, 3, 1, 140, '2020-05-03', 'In Kitchen'),
(4, 4, 2, 280, '2020-05-03', 'In Kitchen'),
(5, 5, 1, 150, '2020-05-03', 'Cancelled'),
(6, 6, 5, 890, '2020-05-03', 'In Kitchen'),
(7, 7, 2, 300, '2020-05-03', 'Cancelled'),
(8, 8, 2, 230, '2020-05-03', 'Out for Delivery'),
(9, 9, 1, 150, '2020-05-03', 'In Kitchen'),
(10, 10, 4, 640, '2020-05-03', 'Out for Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `order_dish`
--

CREATE TABLE `order_dish` (
  `order_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_dish`
--

INSERT INTO `order_dish` (`order_id`, `dish_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `method` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `users_id`, `pay_date`, `method`) VALUES
(1, 1, '2020-03-02', 'Cash'),
(2, 7, '2020-05-03', 'Cash'),
(3, 6, '2020-02-02', 'Credit Card'),
(4, 10, '2020-06-02', 'Credit Card'),
(5, 4, '2020-02-02', 'Cash'),
(6, 8, '2019-05-12', 'Cash'),
(7, 2, '2019-03-12', 'Cash'),
(8, 3, '2019-05-11', 'Credit Card'),
(9, 5, '2019-01-11', 'Credit Card'),
(10, 6, '2019-05-10', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(40) DEFAULT NULL,
  `users_email` varchar(256) DEFAULT NULL,
  `users_phone` varchar(11) DEFAULT NULL,
  `users_address` varchar(256) DEFAULT NULL,
  `users_password` varchar(256) DEFAULT NULL,
  `credit_card` varchar(16) DEFAULT NULL,
  `admin_access` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_phone`, `users_address`, `users_password`, `credit_card`, `admin_access`) VALUES
(1, 'alitaha', 'alitaha05@hotmail.com', '01001503330', 'el sayda zynab', '2410asd', '0123456885210369', b'0'),
(2, 'maiezzat', 'mai146607@bue.edu.eg.com', '01026957460', 'madinaty', '259hfjr', '0235456899855622', b'1'),
(3, 'Aserehab', 'aserehab564@gmail.com', '01528453579', 'masr el gdeda', 'qwe234', '0198653215425588', b'0'),
(4, 'OmarElsayed', 'omar176454@bue.edu.eg', '01152781579', 'Nasr City', 'fgv123', '0285661423775468', b'1'),
(5, 'Hossamelheily', 'hossamHeily55@gmail.com', '01078965400', 'nasr city', 'fvrt566', '5644230102661783', b'0'),
(6, 'Mostafamahmoud', 'mostafatefa88@gmail.com', '01555698450', 'tahrir', 'cvtg87', '2567301412241785', b'0'),
(7, 'Omrhessen', 'omrhessen6q@gmail.com', '01236598745', 'fisal', 'jkrvj67', '4577854623544555', b'0'),
(8, 'Amrmostafa', 'amrmostafa5fe@gmail.com', '01021503214', 'sheikh zayed', 'ghy570', '2699374995465133', b'0'),
(9, 'SamyaGamal', 'samyaaagamal11@gmail.com', '01002584567', 'mohndsen', 'erfv99', '1478523662530123', b'0'),
(10, 'Yossefamr', 'yusefgo34@gmail.com', '01003694570', 'korba', 'tbett76', '9513367515963284', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_faq`
--
ALTER TABLE `admin_faq`
  ADD PRIMARY KEY (`faq_id`),
  ADD KEY `faq_users_fk` (`users_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `cont_users_fk` (`users_id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orde_users_fk` (`users_id`);

--
-- Indexes for table `order_dish`
--
ALTER TABLE `order_dish`
  ADD PRIMARY KEY (`dish_id`,`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `pay_users_fk` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_faq`
--
ALTER TABLE `admin_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_faq`
--
ALTER TABLE `admin_faq`
  ADD CONSTRAINT `faq_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `cont_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `orderr`
--
ALTER TABLE `orderr`
  ADD CONSTRAINT `orde_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `pay_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
