# Table 4: Order Table

CREATE TABLE `Order Table` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quntity` int NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;