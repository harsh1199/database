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
		
		<h3>ADD A NEW MISSION</h3>
	
		<form method="post" action="addmissions.php">
		
			<label>Mission Name:</label>
			<input type="text" name="mission_name">
			<br>
			
			<label>Destination:</label>
			<input type="text" name="mission_destination">
			<br>
			
			<label>Mission Type:</label>
			<input type="text" name="mission_type">
			<br>
			
			<label>Launch Date:</label>
			<input type="date" name="launch_date">
			<br>
			
			
			<label>SELECT ASTRONAUT:</label>
			<select name="astronaut_id">
				<?php
				$sql = mysqli_query($link, "SELECT astronaut_id, name FROM astronaut");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['astronaut_id']}'>{$row['name']}</option>";
				}
				?>
			</select>
			
			<label>SELECT TARGET:</label>
			<select name="target_id">
				<?php
				$sql = mysqli_query($link, "SELECT target_id, name FROM targets");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['target_id']}'>{$row['name']}</option>";
				}
				?>
			</select>
			
			<br>
			
			<input type="submit" name="submit">
		 
		</form>
			
			<hr>
		
		<?php
		
		if (isset($_POST['submit'])) {
		
			$mission_name = $_POST['mission_name'];
			$mission_destination = $_POST['mission_destination'];
			$mission_type = $_POST['mission_type'];
			$mission_launch_date = $_POST['launch_date'];
			$astronauts_id = $_POST['astronaut_id'];
			$targets_id = $_POST['target_id'];
			
			$sql = "INSERT INTO mission (name, target_id, astronaut_id, destination, mission_type, launch_date) VALUES ('$mission_name', '$targets_id', '$astronauts_id', '$mission_destination', '$mission_type', '$mission_launch_date')";
			if(mysqli_query($link, $sql)) {
			  echo "";
			} else {
			  echo "Error adding record ";
			}
		
		}
		
		mysqli_close($link);
		
		?>

	</body>

</html>
