<?php include('connect.php');


if (isset($_GET['displayProfile'])) {




	$query = $handler->query("SELECT * FROM autobase WHERE id = '{$_GET['id']}'");

		while ($row = $query->fetch()) {
				


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- CUSTOM CSS -->
<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>	
	
		<div class="heading">
			<h1>PROFILE</h1>
		</div>

		<div class="carName">
			<h1>  <?php echo $row['make'];  ?>			</h1>
			<h2>  <?php echo $row['model']  ?>			</h2>
			<div class="bgColor"></div>
		</div>

<div class="editHeading" style="background-image: url(<?php echo $row['URL'];?>);">
	
</div>
<div class="container">
				
		<div class="jumbotron" style="background-color: white;">
			
			<b>Discription :</b><p><?php echo $row['discription'];   ?></p><br/><hr>
			<b>Engine :</b><p><?php echo $row['engine'];   ?></p><br/><hr>
			<b>Doors :</b><p><?php echo $row['doors'];   ?></p><br/><hr>
			<b>Seats :</b><p><?php echo $row['seats'];   ?></p><br/><hr>
			<b>Power (hp) :</b><p><?php echo $row['hp'];   ?></p><br/><hr>
			<b>year of production:</b><p><?php echo $row['year'];   ?></p><br/><hr>
			<a href = "index.php" class = "btn btn-danger backAndEditbtn" >Home</a>
			<a class = "btn btn-primary backAndEditbtn" href = "edit.php?edited=1&id=<?php echo $row['id'];?>">Edit</a>	


		</div>	

		

</div>

</body>
</html>

<?php


	}

}

?>