<?php 
  	$title = "Register"; 
	require_once 'app/views/templates/headerPublic.php';
	 
?> 
<div class="container">
 
 

 

<div class="grid">
    <form method="post" action="validate_registration" class="form login">
      <header class="login__header">
        <h3 class="login__title">Register</h3>
      </header>
      <div class="login__body">

        <div class="form__field">
          <input type="text" name="user_name" placeholder="UserName" required>
		</div>
		 
		<div class="form__field">
          <input type="text" name="first_name" placeholder="First Name" required>
		</div>
		
		<div class="form__field">
          <input type="text" name="last_name" placeholder="Last Name" required>
		</div>
		
		<div class="form__field">
          <input type="password" name="password" placeholder="Password" required>
        </div>
		<div class="form__field">
          <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        </div>
      </div>
      <footer class="login__footer">
        <input type="submit" value="Sign Up">
        <p><a href="login">Already registered?</a></p>
	  </footer>
	  <?php if(!empty($data['error']))
		{foreach($data['error'] as $error) {?>

		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php	echo $error ?>
		</div>

		<?php
		}
		} else if(!empty($data['success']))
		{?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php	echo $data['success'] ?>
		</div>

		<?php 
		}?>
    </form>

    </div>
    </div>

    <?php require_once '../app/views/templates/footer.php' ?>
