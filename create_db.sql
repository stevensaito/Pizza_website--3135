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
(1, 'Pepperoni Pizza', '13.99', 'Double pepperoni and extra pizza mozzarella. 12" Medium'),
(2, 'BBQ Chicken Pizza', '14.99', 'Ultimate BBQ sauce, smoked aged cheddar cheese, grilled chicken strips, red onion, and green peppers. 12" Medium'),
(3, 'Cheese Pizza', '12.99', 'Extra pizza mozzarella and two of your favourite toppings. 12" Medium'),
(4, 'Meat Lovers Pizza', '14.99', 'Pepperoni, Italian sausage, mild sausage, beef topping, ham, bacon crumble and pizza mozzarella. 12" Medium'),
(5, 'Supreme Lovers Pizza', '14.99', 'Pepperoni, mild sausage, beef topping, green pepper, mushrooms, red onion and pizza mozzarella. 12" Medium'),
(6, 'Hawaiian Pizza', '14.99', 'The amazing and classic combination of ham and pineapple on a base of your choice with extra pizza mozzarella. 12" Medium'),
(7, 'Veggie Lovers Pizza', '14.99', 'Mushrooms, green pepper, red onion, ripe tomato and pizza mozzarella. 12" Medium'),
(8, 'Canadian Pizza', '14.99', 'Pepperoni, bacon crumble, mushrooms and pizza mozzarella. 12" Medium'),
(9, 'Chicken Caesar Pizza', '14.99', 'Hail Caesar! The classic salad inspired this pizza with grilled chicken, bacon, roasted garlic, creamy alfredo sauce and 100% pizza mozzarella and parmesan cheeses. 12" Medium'),
(10, 'Grilled Chicken Rustico Pizza', '14.99', 'Grilled chicken breast , grilled red peppers, marinated pesto tomatoes and pizza mozzarella. 12" Medium'),
(11, 'Super Supreme Pizza', '14.99', 'Pepperoni, Italian sausage, mild sausage, beef topping, ham, green pepper, mushrooms, red onion, black olives and pizza mozzarella. 12" Medium'),

(20, 'Honey Garlic Traditional Wings', '12.49', 'Classic plump and juicy chicken wings, 14 Piece'),
(21, 'Salt & Pepper Traditional Wings', '12.49', 'Classic plump and juicy chicken wings, 14 Piece'),
(22, 'Mild Buffalo Traditional Wings', '12.49', 'Classic plump and juicy chicken wings, 14 Piece'),
(23, 'Medium Buffalo Traditional Wings', '12.49', 'Classic plump and juicy chicken wings, 14 Piece'),
(24, 'Burnin Hot Buffalo Traditional Wings', '12.49', 'Classic plump and juicy chicken wings, 14 Piece'),
(25, 'Honey BBQ Traditional Wings', '12.49', 'Classic plump and juicy chicken wings, 14 Piece'),

(30, 'Honey Garlic Boneless Bites', '12.49', 'Classic plump and juicy chicken bites, 14 Piece'),
(31, 'Salt & Pepper Boneless Bites', '12.49', 'Classic plump and juicy chicken bites, 14 Piece'),
(32, 'Mild Buffalo Boneless Bites', '12.49', 'Classic plump and juicy chicken bites, 14 Piece'),
(33, 'Medium Buffalo Boneless Bites', '12.49', 'Classic plump and juicy chicken bites, 14 Piece'),
(34, 'Burnin Hot Buffalo Boneless Bites', '12.49', 'Classic plump and juicy chicken bites, 14 Piece'),
(35, 'Honey BBQ Boneless Bites', '12.49', 'Classic plump and juicy chicken bites, 14 Piece'),

(40, 'Creamy Chicken Alfredo Meal', '17.99', 'Sliced grilled chicken breast tossed with oven-baked rotini in a creamy alfredo sauce. Includes fresh breadsticks! Family size serves 4'),
(41, 'Bacon Mac n Cheese Meal', '17.99', 'Oven-baked rotini in a creamy cheddar cheese sauce topped with bacon and pizza mozzarella. Includes fresh breadsticks! Family size serves 4'),
(42, 'Meaty Marinara Meal- Family Size', '17.99', 'Italian-seasoned meat sauce and rotini pasta topped with pizza mozzarella and freshly baked. Includes fresh breadsticks! Family size serves 4'),
(43, 'Mediterranean Vegetable Meal', '17.99', 'Roasted red pepper, feta, black olives, red onion, green pepper and pizza mozzarella tossed with whole grain rotini & baked in pesto and marinara sauce. Includes fresh breadsticks! Family size serves 4');


-- incrementing for customerNum
INSERT INTO orders VALUES
(100, 'Ryan Sakaki', '6045747898', '12666 72 Ave', 'Pepporoni Pizza (2)', '35.99'),
(101, 'Craig Spence', '7788088870', '3700 Willingdon Ave','Creamy Chicken Alfredo Meal (1), Canadian Pizza (2)', '33.98');

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
