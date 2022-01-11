<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						include('inc/connect.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<div>
	<p class="phead">Street Booking</p>
	<div style="width:660px;background:white;padding:10px;margin:auto;">
		
						<form method="post" action="deletebooking.php" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                           
                            <thead>
						
                                <tr>
                                    <th>CHK</th>
                                    <th>Street</th>
									<th>Date & Time</th>
									<th>Car Plate No</th>
                                    <th>Phone</th>
                                    <th style="width:80px;">Status</th>
                                                             
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							$query=mysqli_query($connect, "select * from zones")or die(mysql_error());
							while($row=mysqli_fetch_array($query)){
							$id=$row['id'];
							?>
                              
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                         <td><?php echo $row['street'].$id ?></td>
										  <td><?php echo $row['d1'] ?></td>
                                         <td><?php echo $row['platenumber'] ?></td>
                                         <td><?php echo $row['phone'] ?></td>
                                         <td><?php echo $row['status'] ?></td>
                                       
                                </tr>
                         
						          <?php } ?>
                            </tbody>
                        </table>
						<input type="submit" class="btn btn-danger" value="Delete" name="delete">
          
		</form>
	</div></div>
	</section>
	</section>
</body>
</html>