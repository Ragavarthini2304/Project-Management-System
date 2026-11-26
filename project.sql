
create database projectdb;
use projectdb;
CREATE TABLE Employees(
emp_id INT PRIMARY KEY,
name VARCHAR(100),
role VARCHAR(50),
department VARCHAR(50)
);
select *from Employees;

CREATE TABLE Projects(
project_id INT PRIMARY KEY,
name VARCHAR(100),
start_date DATE,
end_date DATE,
status VARCHAR(20)
);
select *from Projects;

CREATE TABLE Tasks(
task_id INT PRIMARY KEY,
project_id INT,
emp_id INT,
description TEXT,
due_date DATE,
status VARCHAR(20)
);
select *from Tasks;