<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <title>MAP 202</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
        <link rel="stylesheet" href="..\app\public\css\customcss.css">
        <link rel="stylesheet" href="..\app\public\css\style.css">
        <link rel="stylesheet" href="..\app\public\css\selectstyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
        <script src="..\app\public\js\custom.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyB25mmKi_IZTWfph5NMSOHaGtVyyz3wJTY&sensor=false" type="text/javascript"></script>  
        <style>
            body>.container {
                padding: 60px 15px 0;
            }
        </style>
    </head>

    <body>
		<header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <a class="navbar-brand" href="#">
            <img src="..\app\public\images\lab_scientist_icon.png" alt="" style="height: 40px;"/>
        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Labs
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="/labs/admin">Admin
                            </a>
                        </li> 
                    </ul>
                    <div class="searchbox">
                        <input type="text" class="input" id="input">
                        <div class="searchbtn">
                        <i class="fas fa-search"></i>
                        </div>
                    </div>
					<ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
