<html>

	<head>
	  <title>European Space Agency</title>
	  <link rel="stylesheet" href="style.css">
	</head>

	<body>
		
		<div class="navbar">
				<div class="logo">
					<img src="images/logo.png" width="150px">
				</div>
			
				<nav>
					<ul>
						<li><a href="addastronauts.php">Add Astronaut</a></li>
						<li><a href="addmissions.php">Add Mission</a></li>
						<li><a href="addtargets.php">Add Targets</a></li>
						<li><a href="seeastronauts.php">See Astronaut</a></li>
						<li><a href="seemissions.php">See Mission</a></li>
						<li><a href="seetargets.php">See Targets</a></li>
					
					</ul>
				</nav>
				
			</div>
		
		<?php
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$database_name = "european_space_agency";
		
		$link = mysqli_connect($host, $username, $password, $database_name);
		
		if($link === false) {
			die("Error: Could not connect");
		} else {
			echo("");
		}
		?>
		
		<hr>
		
		<h3>SEE ALL TARGET</h3>
	
		<table>
		
			<tr>
				<th width="150px">TARGET ID<br><hr></th>
				<th width="250px">TARGET NAME<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT target_id, name FROM targets");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['target_id']}</th>
				<th>{$row['name']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		<hr>
		
	</body>

</html>

