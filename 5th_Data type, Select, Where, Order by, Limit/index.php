<?php 

	// select data from Database
	SELECT * FROM students;

	// select column from database
	SELECT id, name, age FROM students;

	// select unique data from database
	SELECT DISTINCT age FROM students;

	// select ID from database
	SELECT * FROM students 
	WHERE id = 1;

	
	SELECT * FROM students 
	WHERE name = 'Tamim';


	SELECT * FROM students 
	WHERE id <> 1;


	SELECT * FROM students 
	WHERE id > 2;


	SELECT * FROM students 
	WHERE id <= 2;


	SELECT * FROM students
	WHERE gpa IS NULL;

	SELECT * FROM students
	WHERE gpa IS NOT NULL;


	SELECT * FROM students 
	WHERE id BETWEEN 2 and 3;


	SELECT * FROM students 
	WHERE id IN (1, 4, 5);


	SELECT * FROM students
	WHERE name LIKE 'Ra%';


	SELECT * FROM students
	WHERE name LIKE '%im';


	SELECT * FROM students
	WHERE name LIKE '%mi%';



	SELECT * FROM students
	WHERE age = 21 AND id = 3;


	SELECT * FROM students
	WHERE age = 12 OR id = 3;


	SELECT * FROM students
	ORDER BY age;

	SELECT * FROM students
	ORDER BY age ASC; 

	SELECT * FROM students
	ORDER BY age DESC; 


	SELECT * FROM students
	LIMIT 0, 2;

	SELECT * FROM students
	LIMIT 2, 2;


 ?>