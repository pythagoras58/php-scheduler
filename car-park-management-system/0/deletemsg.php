<?php
include('inc/connect.php');


if (isset($_POST['delete'])){

$id=$_POST['selector'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($connect, "DELETE FROM messages where id='$id[$i]'");
}
header("location: messages.php");

}
?>