<?php 
	
echo "<br/>";
echo $_FILES['image']['name'];
echo "<br/>";
echo $_FILES['image']['size'];
echo "<br/>";


echo $name = $_POST['name'];
echo "<br/>";
$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

if ($extension != 'png') {
	echo 'Please upload jpg file';
	die;
}

$tmp = $_FILES['image']['tmp_name'];

// $target = 'image/' . $_FILES['image']['name'];
// $target = 'image/' . rand(1, 99999999). $_FILES['image']['name'];
// $target = 'image/' . rand(1, 99999999). '.' . $extension;
// $target = 'image/' . rand(0, 9999) . '-' . time(). '.' . $extension;

$target = 'image/' . rand(0, 99999999) . $_POST['name'] . '.' . $extension;

if( move_uploaded_file($tmp, $target) ) {

	echo "File Uploaded Successfully";
		?>
		<img src="<?php echo $target ?>">
	<?php
	} else {
		echo 'Failed to upload';
	}



	echo time();

?>


