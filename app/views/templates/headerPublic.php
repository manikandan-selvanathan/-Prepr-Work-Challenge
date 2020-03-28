<?php
if (isset($_SESSION['auth']) == 1) {
    header('Location: /labs');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
		 <title>
			<?php 
				if(isset($title) && !empty($title)) 
				{ 
				   echo $title; 
				} 
				else 
				{ 
				   echo "MAP 202"; 
				} 
			?>
		</title>
	
	<?php if(isset($title) && !empty($title) && (strcmp($title,"Login")||strcmp($title,"Register"))) {
        ?> 
		<link rel='stylesheet' href='/app/public/css/login.css'>
	<?php } else { echo "Register";}?>	
	
    </head>
<body>