<?php 
	echo $fileName =  'image/'. $_FILES['image'] ['name'];
	echo "<br>";
		echo $_FILES['image'] ['size'];
	echo "<br>";
	echo $name =  $_POST['name'];
	echo "<br>";
	$target = $_FILES['image'] ['tmp_name'];
	echo $target;
		$extension = pathinfo($fileName, PATHINFO_EXTENSION);
	echo "<br>";
	echo $extension;
		$fileName = 'image/'. rand(0, 9999) . $name . time() . '.' . $extension;
	echo "<br>";
	if(move_uploaded_file($target, $fileName)){
		echo "File upload successfully";
		?>
		<img src="<?php if(isset($fileName)){echo $fileName;}  ?>">
		<?php

	}
	

 ?>
