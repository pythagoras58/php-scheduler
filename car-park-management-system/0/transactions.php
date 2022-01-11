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
	<p class="phead">Transactions</p>
	<div style="width:660px;background:white;padding:10px;margin:auto;">
		
						<form method="post" action="" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                           
                            <thead>
						
                                <tr>
                                    <th>Date & Time</th>
									<th>Confirmation Code</th>
									<th>Amount</th>
                                    <th>phone</th>
                                   
                                                             
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							$query=mysqli_query($connect, "select * from zones")or die(mysql_error());
							while($row=mysqli_fetch_array($query)){
							?>
                              
										<tr>
									
                                         <td><?php echo $row['d1'] ?></td>
										  <td><?php echo $row['account'] ?></td>
                                         <td><?php echo $row['charge'] ?></td>
                                         <td><?php echo $row['phone'] ?></td>
                                        
                                       
                                </tr>
                         
						          <?php } ?>
                            </tbody>
                        </table>
					
          
		</form>
	</div></div>
	</section>
	</section>
</body>
</html>