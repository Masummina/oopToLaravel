<!DOCTYPE html>
 <html>
 <head>
 	<title>user</title>
 </head>
 <body>
 	<?php 
		include_once('include/database.php');
			$select_user = "SELECT * FROM users";
			$conect_sql = mysqli_query($conn, $select_user);
			$row = mysqli_num_rows($conect_sql);
			
		?>


<div class="user-area" style="width: 800px; margin: 0 auto;">
	<h4 style="background: #333; color: #fff; text-align: center; padding: 10px; margin: 0;">Admin User Access</h4>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>User</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
			<?php
				if($row > 0){
				while($user_result = mysqli_fetch_assoc($conect_sql)){
					$userId = $user_result['id'];
					$userName = $user_result['name'];
					$user = $user_result['user'];
					$userPass = $user_result['password'];

					?>
					<tr>
						<td><?php echo  $userId; ?></td>
						<td><?php echo  $userName; ?></td>
						<td><?php echo  $user; ?></td>
						<td><?php echo  $userPass; ?></td>
					</tr>

					<?php
				}
			}


			?>
			</tbody>
		</table>
</div>

<style type="text/css">
	table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
  border: 1px solid black;
}
</style>


 </body>






 </html>