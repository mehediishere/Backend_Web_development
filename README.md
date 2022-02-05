# WebDevelopment [-BackEnd-]

### **About this repository**
This repository contain documentation, basic example & approach for **Backend Web Development** knowledge. Also this will be great help to you if you start not long ago & want to know how actually these applied in real project. Since these are written that way. Here we focus on **php & mysql** for that.

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
```
INSERT INTO TABLE_NAME (column1, column2, column3,...columnN) VALUES (value1, value2, value3,...valueN);
```
Now if we insert value in the same order as the columns in the table then we can use the following query insted of above one.
```
INSERT INTO TABLE_NAME VALUES (value1,value2,value3,...valueN);
```

### **_Select:_**
```
SELECT * FROM table_name;
```
```
SELECT column1, column2, columnN FROM table_name;
```
```
SELECT column1, column2, columnN FROM table_name WHERE [condition];
```
Example :<br> SELECT ID, NAME, SALARY FROM CUSTOMER WHERE SALARY > 20000;
```
SELECT column1, column2, columnN FROM table_name WHERE [condition1] AND [condition2]...AND [conditionN];
```
Example :<br> SELECT ID, NAME, SALARY FROM CUSTOMERS WHERE SALARY > 2000 AND age < 25;
```
SELECT column1, column2, columnN FROM table_name WHERE [condition1] OR [condition2]...OR [conditionN]
```
Example :<br> SELECT ID, NAME, SALARY FROM CUSTOMERS WHERE SALARY > 2000 OR age < 25;

### **_Update:_**
```
UPDATE table_name SET column1 = value1, column2 = value2. .., columnN = valueN WHERE [condition];
```
Example :<br>
UPDATE CUSTOMERS SET ADDRESS = 'Pune' WHERE ID = 6;

Example :<br>
UPDATE CUSTOMERS SET ADDRESS = 'Pune', SALARY = 1000.00;

### **_Delete:_**
```
DELETE FROM table_name WHERE [condition];
```
Example :<br>
DELETE FROM CUSTOMERS;

Example :<br>
DELETE FROM CUSTOMERS WHERE ID = 6;

### **_Like:_**
```
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

```
SELECT column_name(s) FROM table_name WHERE condition LIMIT number;
```
```
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
```
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
```
SELECT column1, column2 FROM table_name WHERE [ conditions ] GROUP BY column1, column2 ORDER BY column1, column2
```
Example :<br>
SELECT NAME, SUM(SALARY) FROM CUSTOMERS GROUP BY NAME;

For more [w3school](https://www.w3schools.com/sql/sql_groupby.asp) [tutorialpoint](https://www.tutorialspoint.com/sql/sql-group-by.htm)

### **_Join :_**
```
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
```
For details [w3school](https://www.w3schools.com/sql/sql_join.asp)

### **_Union :_**

This used to combine the result-set of two or more SELECT statements.

```
SELECT column_name(s) FROM table1 UNION SELECT column_name(s) FROM table2;
```
```
SELECT column_name(s) FROM table1 UNION ALL SELECT column_name(s) FROM table2;
```

---
>**_Create database:_**
```
CREATE DATABASE DatabaseName;
```
>**_Delete database:_**
```
DROP DATABASE DatabaseName;
```
>**_Select database:_**
```
USE DatabaseName;
```
>**_Create table:_**
```
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
```
DROP TABLE table_name;
```
>**_Rename column:_**
```
ALTER TABLE tableName CHANGE `oldcolname` `newcolname` datatype(length);
```
>**_TRUNCATE:_**

By using the TRUNCATE TABLE  statement, you delete all data from the table permanently and reset the auto-increment value to zero.
```
TRUNCATE TABLE table_name;
```
>**_Reset auto increment value using ALTER TABLE statement:_**
```
ALTER TABLE table_name AUTO_INCREMENT = value;
```
