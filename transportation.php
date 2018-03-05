<!DOCTYPE html>
<html>
<head>
	<title>Transportation</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
   <h2>Travelling</h2>
   <?php 
    if (!isset($_POST['submit'])) {
    	$transport=['Car,Sgr,Ship,Nduthi,Helicopter'];
    	echo "<p>Travelling can be done through many modes of transport mainly air, water and land</p>";
    	echo "<ul>";
    	foreach ($transport as $key ) {
    		echo "<li>$key</li>";
    	}
 
    }
    ?>
<div class="maincontainer">
		<form role="form" method="post" action="transportation.php">
			<div class="form-group">
				<label for="add"> Add other forms of transport that you have knowledge of:(separated by commas)</label><br>
				<input type="text" name="additions" id="add" placeholder="Number 1 Transport means, Number 2 transport means , Number 3 transport means, Number 4 transport means">
			</div>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>