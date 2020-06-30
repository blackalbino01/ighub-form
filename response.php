<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<table width="700" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Names</th>
			<th>Track</th>
			<th>Email</th>
			<th>State</th>
		</tr>
		<?php
			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$track=$_POST['track'];
				$email=$_POST['email'];
				$state=$_POST['state'];
			}
			echo "<tr>";
			echo "<td>".$name."</td>";
			echo "<td>".$track."</td>";
			echo "<td>".$email."</td>";
			echo "<td>".$state."</td>";
			echo "</tr>";
		?>
	</table>
</body>

