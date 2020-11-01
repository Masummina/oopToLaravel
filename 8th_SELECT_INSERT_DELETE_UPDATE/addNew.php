<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add new Student</h2>

  <form action="" method="POST">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Roll:</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll">
    </div>

    <div class="form-group">
      <label for="gpa">Gpa:</label>
      <input type="number" class="form-control" id="gpa" placeholder="Enter gpa" name="gpa">
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
    </div>
    <div class="form-group">
      <label for="age">Date of Birth:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date of birth" name="dob">
    </div>
    <div class="form-group">
      <label for="age">Class:</label>
      <input type="number" class="form-control" id="class" placeholder="Enter Yur Class" name="class">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

  <?php
    $connt = new mysqli('localhost', 'root', '', 'school');

      if(isset($_POST['submit'])){
        if(empty($name) || $name == ""){
          $name = $_POST['name'];
            $roll = $_POST['roll'];
            $gpa = $_POST['gpa'];
            $age = $_POST['age'];
            $dob = $_POST['dob'];
            $class = $_POST['class'];
            echo $dob;

            $sql = "INSERT INTO `students` (`name`, `roll`, `gpa`, `age`, `dob`, `class`) VALUES ('$name', $roll, $gpa, $age, '$dob', $class)";

            if($connt->query($sql)){
              session_start();
              $_SESSION['mgs'] = "Yes Data added successfully";
              header('location: index.php');
            }else{
              echo "No inserted";
            }
        }
        



      }

    


  ?>


</div>

</body>
</html>
