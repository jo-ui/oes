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
		     if(!$conn){
		     		die("Conn failed");
		     }
		     $query = $conn->query("SELECT * FROM voter ");
		     try{
		     	while($row = $query->fetch_array()){
					$idAdmin = $row ['voter'];
				} }
				catch(Exception $e){
					
				}

				
		     ?>
			
				<tr class="odd gradeX">
				<td><?php echo $row ['id'];?></td>
				<td><?php echo $row ['name'];?></td>
				<td><?php echo $row ['gender']?></td>
                </tr>		   
       </tbody>
	</table>
	<br>
	
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
				$idCandidate=$row ['candidate'];
			?>
				<tr class="odd gradeX">
				<td><?php echo $row ['id'];?></td>
				<td><?php echo $row ['naem'];?></td>
				<td><?php echo $row ['gender'];?></td>
				<td><?php echo $row ['votes'];?></td>

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
				<td><?php echo $row ['id'];?></td>
				<td><?php echo $row ['name'];?></td>
				<td><?php echo $row ['gender']?></td>

                 </tr>
			<?php } ?>
	   </tbody>
	</table>
  </body>
</html> 