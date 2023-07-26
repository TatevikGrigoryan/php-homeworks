<!-- 1.Print the average salary in each department.-->
SELECT departments.department_name, AVG(employees.salary) AS average_salary
FROM employees
INNER JOIN departments ON employees.department_id = departments.department_id
GROUP BY departments.department_name;

<!--2.Find the most common 3 names-->

SELECT employees.FIRST_NAME, COUNT(*) AS name_count
FROM employees
GROUP BY employees.FIRST_NAME
ORDER BY name_count DESC
LIMIT 3;

<!--3.Find the oldest hired employee in each department.-->
SELECT departments.DEPARTMENT_NAME,employees.FIRST_NAME, MIN(employees.HIRE_DATE) AS oldest_employee
FROM employees
INNER JOIN departments ON employees.DEPARTMENT_ID = departments.DEPARTMENT_ID
GROUP BY employees.DEPARTMENT_ID, employees.FIRST_NAME;

<!--4.Find number of employees in all departments.-->
SELECT departments.DEPARTMENT_NAME, COUNT(employees.DEPARTMENT_ID) AS employees_count
FROM employees
LEFT JOIN departments ON employees.DEPARTMENT_ID = departments.DEPARTMENT_ID
GROUP BY employees.DEPARTMENT_ID
<?php


