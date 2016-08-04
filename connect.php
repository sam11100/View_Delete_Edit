<?php 
	
	//variables 

	$host = 'samirthapa.co.uk.mysql';
	$username = 'samirthapa_co_uk';
	$password = 'W5Jg8T38';
	$database = 'samirthapa_co_uk';

	


		try {

			


			$handler = new PDO('mysql:host=samirthapa.co.uk.mysql;dbname=samirthapa_co_uk','samirthapa_co_uk','W5Jg8T38');
			$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $e) {
			
			echo $e->getMessage();
		}




 ?>