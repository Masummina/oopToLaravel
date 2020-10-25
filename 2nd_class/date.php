<?php 
// Default time show
echo date("Y-m-d h:i:s");
echo "<br>Set Time Zone <br>";
date_default_timezone_set('Asia/Dhaka');

echo date("Y-m-d h:i:s");

echo "<br>Show AM Or PM<br>";
echo date("Y-m-d h:i:sa");

echo "<br>Write uppercase <br>";
echo date("Y-M-D h:i:sa");

echo "<br>Which formate we show<br>";
echo date("d M Y h:i:sa");

echo "<br>Populer Formate<br>";

echo date("Y-m-d h:i");
 ?>