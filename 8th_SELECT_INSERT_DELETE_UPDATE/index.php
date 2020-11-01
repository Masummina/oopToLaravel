<?php ob_start(); 
?>
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

<div class="jumbotron text-center">
  <h1>OOP TO Laravel Project CRUD</h1>
  <p>I can do it and i will be success INsallah</p> 
</div>
  
<div class="container">
  <div class="row">
  	<div class="col-md-8">
  		<div class="new">
  			  <?php
				  session_start();
				    if(isset($_SESSION['mgs']))
				    {
				      echo '<div class="alert alert-success" role="alert">
						  Data added successfully
						</div>';
				    }

				    if(isset($_SESSION['update']))
				    {
				      echo '<div class="alert alert-success" role="alert">
						  Data Update successfully
						</div>';
				    }
			?>
			<?php
				session_destroy();

			?>
  		</div>
  		 <table class="table table-striped">
  		 	<a href="addNew.php" class="btn btn-primary float-right" style="margin-bottom: 10px;">Add New</a>
		    <thead>
		      <tr>
		        <th>Id</th>
		        <th>Name</th>
		        <th>Roll</th>
		        <th>Gpa</th>
		        <th>age</th>
		        <th>Dob</th>
		        <th>Class</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php 

		    			 
		    			 $connt = new mysqli('localhost', 'root', '', 'school');
		    			 $sql = "SELECT * FROM students";
		    			 $result = $connt->query($sql);
		    			 if($result->num_rows > 0){
		    			 	while($row = $result->fetch_assoc()){
		    			 		?>
		    			 			<tr>
		    			 				<td><?php echo $row['id'] ?></td>
		    			 				<td><?php echo $row['name'] ?></td>
		    			 				<td><?php echo $row['roll'] ?></td>
		    			 				<td><?php echo $row['gpa'] ?></td>
		    			 				<td><?php echo $row['age'] ?></td>
		    			 				<td><?php echo $row['dob'] ?></td>
		    			 				<td><?php echo $row['class'] ?></td>
		    			 				<td> <a href="index.php?delete=<?php echo $row['id'] ?>">Delete</a> | <a href="update.php?update=<?php echo $row['id'] ?>">Update</a> </td>
		    			 			</tr>


		    			 		<?php
		    			 	}
		    			 }

		    			 if(isset($_GET['delete'])){
		    			 	$delete = $_GET['delete'];
		    			 	$sql = "DELETE FROM `students` WHERE `students`.`id` = $delete";
		    			 	$connt->query($sql);
		    			 	if($connt->query($sql)){
		    			 		header('location: index.php');
		    			 	}
		    			 }

		    	 ?>
		    </tbody>
		  </table>
  	</div>		
</div>

</body>
</html>
