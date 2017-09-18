<html>
	<head><title>Active page</title></head>
	<body>
		<table align="right">
			<tr>
				<th colspan="2" width="200" ><a href="New_User.php">Home</a></th>
				<th width="200"><a href="Logout.php">Logout</a></th>
			</tr>
		</table>
	</body>	
</html>

<?php
	$id=$_GET['id'];
	$query="UPDATE information SET status = '1' WHERE information.ID = $id";
	$con=mysqli_connect("localhost","root","","bank_project") or die("cannot connect");
	$result=mysqli_query($con,$query);
	if($result)
	{
		 echo "
            <script type=\"text/javascript\">
             alert('Sure Want to Active???');
            </script>
        ";
		echo "<br/>"."Activated"."<br/>";
	}
		
?>