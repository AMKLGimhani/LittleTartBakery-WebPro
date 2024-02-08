#  Customer Table - Manasha Siriwardana

```sql

CREATE TABLE `Customer` (
  `customer_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lnam` varchar(50) NOT NULL,
  `apartment_no` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tp_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


```