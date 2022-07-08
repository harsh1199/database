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
			
			
		<hr>
		
		<h3>Add a New Target</h3>
	
		<form method="post" action="addtargets.php">
		
			<label>Target Name:</label>
			<input type="text" name="target_name">
			<br>
			
			<label>First Mission:</label>
			<input type="date" name="first_mission">
			<br
			
			<label>Target Type:</label>
			<input type="text" name="target_type">
			<br>
			
			<label>No of Missions:</label>
			<input type="number" name="no_of_missions">
			<br>
			
			<input type="submit" name="submit">
			
		
		</form>
		
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
		
		if (isset($_POST['submit'])) {
		
		
		$targets_name = $_POST['target_name'];
		$targets_first_mission = $_POST['first_mission'];
		$targets_type = $_POST['target_type'];
		$targets_no_of_missions = $_POST['no_of_missions'];
		
		$sql = "INSERT INTO targets (first_mission,no_of_missions,name,target_type) VALUES ('$targets_first_mission','$targets_no_of_missions','$targets_name','$targets_type')";
		
		if (mysqli_query($link, $sql)) {
			echo "";
		} else {
			echo "Error adding record ";
		}
		
		}
		mysqli_close($link);
		
		?>
	
		<hr>
		

	
	</body>

</html>