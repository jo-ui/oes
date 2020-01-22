<style>
	     table,th,td{
			 border: 1px solid red;
		 }
		 table{
			 border-collapse: collapse;
			 width: 100%;
		 }
		 th{
			 height:50px;
		 }
	  </style>

<body>
			
                        <div >
						    <a href="logout.php" >Home Page</a>
							<h1 style="text-align:center">Result Report</h1>	
                        </div>
						
					<br/>		
			<table >
					<thead>
						<th style = "width:600px;" >Candidate for President</th>
						<th style = "width:200px;">Image</th>
						<th >Total</td>
					
					</thead>
					<?php
		require 'admin/dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'President'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
			<br>
			<br>				
			<table >
					<thead>
						<th style = "width:600px;">Candidate for Vice President for Internal</th>
						<th style = "width:200px;" >Image</th>
						<th >Total</th>
					
					</thead>
					<?php
			require 'admin/dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for Internal Affairs'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			<br>
			<br>
			<table >
					<thead>
						<th style = "width:600px;">Candidate for Vice President for External</th>
						<th style = "width:200px;">Image</th>
						<th >Total</th>
					
					</thead>
					<?php
		require 'admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for External Affairs'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			<br>
			<br>			
			<table >
					<thead>
						<th style = "width:600px;">Candidate for Secretary</th>
						<th style = "width:200px;">Image</th>
						<th >Total</th>
					
					</thead>
					<?php
		require 'admin/dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php 
		}?>
					</tbody>
					
					
			

</body>

</html>

