<?php session_start(); ?>
<html>
	<head><title>Update page</title></head>
	<body>
	<style>
		     body {
				background-color: #daeada;
				}
		
			.tr1 th{
				display:block;
				float:left;
				margin-left:5px;
				line-height:50px;
				border-radius:3px;
			}
			.tr1 th a{
				display:block;
				background-color:#459949;
				width:100%;
				border-radius:3px;
				margin-top:5px;
				color:black;
				text-decoration:none;
			}
			.div1{
				height:58px;
				overflow:hidden;
			}
			.div1:hover{
				height:auto;
			}
		</style>
	
		
		<table>
				<tr class=tr1 >
		         <th colspan="2" width="200"  ><a href="Admin_Homepage.html">Admin home page</a></th>
				 <th colspan="2" width="200" ><a href="New_User.php">New User</a></th>
				 <th colspan="2" width="200" ><a href="Existing_User.php">Existing User</a></th>
		
				 <th width="200" colspan="2"><a href="Showhistory.php">Showhistory</a></th>
				 <th width="200"><a href="Logout.php">Logout</a></th>
				</tr>
			
		</table>
			
		
	</body>	
</html>
<?php
	$id=$_GET['id'];
	$query="SELECT 	Name, FatherName, Email, DOB ,Phone, Balance,ID FROM information WHERE ID=$id";
	$con=mysqli_connect("localhost","root","","bank_project"); //or die("cannot connect");
	$result=mysqli_query($con,$query);	
	 if($row = mysqli_fetch_assoc($result)){
		echo '<form method="post" action="update_existing_user1.php">
			ID:'.$row['ID'].'
			<input type="hidden" name="ID" value="'.$row['ID'].'"/>	
			<br/>Name:<br/>
			<input name="Name" value="'.$row['Name'].'"/>
			<br/>FatherName:<br/>
			<input name="FatherName" value="'.$row['FatherName'].'"/>
			<br/>DOB:<br/>
			<input name="DOB" value="'.$row['DOB'].'"/>
			<br/>PhoneNo:<br/>
		    <input name="Phone" value="'.$row['Phone'].'"/>
			<br/>Balance<br/>
			<input name="Balance" value="'.$row['Balance'].'"/>
			<br/><br/>
			<input type="submit" value="Submit"/>
		</form>';
	}
	//echo "<a href='retrieve.php'>View</a>";
?>
