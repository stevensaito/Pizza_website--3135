-- Create the pizza_database database
DROP DATABASE IF EXISTS pizza_database;
CREATE DATABASE pizza_database;
USE pizza_database;  -- MySQL command


CREATE TABLE menu (
  foodID					INT(50)			NOT NULL	AUTO_INCREMENT,
  foodName					VARCHAR(255)    NOT NULL,
  price						DECIMAL(10,2)  NOT NULL,
  description				VARCHAR(255)	NOT NULL,
  PRIMARY KEY (foodID)
);

CREATE TABLE orders (
  customerNum		INT(255)		NOT NULL	 AUTO_INCREMENT,
  name				VARCHAR(255)    NOT NULL,
  phoneNumber		VARCHAR(255)	NOT NULL,
  address			VARCHAR(255)	NOT NULL,
  cart				VARCHAR(255)	NOT NULL,
  totalPrice		DECIMAL(10,2)  NOT NULL,
  PRIMARY KEY (customerNum)
);


INSERT INTO menu VALUES
(1, 'Pepporoni Pizza', '14.99', 'Double pepperoni and extra pizza mozzarella.'),
(2, 'BBQ Chicken Pizza', '14.99', 'Ultimate BBQ sauce, smoked aged cheddar cheese, grilled chicken strips, red onion, and green peppers');

-- incrementing for customerNum
INSERT INTO orders VALUES
(100, 'Ryan Sakaki', '6045747898', '12666 72 Ave', '2 M Pepporoni Pizza', '35.99'),
(101, 'Craig Spence', '7788088870', '3700 Willingdon Ave','1 l BBQ Chicken Pizza ', '20,99');

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON pizza_database.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON menu
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON orders
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';
