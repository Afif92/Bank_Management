<html>
	<head>
       <title>Existing User</title>
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
	</head>
	<body>
	<table>
				<tr class=tr1 >
		         <th colspan="2" width="200"  ><a href="Admin_Homepage.html">Admin home page</a></th>
				 <th colspan="2" width="200" ><a href="New_User.php">New User</a></th>
				 <th colspan="2" width="200" ><a href="Existing_User.php">Existing User</a></th>
				 <th colspan="2" width="200">
					<div class=div1 >
						<a>Action</a> 
						<a href="Deposit.php">Deposit</a>
						<a href="Withdraw.php">Withdraw</a>
						<a href="Transfer.php">Transfer</a>
					</div>
				</th>
				 <th width="200" colspan="2"><a href="Showhistory.php">Showhistory</a></th>
				 <th width="200"><a href="Logout.php">Logout</a></th>
				</tr>
			
		</table>
			
	   <center>
			<p><h2><font color="#0000AA">Existing User Information</font></h2></p>
			<img src="money.jpg" alt="a image of money transition"><br/>
		<table border="1" cellpadding="5" cellspacing="0">
				<tr>
		         <th colspan="2" width="150"  >Name</th>
				 <th colspan="2" width="150" >Father name</th>
				 <th colspan="2" width="150">Email</th>
				 <th colspan="2" width="150">Date of Birth</th>
				 <th colspan="2" width="150">Phone no</th>
				<th colspan="2" width="150">Balance</th>	
				 <th colspan="2" width="150">action</th>
				 
				</tr>
		<?php
			$query="SELECT * FROM information where status='1'";
			$con=mysqli_connect("localhost","root","","bank_project") or die("cannot connect");
			$result=mysqli_query($con,$query);	
			while($row=mysqli_fetch_assoc($result))
			{
				
				echo "<tr>
		         <th colspan='2' width='150'  >$row[Name]</th>
				 <th colspan='2' width='150' >$row[FatherName]</th>
				 <th colspan='2' width='150'>$row[Email]</th>
				 <th colspan='2' width='150'>$row[DOB]</th>
				 <th colspan='2' width='150'>$row[Phone]</th>
				<th colspan='2' width='150'>$row[Balance]</th>				 
				 <th ><a href='delete_existing_user.php ? id=$row[ID]'>delete</a></th><th ><a href='update_existing_user.php ? id=$row[ID]'>update</a></th>
				 
				</tr>";
			}
	?>		
			
		</table>
				</body>
		</html>