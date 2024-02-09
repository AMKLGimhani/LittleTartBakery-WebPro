#  Customer Table - Manasha Siriwardana

```sql

CREATE TABLE `Customer` (
  `customer_id` int NOT NULL,
  `member_id` int NOT NULL,
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

# Product Table - Nilmini Pusweli
```sql

CREATE TABLE `Product` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

```
# Order Table- Chalani Kalpana
```sql

CREATE TABLE `Order_Table` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


```


# Membership Table- Chalani Kalpana

```sql
CREATE TABLE `Membership` (
  `member_id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `apartment_no` varchar(50) NOT NULL,
  `street_no` varchar(10) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ph_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


```
