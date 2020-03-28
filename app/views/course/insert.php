<?php require_once 'app/views/templates/header.php' ?>
<div class="form">
<form id="insert_form" action="/courses/insert" method="POST">
  <div class="form-group">
    <label for="courseId">Course ID</label>
    <input type="text" name="courseID" class="form-control" id="courseId" aria-describedby="emailHelp" placeholder="Enter Course ID">
  </div>
  <div class="form-group">
    <label for="department">Department</label>
    <input type="text" name="department" class="form-control" id="department" placeholder="Enter Department" >
  </div>
  <div class="form-group">
    <label for="program">Program</label>
    <input type="text" name="program" class="form-control" id="program" placeholder="Enter Program">
  </div>
  <div class="form-group">
    <label for="courseName">Course Name</label>
    <input type="text" name="courseName" class="form-control" id="courseName" placeholder="Enter Course Name">
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php
   $isSuccessfull=$data['is_insert_successfull'];
    if(isset($isSuccessfull))
    {
        if($isSuccessfull)
        {
            echo "<div class='alert alert-success'> <strong>A record has been inserted successfully.</strong></div>";
        }
        else{
            echo "<div class='alert alert-danger'> <strong>Insertion Failed.</strong></div>";
        }
    }
    
    
  ?>
</form>
</div>
<?php require_once 'app/views/templates/footer.php' ?>