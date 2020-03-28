<?php require_once 'app/views/templates/header.php' ?>
  <section class="links">
  <?php

  
  foreach($data['programs'] as $programs)
  {
    $program_text=$programs['program'];
    $department_link=$data["department"]."/".$programs["program"];
	  echo "<a class='link wipe' href='$department_link'>$program_text</a>";
  } 
  ?>
  </section>
<?php require_once 'app/views/templates/footer.php' ?>