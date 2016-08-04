<?php include("connect.php"); 

		
		$error = "";
	if (isset($_POST['btnSubmit'])) {

		$carMake = $_POST['inputMake'];
		$carModel = $_POST['inputModel'];
		$carDoors = $_POST['inputDoor'];
		$carSeats = $_POST['inputSeats'];
		$carYear = $_POST['inputYear'];
		$carEngine = $_POST['inputEngine'];
		$carHp = $_POST['inputHp'];
		$carPrice = $_POST['inputPrice'];
		$carDisc = $_POST['inputDisc'];	
		$carURL = $_POST['inputUrl'];

		if ((strlen($carMake) <= 0)||(strlen($carModel) <= 0)||(strlen($carPrice) <= 0)||(strlen($carDisc) <= 0)||(strlen($carYear) <= 0)||(strlen($carEngine) <= 0)||(strlen($carHp) <= 0)||(strlen($carURL) <= 0)) {
				
			
			$error = "Please fill in all the details.";

		}else{		




			$query = $handler->query("UPDATE  `samirthapa_co_uk`.`autobase` SET
			`make` =  '$carMake ',
			`model` =  '$carModel ',
			`doors` =  '$carDoors ',
			`seats` =  '$carSeats ',
			`engine` =  '$carEngine ',
			`hp` =  '$carHp ',
			`year` =  '$carYear ',
			`price` =  '$carPrice ',
			`URL` = '$carURL',
			`discription` =  '$carDisc ' WHERE  `autobase`.`id` ='{$_GET['id']}'");


			if ($query) {
					
				//redirect to main.php when sucess
				header('Refresh:0;index.php');
				echo "Your informations has been added";
			}

			

				

		}


	}
		
		
//	Getting datas's from the database to edit

		$query2 = $handler->query("SELECT * FROM autobase WHERE id = '{$_GET['id']}'");

		while ($row = $query2->fetch()) {
				


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
<link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>		
		<header>
		<div class="jumbotron"><h1 style="margin-left:80px;">EDIT</h1></div>
		</header>	
		<div class="bgImg">
		
		</div>
		<div class="container" style = "font-family: myFont;">	
		<div class="jumbotron" style="background-color: white;padding-left: 10%;">
			<div style="color: red;"><?php echo $error ?></div><br>
			<form action="" method="post">	
				<!--Image Uploder-->
					<div class="row" style="font-family:CV;width: 50%;">
						<div class="col-sm-12"><h3>Image :</h3><input type="text" name="inputUrl" placeholder="URL" value = "<?php echo $row['URL'];?>"></div>
					</div> <br> 
				<!--Image Uploder-->
					<div class="row">
						<div class="col-sm-6"><h3>Make :</h3><input type="text" name="inputMake" value = "<?php echo $row['make'];?>"></div>
						<div class="col-sm-6"><h3>Model :</h3><input type="text" name="inputModel" value = "<?php echo $row['model'];?>"></div>
					</div>
					<div class="row">
						<div class="col-sm-6"><h3>Engine :</h3><input type="text" name="inputEngine" value = "<?php echo $row['engine'];?>"></div>
						<div class="col-sm-6"><h3>Power (HP) :</h3><input type="text" name="inputHp" value = "<?php echo $row['hp'];?>"></div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							

							 <fieldset class="form-group"> 
					    <label for="exampleSelect1"><h3>Seats</h3></label>
					    <select class="form-control" class="inputfile" name="inputSeats">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					      <option>6</option>
					      <option>7</option>
					      
					    </select>
					  </fieldset>


						</div>
						<div class="col-sm-6">
							

							 <fieldset class="form-group">
					    <label for="exampleSelect1"><h3>Doors</h3></label>
					    <select class="form-control" id="exampleSelect1" name="inputDoor">

					 	  <option>1</option>
					 	  <option>2</option>
					 	  <option>3</option>
					 	  <option>4</option>
					 	  <option>5</option>
					 	  <option>6</option>
					 	  <option>7</option>

					    </select>
					  </fieldset>


						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							
							<fieldset class="form-group">
					    <label for="exampleSelect1"><h3>Year of Production:</h3></label>
					    <select class="form-control" id="exampleSelect1" name="inputYear">
					     
					      <script>
					      	
					      		for(var i = 2016;i>=1850;i--){

					      			document.write("<option>"+i+'</option>');

					      		}

					      </script>


					    </select>
					  </fieldset>

						</div>
						<div class="col-sm-6"><h3>Price :</h3>£<input type="number" name="inputPrice" value="<?php echo $row['price']?>"><br></div>
					</div>
					<h3>Discription : </h3><textarea name="inputDisc" ><?php echo $row['discription']?></textarea><br><br><hr>

					<input type="submit" name="btnSubmit" class = "btn btn-success backAndEditbtn" value="Submit">
					<a href = "index.php" class = "btn btn-danger backAndEditbtn">Cancel</a>

			
			</form>
	<?php	
}
	?>	
			
		</div>
</div>
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>