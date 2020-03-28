<?php 
  $title = "Login";
	require_once 'app/views/templates/headerPublic.php'; 
?>

</ul>
<body class="align">	
  <div class="grid">
    <form method="post" action="login/verify" class="form login">
      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>
      <div class="login__body">
        <div class="form__field">
          <input type="text" name="user_name" placeholder="UserName" required>
        </div>
        <div class="form__field">
          <input type="password" name="password" placeholder="Password" required>
        </div>
      </div>
      <footer class="login__footer">
        <input type="submit" value="Login">
        <p><a href="login/register">Register </a></p>
      </footer>
		<?php
		if ($_SESSION['failedAuth']) { ?>
	<div class="row">
    	<div class="col-sm-auto">		
			<div class="alert alert-dismissible alert-danger">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				Login failed. Please try again.
			</div>
		</div>
	</div>
	<?php }	
	?>
    </form>
    

    <?php require_once 'app/views/templates/footer.php' ?>
