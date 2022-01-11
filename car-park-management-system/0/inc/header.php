	<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		if(isset($_SESSION['phone']))
			{
				
				
				} 
			else
			{
				//header("Location: index.php");
			}
}
 ?>
	
	<header>
		<?php 
			if(isset($_SESSION['phone']))
			{
			?>
			<div class="logged-in">
				<div>Admin: <?php echo $_SESSION['phone'];  ?> </div>
				<div><a href="profile.php">My Profile</a></div>
				<div><a href="proc/logout.php">Sign Out</a></div>
			</div>
			<?php if ($_SESSION['access']==0)  {  ?>
			<button class="create_account"> Add New Admin </button>
			<?php } ?>
			<?php
			} 
			else
			{
			?>	
			
				<section class="log-form">
		<form class="log-in" action="proc/login.php" method="POST">
			<input type="text" name="phone" value="" />
			<input type="password" name="password" value="" />
			<input type="Submit" name="Submit" value="Log In" />
			<br />
			<p>Phone no</p><p>Password</p>
		</form>
		</section>
			<?php	
			}  
			?>
		
		
		<nav>
			<ul>
				<li class="hor"><a href="index.php">Users</a></li>
				<li class="hor dropdown"><a href="bookings.php">Bookings</a>
				</li>
				<li class="hor dropdown"><a href="transactions.php">Transactions</a>
				<li class="hor dropdown"><a href="messages.php">Messages</a>
				</li>
				<?php if ($_SESSION['access']==0)  {  ?>
				<li class="hor dropdown"><a href="manage.php">Manage Admins</a>
				<?php  } ?>	
			</ul>
		</nav>
	</header>