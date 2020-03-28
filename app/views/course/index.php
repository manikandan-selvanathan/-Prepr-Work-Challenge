<?php require_once 'app/views/templates/header.php' ?>
  <section class="links">
  <?php
  foreach($data['departments'] as $department)
  {
	  $department_text=$department['department'];
	  echo "<a class='link wipe' href='courses/$department_text'>$department_text</a>";
  } 
  ?>
  </section>
<?php require_once 'app/views/templates/footer.php' ?>

