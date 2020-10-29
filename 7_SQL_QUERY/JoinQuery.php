SELECT * FROM students
JOIN classes ON classes.id = students.class_id;

SELECT * FROM students
INNER JOIN classes ON classes.id = students.class_id;


SELECT * FROM students
LEFT JOIN classes ON classes.id = students.class_id;

SELECT * FROM students
RIGHT JOIN classes ON classes.id = students.class_id;


SELECT * FROM students
LEFT JOIN classes ON classes.id = students.class_id
UNION
SELECT * FROM students
RIGHT JOIN classes ON classes.id = students.class_id;


SELECT * FROM students
LEFT JOIN classes ON classes.id = students.class_id
UNION ALL
SELECT * FROM students
RIGHT JOIN classes ON classes.id = students.class_id;