SELECT class, COUNT(id)
FROM students
GROUP BY class;

SELECT class, MAX(age) AS student_age
FROM students
GROUP BY class;