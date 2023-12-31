-- Tasks:
-- 1. Write a SQL query to retrieve all the customer information along with the total number of orders placed by each customer. Display the result in descending order of the number of orders.

SELECT Customers.customer_id, Customers.name, Customers.email, Customers.location, COUNT(Orders.order_id) AS total_orders
FROM Customers
LEFT JOIN Orders ON Customers.customer_id = Orders.customer_id
GROUP BY Customers.customer_id, Customers.name, Customers.email, Customers.location
ORDER BY total_orders DESC;

-- 2. Write a SQL query to retrieve the product name, quantity, and total amount for each order item. Display the result in ascending order of the order ID.

SELECT Products.name, Order_Items.quantity, Order_Items.quantity * Products.price AS total_amount
FROM Order_Items
JOIN Products ON Order_Items.product_id = Products.product_id
ORDER BY Order_Items.order_id ASC;

-- 3. Write a SQL query to retrieve the total revenue generated by each product category. Display the category name along with the total revenue in descending order of the revenue.
SELECT Categories.name, SUM(Order_Items.quantity * Products.price) AS total_revenue
FROM Categories
JOIN Products ON Categories.category_id = Products.category_id
JOIN Order_Items ON Products.product_id = Order_Items.product_id
GROUP BY Categories.name
ORDER BY total_revenue DESC;

-- 4. Write a SQL query to retrieve the top 5 customers who have made the highest total purchase amount. Display the customer name along with the total purchase amount in descending order of the purchase amount.
SELECT Customers.name, SUM(Orders.total_amount) AS total_purchase_amount
FROM Customers
JOIN Orders ON Customers.customer_id = Orders.customer_id
GROUP BY Customers.name
ORDER BY total_purchase_amount DESC
LIMIT 5;