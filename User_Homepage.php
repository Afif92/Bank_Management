<?php 
session_start();
?>
<html>
<head>
  <title>User_homepage</title>
</head>

<body>
<table align="center">
			<tr>
			<td>
			<p><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="Userhistory.php">Showhistory</a>&nbsp;&nbsp;&nbsp;			
			<a href="Logout.php">Logout</a>
			</td>
			</tr>			
		</table><br/>
<center><h1><u>User HomePage</u></h1></center>
<table border="solid black" cellspacing="0"  width="100%">

<tr>

<th align="center">Name</th>
<th align="center"> Eamil</th>
<th align="center"> DOB</th>
<th align="center"> Phone</th>
<th align="center"> Bal</th>
<th align="center"> Id</th>


</tr>

<?php
			$query="SELECT * FROM information WHERE ID=$_SESSION[ID]";
			$con=mysqli_connect("localhost","root","","bank_project") or die("cannot connect");
			$result=mysqli_query($con,$query);	
			while($row=mysqli_fetch_assoc($result))
			{
				
				echo "<tr>
		         <th  align='center' >$row[Name]</th>				
				 <th align='center'>$row[Email]</th>
				 <th align='center'>$row[DOB]</th>
				 <th align='center'>$row[Phone]</th>
				<th align='center'>$row[Balance]</th>				 
				<th align='center'>$row[ID]</th>		
				 
				</tr>";
			}
	?>		

</table>

</body>

</html>