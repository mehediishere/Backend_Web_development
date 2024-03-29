# WebDevelopment [-BackEnd-]

### **About this repository**
This repository contain some documentation, basic example & approach for **Backend Web Development**. Here we focus on **php & mysql** for that.

> Note : This repo is intended for the beginner so that while learning one doesn't get mess up.

**FAQ:**
1. How to insert data into database?
2. How to retrieve data from database?
3. How to retrieve & update data or delete from database?
4. How to retrieve data from database and display it dynamically?
etc.

### **Necessary Software**
* Editor [Personal recommendation: Atom/Sublime text/Visual Studio Code]
* Xampp/WampServer [Mainly for local hosting]

## **_Some Common_ SQL Query**
I assume we're already familier with sql queries. So here some common querys to check out at a glance to rememorize again quickly.

### **_Insert:_**
```mysql
INSERT INTO TABLE_NAME (column1, column2, column3,...columnN) VALUES (value1, value2, value3,...valueN);
```
Now if we insert value in the same order as the columns in the table then we can use the following query insted of above one.
```mysql
INSERT INTO TABLE_NAME VALUES (value1,value2,value3,...valueN);
```

### **_Select:_**
```mysql
SELECT * FROM table_name;
```
```mysql
SELECT column1, column2, columnN FROM table_name;
```
```mysql
SELECT column1, column2, columnN FROM table_name WHERE [condition];
```
Example :<br> SELECT ID, NAME, SALARY FROM CUSTOMER WHERE SALARY > 20000;
```mysql
SELECT column1, column2, columnN FROM table_name WHERE [condition1] AND [condition2]...AND [conditionN];
```
Example :<br> SELECT ID, NAME, SALARY FROM CUSTOMERS WHERE SALARY > 2000 AND age < 25;
```mysql
SELECT column1, column2, columnN FROM table_name WHERE [condition1] OR [condition2]...OR [conditionN]
```
Example :<br> SELECT ID, NAME, SALARY FROM CUSTOMERS WHERE SALARY > 2000 OR age < 25;

### **_Update:_**
```mysql
UPDATE table_name SET column1 = value1, column2 = value2. .., columnN = valueN WHERE [condition];
```
Example :<br>
UPDATE CUSTOMERS SET ADDRESS = 'Pune' WHERE ID = 6;

Example :<br>
UPDATE CUSTOMERS SET ADDRESS = 'Pune', SALARY = 1000.00;

### **_Delete:_**
```mysql
DELETE FROM table_name WHERE [condition];
```
Example :<br>
DELETE FROM CUSTOMERS;

Example :<br>
DELETE FROM CUSTOMERS WHERE ID = 6;

### **_Like:_**
```mysql
SELECT FROM table_name
WHERE column LIKE 'XXXX%'

or 

SELECT FROM table_name
WHERE column LIKE '%XXXX%'

or

SELECT FROM table_name
WHERE column LIKE 'XXXX_'

or

SELECT FROM table_name
WHERE column LIKE '_XXXX'

or

SELECT FROM table_name
WHERE column LIKE '_XXXX_'
```
Example :<br>
SELECT * FROM CUSTOMERS WHERE SALARY LIKE '200%'

### **_Limit:_**

```mysql
SELECT column_name(s) FROM table_name WHERE condition LIMIT number;
```
```mysql
SELECT * FROM Customers WHERE Country='Germany' LIMIT 3;
```
MySQL provides a LIMIT clause that is used to specify the number of records to return.

The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.

Assume we wish to select all records from 1 - 30 (inclusive) from a table called "Orders". The SQL query would then look like this:

**$sql = "SELECT * FROM Orders LIMIT 30";**

When the SQL query above is run, it will return the first 30 records.

What if we want to select records 16 - 25 (inclusive)?

Mysql also provides a way to handle this: by using OFFSET.

The SQL query below says "return only 10 records, start on record 16 (OFFSET 15)":

**$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";**

You could also use a shorter syntax to achieve the same result:

**$sql = "SELECT * FROM Orders LIMIT 15, 10";**

Notice that the numbers are reversed when you use a comma.

### **_Order By :_**

This is used to sort the data in ascending or descending order, based on one or more columns.
```mysql
SELECT column-list FROM table_name [WHERE condition]  [ORDER BY column1, column2, .. columnN] [ASC | DESC];
```
Example :<br>
SELECT * FROM CUSTOMERS ORDER BY NAME, SALARY;

Note: The sorted result will be in an ascending order by the NAME and the SALARY.

Example :<br>
SELECT * FROM CUSTOMERS ORDER BY NAME DESC;

Note:This would sort the result in the descending order by NAME.

### **_Group By :_**

This clause is used to group rows that have the same values.
```mysql
SELECT column1, column2 FROM table_name WHERE [ conditions ] GROUP BY column1, column2 ORDER BY column1, column2
```
Example :<br>
SELECT NAME, SUM(SALARY) FROM CUSTOMERS GROUP BY NAME;

For more [w3school](https://www.w3schools.com/sql/sql_groupby.asp) [tutorialpoint](https://www.tutorialspoint.com/sql/sql-group-by.htm)

### **_Join :_**
```mysql
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
```
For details [w3school](https://www.w3schools.com/sql/sql_join.asp)

### **_Union :_**

This used to combine the result-set of two or more SELECT statements.

```mysql
SELECT column_name(s) FROM table1 UNION SELECT column_name(s) FROM table2;
```
```mysql
SELECT column_name(s) FROM table1 UNION ALL SELECT column_name(s) FROM table2;
```

---
>**_Create database:_**
```mysql
CREATE DATABASE DatabaseName;
```
>**_Delete database:_**
```mysql
DROP DATABASE DatabaseName;
```
>**_Select database:_**
```mysql
USE DatabaseName;
```
>**_Create table:_**
```mysql
CREATE TABLE table_name(
   column1 datatype,
   column2 datatype,
   column3 datatype,
   .....
   columnN datatype,
   PRIMARY KEY( one or more columns )
);
```
>**_Delete table:_**
```mysql
DROP TABLE table_name;
```
>**_Rename column:_**
```mysql
ALTER TABLE tableName CHANGE `oldcolname` `newcolname` datatype(length);
```
>**_TRUNCATE:_**

By using the TRUNCATE TABLE  statement, you delete all data from the table permanently and reset the auto-increment value to zero.
```mysql
TRUNCATE TABLE table_name;
```
>**_Reset auto increment value using ALTER TABLE statement:_**
```mysql
ALTER TABLE table_name AUTO_INCREMENT = value;
```
>**_Left join:_**
```mysql
SELECT a.id, a.name, a.genericname, b.category, c.name AS manufacturer, a.shelf, a.price, a.manufacturerprice, a.strength, d.unit 
FROM medicine AS a 
LEFT JOIN medicine_category AS b ON a.category = b.id 
LEFT JOIN manufacturer AS c ON a.manufacturer = c.id 
LEFT JOIN medicine_unit AS d ON a.unit = d.id;
```
### Get the number of days in a month for a specified year and calendar
```php
$d=cal_days_in_month(CAL_GREGORIAN,10,2005);
echo "There was $d days in October 2005";
```

### Find product from date range
```mysql
SELECT SUM(`payable`) AS pr FROM `purchase` WHERE `store` = '1' AND `date` BETWEEN '2022-07-01' AND '2022-07-31';
```
