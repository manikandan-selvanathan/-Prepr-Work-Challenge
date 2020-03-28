<?php require_once 'app/views/templates/header.php' ?>
<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
	</style>
<div style="margin-top: 100px;">
  <?php
    echo "<h3><strong>".$data['courses'][0]['department']." / ".$data['courses'][0]['program']."</strong></h3>";
  ?>
<table lass="table">
	<tr>
		<th>Course ID</th>	 
    <th>Course Name</th>
	</tr>

  <?php
   foreach($data['courses'] as $courses)
   {
     
      echo "<tr>";
      echo '<td>'.$courses['courseid'].'</td>'; 
      echo '<td>'.$courses['coursename'].'</td>';
      echo "</tr>"; 
  }
  ?>
  </table>
  <div>
<?php require_once 'app/views/templates/footer.php' ?>