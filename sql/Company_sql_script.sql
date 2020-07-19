Create database if not exists wire_and_nail;
use wire_and_nail;

-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: tracker
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.16.04.
--
-- Table structure for table `Expenses`
--

DROP TABLE if exists `expenses`;
CREATE TABLE `expenses` (
  `ExpenseId` int NOT NULL auto_increment,
  `Date` date NOT NULL,
  `Expense_description` varchar(45) NOT NULL,
  `Amount_of_Expense` decimal(12,4) NOT NULL,
  `Remarks` varchar(45) NOT NULL,
  `Receipt_copy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ExpenseId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `Manufacturing`
--

DROP TABLE if exists `manufacturing`;

CREATE TABLE `manufacturing` (
  `Manufacturing_id` int primary key not null auto_increment,
  `Date` date NOT NULL,
  `Product_type` varchar(45) NOT NULL,
  `Product_size` decimal(12,4) NOT NULL,
  `Product_quantity` decimal(12,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `Sales`
--

DROP TABLE if exists `sales`;

CREATE TABLE `sales` (
  `Sale_id` int primary key not null auto_increment,
  `Date` date NOT NULL,
  `Product_type` varchar(45) NOT NULL,
  `Product_size` decimal(7,4) NOT NULL,
  `Product_quantity` decimal(12,4) NOT NULL,
  `Price` decimal(12,4) NOT NULL,
  `Customer_detail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `electricity_consumption_data`
--

DROP TABLE if exists `electricity_consumption_data`;

CREATE TABLE `electricity_consumption_data` (
  `Eb_Id` int NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `eb_reading` varchar(45) NOT NULL,
  PRIMARY KEY (`Eb_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


--
-- Table structure for table `product_inventory`
--

DROP TABLE if exists `product_inventory`;

CREATE TABLE `product_inventory` (
  `product_inventory_Id` int NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `raw_material_price` decimal(12,4) NOT NULL,
  `raw_material_quantity` decimal(12,4) NOT NULL,
  PRIMARY KEY (`product_inventory_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dump completed on 2020-07-04 22:57:10
