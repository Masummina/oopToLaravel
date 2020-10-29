<?php 

	// We can connect database two way.
	// $conn = new mysqli(servername, username, password, dbname);
	// procudure rull;
	//$conn = mysqli_connect(server, username, password, dbname);
// ----------****-------
	// Query
	// $conn->query($sql);
	// or another way we can execuae query
	 // mysqli_query($conn, $sql);

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'school';

$conn = new mysqli($server, $username, $password, $dbname);
if($conn){
	echo "yes connected";
}

$sql = "SELECT * FROM students where age > 30";

// $result = $conn->query($sql);

// echo $result->num_rows;
// while($row = $result->fetch_assoc()){
// 	echo "<pre>";
// 	var_dump($row);
// 	echo "<pre>";
// }

$result = $conn->query($sql);
echo $result->num_rows;
while($rows = $result->fetch_assoc()){
	echo "<pre>";
		echo $rows['id']. ' ' . 'Name: '. $rows['name'] . ' Age :'. $rows['age'];
	echo "<pre>";
}


// Agreegate function

// Agreegate function is MYSQL some build in function
// ------------------*** ---------
// column summ aggregate function
// SELECT SUM(age) FROM students ===>   SELECT AVG(gpa) FROM students

$sql = "SELECT AVG(gpa) FROM students";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	echo "Avarage GPA is: ";
	print_r($rows);}
}


echo "<br>";

$sql = "SELECT COUNT(gpa) FROM students";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	echo "Avarage GPA is: ";
	print_r($rows);}
}

//$sql = "SELECT COUNT(age) FROM students";

// select Group By;
//$sql =  SELECT MAX(age) FROM `students` WHERE class = 3;
echo "<h2>select Group By</h2>";
$sql = "SELECT class, COUNT(id) FROM students GROUP BY class";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	print_r($rows);}
}

echo "<h2>use Group By:  Select max age from every class</h2>";
$sql = "SELECT class, MAX(age) as student_age FROM students GROUP BY class";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	print_r($rows);}
}

echo "<h2>SQL Union</h2>";
echo "SELECT id, name, age FROM students WHERE age > 30 UNION SELECT id, name, age from students WHERE age < 20"."<br>";
$sql = "SELECT id, name, age  FROM students WHERE age > 30 UNION SELECT id, name, age from students WHERE age < 20";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	print_r($rows);}
}
echo "<h2>Joing Query Inner</h2>";
echo "<p>SELECT * FROM students JOIN classes ON classes.class_id = students.class</p>";
$sql = "SELECT * FROM students JOIN classes ON classes.class_id = students.class";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	print_r($rows);}
}

echo "<h2>Left JOIN Query</h2>";
echo "<p>SELECT * FROM students LEFT JOIN classes ON classes.class_id = students.class</p>";
$sql =  "SELECT * FROM students LEFT JOIN classes ON classes.class_id = students.class";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	print_r($rows);}
}
echo "<h2>Full JOIN Query</h2>";
echo "<p>SELECT * FROM students LEFT JOIN classes ON classes.class_id = students.class UNION SELECT * FROM students RIGHT JOIN classes ON classes.class_id = students.class
</p>";
$sql =  "SELECT * FROM students LEFT JOIN classes ON classes.class_id = students.class UNION SELECT * FROM students RIGHT JOIN classes ON classes.class_id = students.class";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row > 0){
while ($rows = $result->fetch_assoc()) {
	print_r($rows);}
}

?>