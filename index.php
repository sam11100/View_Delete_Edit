<?php include('connect.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- CUSTOM CSS -->
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>	

<!--VIDEO HEADER BACKGROUND -->

	<div class="jumbotron heading" id="headingVideo">
		
		<div class="video">
			
			<video autoplay="true" loop="loop"  muted width="40%" class="video1" poster="img/forza.jpg">
				<source src="video/carvid.mp4" type="video/mp4">
			</video>

		</div>

		<div class="video2">
			
			<video autoplay="true" loop="loop"  muted width="100%" class="video1" poster="img/forza.jpg">
				<source src="video/carvid.mp4" type="video/mp4">
			</video>

		</div>

		<div class="video3">
			
			<video autoplay="true" loop="loop"  muted width="100%" class="video1" poster="img/forza.jpg">
				<source src="video/carvid.mp4" type="video/mp4">
			</video>

		</div>

			<div class="bgImg"></div>
			<h1>AUTOBASE</h1>			



	</div>	

			<script>
				
		window.onload = function(){			
				var videoHeading = 	document.getElementById('headingVideo');

				videoHeading.style.backgroundAttachment = "fixed";

			}

			</script>

<!--VIDEO HEADER BACKGROUND -->	
	
<div class="container">	
	<table cellspacing="100" border="4" class="table">
			
			<tr style="background-color: black;color: white;font-family: CV;letter-spacing: 3px;"> 
				<th>Image</th>
				<th>Make</th>
				<th>Model</th>
				<th>Doors</th>
				<th>Seats</th>
				<th>Power (hp)</th>
				<th>Price</th>
				<th>Action</th>

			</tr>	

<!--PHP CODES-->

<?php 			

			$query = $handler->query('SELECT * FROM autobase');

		while ($row = $query->fetch()) {
				
			
						
					


 ?>


			<tr style="font-family: Georgia, Times;font-size:13px">
				<td>
					<img src=" <?php echo $row['URL'];?>">
				</td>
				<td>   <?php echo $row['make'];?>  </td>
				<td>   <?php echo $row['model'];?> </td>
				<td>   <?php echo $row['doors'];?> </td>
				<td>   <?php echo $row['seats'];?> </td>
				<td>   <?php echo $row['hp'];?> </td>
				<td>   <?php echo '£'.number_format($row['price']);?> </td>
				<td>
				<a class="btn btn-primary proDelandAddBtn" href="profile.php?displayProfile=1&id= <?php echo $row['id'];?> " >Profile</a>
				<a onclick = "return confirm('Are you sure you want to delete?');" class="btn btn-danger proDelandAddBtn" href="delete.php?deleted=1&id=<?php echo $row['id'];?>">Delete</a>
				</td>
			</tr>
				

<?php } ?>

	</table>
	<hr>
	<a href="add.php" class = "btn btn-success proDelandAddBtn" style="margin-left:10px;font-size:14px;">Add a car</a>
	</div>	


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>