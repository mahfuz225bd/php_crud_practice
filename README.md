# PHP MySQL CRUD Tutorial

This repo can be helpful for practicing PHP MySQL CRUD for beginners. I made this repo for beginners who is learnt basic PHP and now want to practice CRUD.

# Some Concepts Needs to Know for Making CRUD PHP

There are some topics provided bellow (in Bengali), beginners must have to know before making a CRUD project \w PHP MySQL.

### name vs id vs class

- id ও class এর পার্থক্য
- id ও class এর সুবিধা-অসুবিধা
- id ও class এর ব্যবহার
- name কেন ব্যবহার হয়?

### HTML Form

- HTML Form কি? কেন ব্যবহার করা হয়?
- HTML Input কি?
- কেন Form element এর মধ্যে HTML Input ব্যবহার হয়?
- HTML Form action ও method কি?
- HTML submit এবং reset এর ব্যবহার

### HTML Table

- HTML Table কি? কেন ব্যবহার করা হয়?
- &lt;tr> ও &lt;td> কি? কেন ব্যবহার করা হয়?
- কেন &lt;table&gt; element এর মধ্যে &lt;tr&gt; এবং &lt;tr&gt; element এর মধ্যে &lt;td&gt; ব্যবহার হয়?
- কেন ও কখন &lt;td&gt; এর পরিবর্তে &lt;th&gt; ব্যবহার করা হয়?
  
### PHP Basic

- PHP কি? কেন ব্যবহার হয়?
- PHP ব্যবহার করে Hello World প্রোগ্রাম তৈরি করা
- HTML Form এর data গুলো $\_POST ও $\_GET এর মাধ্যমে PHP প্রোগ্রামে ব্যবহার

### PHP: $\_POST ও $\_GET কি?

- $\_POST: Bookmark-able URL তৈরি করে না।
- $\_POST এর প্রয়োগ: সাধারনত login system তৈরিতে কিংবা ডাটা insertion এর ক্ষেত্রে ব্যবহার করা হয়।
- $\_GET: Bookmark-able URL তৈরি করে।
- $\_GET এর প্রয়োগ: View Details, Edit কিংবা Delete করার ক্ষেত্রে ক্ষেত্রে ব্যবহার করা হয়।

### CRUD কি?

- C = Create -> ডাটা Insert/Add করা বুঝায়
- R = Read -> ডাটা View করা বুঝায়
- U = Update -> ডাটা Edit করে Save করা বুঝায়
- D = Delete -> ডাটা মুছে ফেলার জন্য ব্যবহার করা হয়।

### Database

- Database কি?
- Database কেন ব্যবহার করা হয়?

### SQL

- SQL কি?

  ##### Code Examples:

  1. ```
     SHOW DATABASES;
     ```

  2. ```
     USE students;

     /* USE <Database Name> */
     ```

  3. ```
     /* (Example 2 code লিখার পর) */
     SHOW TABLES;
     ```

### SQL Basic CRUD Operations

- Select (R = Read)

  ##### Code Examples:

  1. ```
     SELECT * FROM students;

     /* SELECT * FROM <Table Name> */
     ```

  2. ```
     SELECT * FROM students LIMIT 10;

     /* SELECT * FROM <Table Name> LIMIT <Number of Records want to Show> */
     ```

  3. ```
     SELECT name, roll FROM students;

     /* SELECT <Column1>, <Column2>, <Column3>...<ColumnNth> FROM <Table Name> */
     ```

  4. ```
     SELECT name, roll FROM students LIMIT 5;

     /* SELECT <Column1>, <Column2>, <Column3>...<ColumnNth> FROM <Table Name> LIMIT <Number of Records want to Show> */
     ```

- Insert (C = Create)

  ##### Code Examples:

  1. ```
     INSERT INTO students VALUES (, 'John', 101, 700);

     /* INSERT INTO <Table Name> VALUES (<Value of Column1>, <Value of Column2>, <Value of Column3>...<Value of ColumnNth>) */
     ```

  2. ```
     INSERT INTO students (name, roll) VALUES ('John', 101);

     /* INSERT INTO <Table Name> (<Column1>, <Column2>, <Column3>...<ColumnNth>) VALUES (<Value of Column1>, <Value of Column2>, <Value of Column3>...<Value of ColumnNth>) */
     ```

- Delete (D = Delete)

  ##### Code Examples:

  1. ```
     DELETE FROM students WHERE id=2;

     /* DELETE FROM <Table Name> WHERE <Condition> */
     ```

- Update (U = Update)

  ##### Code Examples:

  1. ```
     UPDATE students
     SET
       amount=600
     WHERE id=2;

     /*
     UPDATE <Table Name>
     SET
       <Column>=<Value for Column>
     WHERE <Condition>;
     */
     ```

  2. ```
     UPDATE students
     SET
       name='John Doe',
       amount=900
     WHERE name='John' AND id=2;

     /*
     UPDATE <Table Name>
     SET
       <Column1>=<Value for Column1>,
       <Column2>=<Value for Column2>,
       <Column3>=<Value for Column3>,
       ...
       <ColumnNth>=<Value for ColumnNth>
     WHERE <Condition>;
     */
     ```

### Procedure to Execute an SQL Query though PHP

1. GET as variable
   - hostname
   - username
   - password
   - database
2. Connect to the database using hostname, username, password, database
3. $sql = Make a SQL string
4. Execute $sql
5. Close the database connection

### PHP MySQL Reference

```
$conn = new mysqli($hostname, $username, $password, $database); // Instantiation of mysqli
$conn->connect_error; // For getting connection error message
$conn->query(SQL query string); // For executing SQL query
$conn->query(SQL query string)->number_rows; // For getting number of rows
$conn->query(SQL query string)->fetch_assoc(); // If there are more than zero rows exists, the method fetch_assoc() puts all the results into an associative array that we can loop through
$conn->close(); // For closing the database connection
```

## Follow Those Steps for Creating this CRUD App using PHP MySQL

1. Create an index.html file and code for HTML form.
2. Create default.css and link to HTML file.
3. Include `<table>` element into HTML for showing data.
4. Change index.html to index.php
5. Get data from DB and show to index.php following steps:

   - Connect DB
   - $result = (Execute SQL query and get data)
   - while loop on the condition of $row = $result->fetch_assoc() though target html view element \w $row['column_name']

6. Create and code to insert.php following steps:

   - Get form data using $\_POST
   - Make SQL query string
   - Execute the SQL query
   - Go to home page

7. Create and code to delete.php following steps:

   - Get id using $\_GET
   - Make SQL query string
   - Execute the SQL query
   - Go to home page

8. Create and code to edit.php following steps:

   - Create a new form
   - Get data from DB following by id
   - Set data input value of the form
   - Make SQL query string for updating
   - onSubmit: Execute the update query
   - Go to home page

# Learning Resources in Bengali

- [HTML5 Essential Training](https://www.youtube.com/watch?v=_bjfDQWG65c&list=PLSNRR4BKcowDF5Mf7zPznfRwfTzmZpSNL&ab_channel=ProcoderBD) *by Procoder*
- [HTML5 | HTML Tutorial For Beginners](https://www.youtube.com/watch?v=ELphoMApj-8&list=PLNMnAEqLBwmo2aAHG1hT41QCgYV3366gp&ab_channel=HabluProgrammer) *by Hablu Programmer*
- [CSS3 Essential Training](https://www.youtube.com/watch?v=Z1Lgl5lmHFY&list=PLSNRR4BKcowA9IsN4F5utx7OlWUdN0RZV&ab_channel=ProcoderBD) *by Procoder*
- [CSS Bangla Tutorial / CSS3 Bangla Tutorial](https://www.youtube.com/watch?v=jrI6jYYVI78&list=PLNMnAEqLBwmq4cvfIMWE9ZiAmndL5VOIM&ab_channel=HabluProgrammer) *by Hablu Programmer*
- [CSS3 and CSS4 Weird Parts Bangla Tutorial](https://www.youtube.com/watch?v=MH2sJThTgEE&list=PL_XxuZqN0xVD3oeT3ckKBmnc7krm-SZl2&ab_channel=StackLearner) * by Stack Learner*
- [JavaScript Bangla Tutorial | JS Bangla Tutorial Series for Beginners](https://www.youtube.com/watch?v=rePN-VFo1Eo&list=PLHiZ4m8vCp9OkrURufHpGUUTBjJhO9Ghy&ab_channel=LearnwithSumit-LWS-Bangladesh) *by Learn with Summit Bangladesh*
- [PHP For Absolute Beginners in Bangla](https://www.youtube.com/watch?v=_TST9dVptls&ab_channel=ProcoderBD) *by Procoder*
- [mysql bangla tutorial | Mysql Database | HSC,CSE, Anyone](https://www.youtube.com/watch?v=GYHu3nstDkQ&list=PLbC4KRSNcMnqp4x6XstgFCVi6XVu37t99&index=1&ab_channel=LearnHunter) *by Learn Hunter*
- 
