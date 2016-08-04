<?php include('connect.php');


	if (isset($_GET['deleted'])) {
				

		$query = $handler->query("DELETE FROM autobase WHERE id = '{$_GET['id']}'");

		if ($query) {
			
			header('Refresh:0;index.php');

		}

		
	}
		



?>



