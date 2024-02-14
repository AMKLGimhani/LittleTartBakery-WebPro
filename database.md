#  Customer Table - Chalani Kalpana

```sql

CREATE TABLE `Customer` (
  `customer_id` int NOT NULL,
  `member_id` int NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apartment_no` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tp_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

```
#  Review Table - Chalani Kalpana
```sql

CREATE TABLE `review` (
  `review_id` int NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `rating` int NOT NULL,
  `review_text` varchar(200) NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

#  Admin Table - A.M. Kushani Lakshika

```sql

CREATE TABLE `Admin` (
  `admin_id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_tp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


```

#  Career Table - A.M. Kushani Lakshika

```sql

CREATE TABLE `career` (
  `applicant_id` int NOT NULL,
  `position` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `apartmentNo_street` varchar(70) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel_no` varchar(20) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

```

# Product Table - Nilmini Pusweli
```sql

CREATE TABLE `Product` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Humming bird cake', 'Pictures/1.jpg', 30.00),
(2, 'Chocolate Cake', 'Pictures/2.jpg', 30.00),
(3, 'Vanila Cake', 'Pictures/3.jpg', 20.00),
(4, 'German Chocolate Cake', 'Pictures/4.jpg', 40.00),
(5, 'Valantine Cake', 'Pictures/5.jpg', 60.00),
(6, 'Carrot Cake', 'Pictures/6.jpg', 30.00),
(7, 'Birthday CupCake', 'Pictures/7.jpg', 30.00),
(8, 'Valentine CupCake', 'Pictures/8.jpg', 56.00),
(9, 'Classic CupCake', 'Pictures/9.jpg', 30.00),
(10, 'Confetti CupCake', 'Pictures/10.jpg', 56.00), 
(11, 'Mini Vanila CupCake', 'Pictures/11.jpg', 35.00),
(12, 'Rose CupCake', 'Pictures/12.jpg', 50.00);

```

# Order Table - Nilmini Pusweli
```sql

CREATE TABLE `Order_Table` (
  `order_id` int NOT NULL,
  `id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


```

# Order Table- Nilmini Pusweli
```sql
CREATE TABLE `Order_Table` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

```

# Membership Table- Manasha Siriwardana

```sql
CREATE TABLE Membership (
  member_id int NOT NULL,
  subscription varchar(50) NOT NULL,
  first_name varchar(50) NOT NULL,
  last_name varchar(50) NOT NULL,
  apartment_no varchar(50) NOT NULL,
  street varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  postal_code varchar(10) NOT NULL,
  city varchar(20) NOT NULL,
  email varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  ph_no varchar(20) NOT NULL,
  TnC tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

```
