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
<?php 

   $connt = new mysqli('localhost', 'root', '', 'school');

    if(isset($_GET['update'])){
      $update = $_GET['update'];
    }
      $sql = "SELECT * FROM students WHERE id = $update";
        $dataSelect = $connt->query($sql);

        if($dataSelect->num_rows > 0){
                while($row = $dataSelect->fetch_assoc()){

                  $nameD = $row['name'];
                  $rollD = $row['roll'];
                  $gpaD = $row['gpa'];
                  $ageD = $row['age'];
                  echo $dobD = $row['dob'];
                  $classD = $row['class'];
            }
    }


 ?>


<div class="container">
  <h2>Add new Student</h2>

  <form action="" method="POST">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" value="<?php echo $nameD ?>" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Roll:</label>
      <input type="text" value="<?php echo $rollD ?>" class="form-control" id="roll" placeholder="Enter roll" name="roll">
    </div>

    <div class="form-group">
      <label for="gpa">Gpa:</label>
      <input type="text" class="form-control" value="<?php echo $gpaD ?>" id="gpa" placeholder="Enter gpa" name="gpa">
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" value="<?php echo $ageD ?>" id="age" placeholder="Enter age" name="age">
    </div>
    <div class="form-group">
      <label for="age">Date of Birth:</label>
      <input type="date" class="form-control" id="date" value="<?php echo $dobD ?>" placeholder="Enter date of birth" name="dob">
    </div>
    <div class="form-group">
      <label for="age">Class:</label>
      <input type="number" class="form-control" id="class" value="<?php echo $classD ?>" placeholder="Enter Yur Class" name="class">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

  <?php
      if(isset($_POST['submit'])){
        if(empty($name) || $name == ""){
          $name = $_POST['name'];
            $roll = $_POST['roll'];
            $gpa = $_POST['gpa'];
            $age = $_POST['age'];
            $dob = $_POST['dob'];
            $class = $_POST['class'];
            echo $dob;

            $sql = "UPDATE `students` SET `name` = '$name', `gpa` = $roll, `age` = $age, `dob` = '$dob', `class` = $class WHERE `students`.`id` = $update";

            if($connt->query($sql)){
              session_start();
              $_SESSION['update'] = "Yes Data added successfully";
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
