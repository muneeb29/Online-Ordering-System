SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Customer table
CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `surname` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
   `username` varchar(255) NOT NULL,
   `password` varchar(255) NOT NULL,
   `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert Customers
INSERT INTO `customer` ( `customerid`, `firstname`, `surname`, `address`, `telephone`,`email`, `username`, `password`,`type`) VALUES
(1, 'Admin', '', '', '','admin@ordering.com','AdminORD','password','admin'),
(2, 'Bob', 'Thomas', '2 Second Street', '07000000','user@example.com','bob1','pass','user');


-- Orders Table

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `total` decimal(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Payment Table

CREATE TABLE `payment` (
  `paymentid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `card_num` int(11) NOT NULL,
  `csv` int(11) NOT NULL,
  `exp_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Order-menu table
CREATE TABLE `order_menu` (
  `order_menuid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Menu table
CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(2) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert into Menu Table
INSERT INTO `menu` (`menuid`, `name`, `quantity`, `price`,`type`) VALUES
(1, 'chips', '50', '03.00', 'starter'),
(2, 'pizza', '50', '10.00', 'main'),
(3, 'cake', '50', '15.00', 'dessert'),
(4, 'water', '50', '02.00', 'drinks'),
(5, 'Garlic Bread', '50', '10.00', 'starter'),
(6, 'lasagne', '50', '10.00', 'main'),
(7, 'Fanta', '50', '01.00', 'drinks');



-- Primary Keys

ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

ALTER TABLE `order_menu`
  ADD PRIMARY KEY (`order_menuid`);

ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`);

-- Auto Increment

ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `order_menu`
  MODIFY `order_menuid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT;

-- Foreign Keys
ALTER TABLE `payment`
  ADD FOREIGN KEY (`customerid`) REFERENCES customer(`customerid`),
  ADD FOREIGN KEY (`orderid`) REFERENCES orders(`orderid`);

ALTER TABLE `orders`
  ADD FOREIGN KEY (`customerid`) REFERENCES customer(`customerid`);

ALTER TABLE `order_menu`
  ADD FOREIGN KEY (`orderid`) REFERENCES orders(`orderid`),
  ADD FOREIGN KEY (`menuid`) REFERENCES menu(`menuid`);











