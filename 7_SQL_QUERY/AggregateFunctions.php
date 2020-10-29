
SELECT MIN(age)
FROM students;

SELECT MAX(age)
FROM students;

SELECT COUNT(age)
FROM students;

SELECT AVG(age)
FROM students;

SELECT SUM(age)
FROM students;

SELECT * FROM students
WHERE age = (SELECT MAX(age) FROM students);
