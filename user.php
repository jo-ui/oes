<html>
   <head>
      <meta charset="utf-8">
	  <title>User</title>
   </head>
   <body>
   <h1 style="text-align:center">This is admin list</h1>
	<table id="dataTable" width="100%" cellspacing="0">
	   <thead>
	      <tr>
		     <th>ID</th>
			 <th>Username</th>
			 <th>Gender</th>
			 <th>Email</th>

			 <th>Edit<th>
			 <th>Delete<th>
		  </tr>
	   </thead>
	   <tbody>
          <?php 
		     require 'includes/dbh.inc.php';
		     $query = $conn->query("SELECT * FROM admin ");
			 while($row = $query->fetch_array()){
				$idAdmin=$row ['idAdmin'];
			?>
				<tr class="odd gradeX">
				<td><?php echo $row ['idAdmin'];?></td>
				<td><?php echo $row ['uidAdmin'];?></td>
				<td><?php echo $row ['genderAdmin']?></td>
				<td><?php echo $row ['emailAdmin'];?></td>
				
                                            
                 </tr>
			<?php } ?>	   
       </tbody>
	</table><br>
	<h1 style="text-align:center">This is candidate list</h1>
	<table id="dataTable" width="100%" cellspacing="0">
	   <thead>
	      <tr>
		     <th>ID</th>
			 <th>Username</th>
			 <th>Gender</th>
			 <th>Email</th>
			 <th>Votes Number</th>
			 <th>Edit<th>
			 <th>Delete<th>
		  </tr>
	   </thead>
	   <tbody>
	   <?php 
		     require 'includes/dbh.inc.php';
		     $query = $conn->query("SELECT * FROM candidate ");
			 while($row = $query->fetch_array()){
				$idCandidate=$row ['idCandidate'];
			?>
				<tr class="odd gradeX">
				<td><?php echo $row ['idCandidate'];?></td>
				<td><?php echo $row ['uidCandidate'];?></td>
				<td><?php echo $row ['genderCandidate'];?></td>
				<td><?php echo $row ['emailCandidate'];?></td>
				<td><?php echo $row ['votesNumber'];?></td>
                                          
                 </tr>
			<?php } ?>
	   </tbody>
	</table><br>
	<h1 style="text-align:center">This is voter list</h1>
	<table id="dataTable" width="100%" cellspacing="0">
	   <thead>
	      <tr>
		     <th>ID</th>
			 <th>Username</th>
			 <th>Gender</th>
			 <th>Email</th>
			 
			 <th>Status</th>
			 <th>Edit<th>
			 <th>Delete<th>
		  </tr>
	   </thead>
	   <tbody>
	   <?php 
		     require 'includes/dbh.inc.php';
		     $query = $conn->query("SELECT * FROM voter ");
			 while($row = $query->fetch_array()){
				$idVoter=$row ['idVoter'];
			?>
				<tr class="odd gradeX">
				<td><?php echo $row ['idVoter'];?></td>
				<td><?php echo $row ['uidVoter'];?></td>
				<td><?php echo $row ['genderVoter']?></td>
				<td><?php echo $row ['emailVoter'];?></td>
				<td><?php echo $row ['statusVoter']?></td>
                                            
                 </tr>
			<?php } ?>
	   </tbody>
	</table>
  </body>
</html>