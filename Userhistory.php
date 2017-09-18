<?php 
session_start();
?>

<body>
<table align="center">
			<tr>
			<td>
			<p><a href="User_Homepage.php">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="Logout.php">Logout</a>&nbsp;&nbsp;&nbsp;
			</td>
			</tr>			
		</table><br/>
<center><h1><u>Users History</u></h1></center>
<table border="solid black" cellspacing="0"  width="100%">

<tr>

<th align="center">DATE</th>
<th align="center">ID</th>
<th align="center"> Type</th>
<th align="center"> Ammount</th>
</tr>
<?php
			$query="SELECT * FROM history WHERE ID=$_SESSION[ID]";
			$con=mysqli_connect("localhost","root","","bank_project") or die("cannot connect");
			$result=mysqli_query($con,$query);	
			while($row=mysqli_fetch_assoc($result))
			{
				
				echo "<tr>
		         <th  align='center' >$row[date]</th>				
				 <th align='center'>$row[Id]</th>
				 <th align='center'>$row[type]</th>
				 <th align='center'>$row[ammount]</th>
				
				</tr>";
			}
	?>		

</table>

</body>
