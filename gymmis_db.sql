-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 09:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymmis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipementinventory`
--

CREATE TABLE `tbl_equipementinventory` (
  `equipinventory_id` int(11) NOT NULL,
  `equipments` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `date_ofpurchase` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `select_type` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_equipementinventory`
--

INSERT INTO `tbl_equipementinventory` (`equipinventory_id`, `equipments`, `size`, `date_ofpurchase`, `color`, `weight`, `quantity`, `brand_name`, `reason`, `status`, `select_type`, `date_created`) VALUES
(1, 'Barbell', '3 Inches', '2022-11-16', 'Black', '45 Kg', '5', 'rbox', NULL, 'stock in', 'EQUIPMENT_INVENTORY', '2022-11-18'),
(2, 'Exercise Ball', '6 Inches', '2022-11-14', 'Green', '56 Kg', '5', 'rbox', 'pang exercise lang', 'stock out', 'EQUIPMENT_INVENTORY', '2022-11-18'),
(3, 'Cable Cross', '47 Inches', '2022-11-23', 'Brown', '12 Kg', '1', 'rbox', NULL, 'stock in', 'EQUIPMENT_INVENTORY', '2022-11-18'),
(4, 'Rogue Dumbbells', '12inch', '2022-11-26', 'Black', '56.7 Kg', '10', 'healthline', NULL, 'stock in', 'EQUIPMENT_INVENTORY', '2022-11-26'),
(5, 'Tempo Studio', '42 Inch', '2022-11-26', 'Yellow', '107 Cm', '5', 'healthline', 'maganda pang exercise', 'stock out', 'EQUIPMENT_INVENTORY', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gymfeeinventory`
--

CREATE TABLE `tbl_gymfeeinventory` (
  `gymfeeinventory_id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `expiration_date` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `date_ofpurchased` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `select_type` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gymfeeinventory`
--

INSERT INTO `tbl_gymfeeinventory` (`gymfeeinventory_id`, `product`, `quantity`, `description`, `expiration_date`, `price`, `brand`, `date_ofpurchased`, `reason`, `status`, `select_type`, `date_created`) VALUES
(1, 'Circle Fitness Treadmill M7 Luxury', '40', 'running exercise', '2022-11-24', '5000', 'circle fitness', '2022-12-02', NULL, 'stock in', 'PRODUCT_INVENTORY', '2022-11-26'),
(2, 'Vicore Core Gym Bench', '70', 'higaan', '2022-11-27', '2300', 'cris sports', '2022-11-26', 'sarap higaan', 'stock out', 'PRODUCT_INVENTORY', '2022-11-26'),
(3, 'Garmin Vivofit Fitness Band', '30', 'bracelet', '2022-12-21', '5000', 'cris sports', '2022-11-26', 'pang dagdag strength', 'stock out', 'PRODUCT_INVENTORY', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `member_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `expiring_date` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`member_id`, `name`, `age`, `sex`, `birthday`, `plan`, `email_address`, `contact_no`, `address`, `joining_date`, `expiring_date`, `date_created`) VALUES
(7, 'Nario Luis', '34', 'M', '2022-11-22', '3 Months', 'Nario@gmail.com', '09789879809', 'Mambugan', '2022-11-23', '2022-11-25', '2022-11-22'),
(8, 'Junil  A Toledo', '21', 'M', '2022-11-16', '1 Month', 'Toledojonel557@gmail.com', '09789789995', 'San Mateo', '2022-11-22', '2022-11-23', '2022-11-22'),
(10, 'Maria O Toledo', '31', 'F', '2022-11-16', '2 Months', 'Maria@gmail.com', '09789879809', 'San Mateo', '2022-11-16', '2022-11-24', '2022-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

CREATE TABLE `tbl_plan` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plan`
--

INSERT INTO `tbl_plan` (`plan_id`, `plan_name`, `description`, `amount`) VALUES
(3, '1 Quarter', '1 Months', '3705'),
(4, '2 Quarter', '2 Months', '5788');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pos`
--

CREATE TABLE `tbl_pos` (
  `pos_id` int(11) NOT NULL,
  `idno` varchar(20) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `cash` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `changed` varchar(20) DEFAULT NULL,
  `proinventory_id` int(11) NOT NULL,
  `date_purchased` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pos`
--

INSERT INTO `tbl_pos` (`pos_id`, `idno`, `item_name`, `quantity`, `price`, `total`, `cash`, `discount`, `changed`, `proinventory_id`, `date_purchased`) VALUES
(36, '003', 'Garmin Vivofit Fitness Band', '1', '5000', NULL, NULL, NULL, NULL, 3, '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posgymfee`
--

CREATE TABLE `tbl_posgymfee` (
  `pos_id` int(11) NOT NULL,
  `idno` varchar(20) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `cash` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `changed` varchar(20) DEFAULT NULL,
  `proinventory_id` int(11) NOT NULL,
  `date_purchased` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productinventory`
--

CREATE TABLE `tbl_productinventory` (
  `proinventory_id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `expiration_date` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `date_ofpurchased` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `select_type` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_productinventory`
--

INSERT INTO `tbl_productinventory` (`proinventory_id`, `product`, `quantity`, `description`, `expiration_date`, `price`, `brand`, `date_ofpurchased`, `reason`, `status`, `select_type`, `date_created`) VALUES
(2, 'Olympic Bar', '-1', 'bakal na mahaba', '2022-11-24', '1000', 'zoopfitness', '2022-11-16', NULL, 'stock in', 'PRODUCT_INVENTORY', '2022-11-18'),
(3, 'Incline Bench Press', '34', 'pang likod', '2022-11-22', '2500', 'zoopfitness', '2022-11-15', 'nakakrelax', 'stock out', 'PRODUCT_INVENTORY', '2022-11-18'),
(4, 'Leg Curl Extension', '14', 'helps to stretch the hamstring muscles', '2022-11-18', '1500', 'zoopfitness', '2022-11-18', NULL, 'stock in', 'PRODUCT_INVENTORY', '2022-11-18'),
(5, 'Preacher Curl Bench', '29', 'resting the upper arms', '2022-11-19', '1200', 'zoopfitness', '2022-11-18', 'masarap sa pakiramdam', 'stock out', 'PRODUCT_INVENTORY', '2022-11-18'),
(6, 'Smith Machine', '38', 'used for the lifting of weights', '2022-11-18', '3000', 'zoopfitness', '2022-11-19', NULL, 'stock in', 'PRODUCT_INVENTORY', '2022-11-18'),
(8, 'Best Jump Rope', '25', 'jumping', '2022-11-26', '1600', 'healthline', '2022-11-30', NULL, 'stock in', 'PRODUCT_INVENTORY', '2022-11-26'),
(9, 'Best Value Treadmill', '16', 'good excercise', '2022-11-23', '2000', 'healthline', '2022-11-26', 'very comfortable', 'stock out', 'PRODUCT_INVENTORY', '2022-11-26'),
(10, 'Trax Attack SR Swing Stationary Bike', '45', 'biking exercise', '2022-11-29', '2000', 'cris sports', '2022-11-26', 'masarap magpadyak', 'stock out', 'PRODUCT_INVENTORY', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `sales_id` int(11) NOT NULL,
  `idno` varchar(20) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `proinventory_id` int(11) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `cashier_name` varchar(255) DEFAULT NULL,
  `category_type` text DEFAULT NULL,
  `date_purchased` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`sales_id`, `idno`, `item_name`, `quantity`, `price`, `proinventory_id`, `invoice_number`, `cashier_name`, `category_type`, `date_purchased`) VALUES
(1, '009', 'Best Value Treadmill', '4', '8000', 9, '829322', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(2, '008', 'Best Jump Rope', '2', '3200', 8, '829322', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(3, '006', 'Smith Machine', '5', '15000', 6, '726322', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(4, '005', 'Preacher Curl Bench', '2', '2400', 5, '726322', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(5, '002', 'Olympic Bar', '8', '8000', 2, '913722', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(6, '004', 'Leg Curl Extension', '3', '4500', 4, '913722', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(7, '003', 'Incline Bench Press', '10', '25000', 3, '913722', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(8, '002', 'Olympic Bar', '4', '4000', 2, '685022', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(9, '005', 'Preacher Curl Bench', '5', '6000', 5, '600922', 'Jhen Onrubias', 'PRODUCT', '2022-11-26'),
(10, '008', 'Best Jump Rope', '6', '9600', 8, '639422', 'Jhen Onrubias', 'PRODUCT', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales2`
--

CREATE TABLE `tbl_sales2` (
  `sales_id` int(11) NOT NULL,
  `idno` varchar(20) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `cash` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `changed` varchar(20) DEFAULT NULL,
  `proinventory_id` int(11) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `cashier_name` varchar(255) DEFAULT NULL,
  `category_type` varchar(255) DEFAULT NULL,
  `date_purchased` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales2`
--

INSERT INTO `tbl_sales2` (`sales_id`, `idno`, `item_name`, `quantity`, `price`, `total`, `cash`, `discount`, `changed`, `proinventory_id`, `invoice_number`, `cashier_name`, `category_type`, `date_purchased`) VALUES
(1, '002', 'Olympic Bar 2', '6', '6000', NULL, NULL, NULL, NULL, 2, '740222', 'Jhen Onrubias', 'GYM_FEE', '2022-11-25'),
(2, '003', 'Incline Bench Press 2', '7', '17500', NULL, NULL, NULL, NULL, 3, '740222', 'Jhen Onrubias', 'GYM_FEE', '2022-11-25'),
(3, '006', 'Smith Machine 2', '5', '15000', NULL, NULL, NULL, NULL, 6, '740222', 'Jhen Onrubias', 'GYM_FEE', '2022-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_total`
--

CREATE TABLE `tbl_sales_total` (
  `total_id` int(11) NOT NULL,
  `total` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `cash` varchar(255) DEFAULT NULL,
  `changed` varchar(255) DEFAULT NULL,
  `proinventory_id` varchar(255) DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `qty` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales_total`
--

INSERT INTO `tbl_sales_total` (`total_id`, `total`, `discount`, `cash`, `changed`, `proinventory_id`, `invoice_number`, `qty`) VALUES
(1, '11200', '10', '11000', '-920', NULL, '829322', '6'),
(2, '11200', '10', '11000', '-920', NULL, '829322', '2'),
(3, '17400', '15', '15000', '-210', NULL, '726322', '7'),
(4, '17400', '15', '15000', '-210', NULL, '726322', '2'),
(5, '37500', '10', '33800', '-50', NULL, '913722', '8'),
(6, '37500', '10', '33800', '-50', NULL, '913722', '21'),
(7, '37500', '10', '33800', '-50', NULL, '913722', '18'),
(10, '9600', '10', '9000', '-360', NULL, '639422', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `date_ofbirth` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `full_name`, `sex`, `age`, `date_ofbirth`, `email_address`, `address`, `contact_no`, `username`, `password`, `role`, `date_created`) VALUES
(1, 'Junil Toledo', 'Male', '23', '2022-11-22', 'nel@gmail.com', 'san mateo rizal', '09878979999', 'nelzkie', '12345', 'Staff', '2022-11-15'),
(2, 'Maria Toledo', 'Female', '31', '2022-11-02', 'maria@gmail.com', 'san mateo', '09575765687', 'maria', 'maria@123', 'Admin', '2022-11-15'),
(4, 'Jhen Onrubias', 'F', '54', '2022-11-13', 'jhen@gmail.com', 'antipolo city', '09768768868', 'jhen', 'jen', 'Admin', '2022-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trash`
--

CREATE TABLE `tbl_trash` (
  `trash_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `expiring_date` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trash`
--

INSERT INTO `tbl_trash` (`trash_id`, `name`, `age`, `sex`, `birthday`, `plan`, `email_address`, `contact_no`, `address`, `joining_date`, `expiring_date`, `date_created`) VALUES
(5, 'Jhen A Orubia', '24', 'F', '2022-11-24', '1 Months', 'Jhen@gmail..com', '09898797898', 'Antipolo City', '2022-11-22', '2022-11-25', '2022-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `visitor_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time_in` varchar(255) DEFAULT NULL,
  `time_out` varchar(255) DEFAULT NULL,
  `datelogs` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`visitor_id`, `name`, `time_in`, `time_out`, `datelogs`, `status`) VALUES
(1, 'Junil A Toledo', '17:16', '17:59', '2022-11-22', '1'),
(2, 'Maria Obal', '17:59', '18:10', '2022-11-22', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_equipementinventory`
--
ALTER TABLE `tbl_equipementinventory`
  ADD PRIMARY KEY (`equipinventory_id`);

--
-- Indexes for table `tbl_gymfeeinventory`
--
ALTER TABLE `tbl_gymfeeinventory`
  ADD PRIMARY KEY (`gymfeeinventory_id`);

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `tbl_pos`
--
ALTER TABLE `tbl_pos`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `tbl_posgymfee`
--
ALTER TABLE `tbl_posgymfee`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `tbl_productinventory`
--
ALTER TABLE `tbl_productinventory`
  ADD PRIMARY KEY (`proinventory_id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `tbl_sales2`
--
ALTER TABLE `tbl_sales2`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `tbl_sales_total`
--
ALTER TABLE `tbl_sales_total`
  ADD PRIMARY KEY (`total_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_trash`
--
ALTER TABLE `tbl_trash`
  ADD PRIMARY KEY (`trash_id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_equipementinventory`
--
ALTER TABLE `tbl_equipementinventory`
  MODIFY `equipinventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_gymfeeinventory`
--
ALTER TABLE `tbl_gymfeeinventory`
  MODIFY `gymfeeinventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pos`
--
ALTER TABLE `tbl_pos`
  MODIFY `pos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_posgymfee`
--
ALTER TABLE `tbl_posgymfee`
  MODIFY `pos_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_productinventory`
--
ALTER TABLE `tbl_productinventory`
  MODIFY `proinventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sales2`
--
ALTER TABLE `tbl_sales2`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sales_total`
--
ALTER TABLE `tbl_sales_total`
  MODIFY `total_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_trash`
--
ALTER TABLE `tbl_trash`
  MODIFY `trash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
