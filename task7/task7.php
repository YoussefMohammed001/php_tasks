<!-- 
1- i need to get avg sallary for every department_id in employee table
SELECT department_id, AVG(salary) AS average_salary FROM employees GROUP BY department_id;

2- i need to get how many employees in every job_id 
SELECT job_id, COUNT(*) AS employee_count FROM employees GROUP BY job_id;

3- how to calc your birthdate by years only 
SELECT YEAR(NOW()) - YEAR(2001-11-30);

4- i need to know job_id of department_id that have commission_pct <> Null
SELECT DISTINCT job_id FROM employees WHERE department_id IN ( SELECT department_id FROM employees WHERE commission_pct IS NOT NULL );


5- i need to know all employees that work under  	Steven as first name
SELECT * FROM employees WHERE manager_id IN ( SELECT employee_id FROM employees WHERE first_name = 'Steven' );
 -->
