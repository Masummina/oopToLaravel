SELECT id, name 
FROM students
WHERE age = 21
UNION
SELECT id, name 
FROM students
WHERE age = 12;