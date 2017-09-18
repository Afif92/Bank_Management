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
<center><h1><u>Users History</u></h1></center>
<table border="solid black" cellspacing="0"  width="100%">

<tr>

<th align="center">DATE</th>
<th align="center">ID</th>
<th align="center"> Type</th>
<th align="center"> Ammount</th>
</tr>
<?php
			$query="SELECT * FROM history";
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
</html>