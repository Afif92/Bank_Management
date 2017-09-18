<html>
	<head>
		<title>Withdraw</title>
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
		
		<form method="post">
			<br/>
			<br/>
			<br/>
			<table>
				<tr>
				<td width="200">
				<fieldset>
				<legend><b>withdraw</b></legend>
				Date <br/>
				<input type="text" name="Date"/><br/>	
				Id <br/>
				<input type="text" name="ID"/><br/>			
				Balance <br/>
				<input type="text" name="BALANCE"/><br/>			
				<hr />
				<input type="submit" value="OK" />				
				</fieldset>
				</td>
				</tr>
				
			</table>
			
			</form>
	</body>
</html>	
<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(!empty($_REQUEST['ID']) &&  !empty($_REQUEST['BALANCE']))
		{
			if(is_numeric($_REQUEST['BALANCE']))
			{
				$date = $_REQUEST['Date'];
				$id = $_REQUEST['ID'];
				$bal = $_REQUEST['BALANCE'];
				$query="SELECT Balance   FROM information WHERE ID=$_REQUEST[ID]";
				$con=mysqli_connect("localhost","root","","bank_project") or die("cannot connect");
				$result=mysqli_query($con,$query);
				if($result==false)
				{
					echo "ID doesn't exist<br/>";
				
				}
				else
				{
					if($row=mysqli_fetch_assoc($result))
					  {
						
							$main_bal=$row['Balance'];
							$withdrawal_bal=$_REQUEST['BALANCE'];						
							if($main_bal>$withdrawal_bal)
							{
								$new_bal=$main_bal-$withdrawal_bal;
								if($new_bal<500)
									echo "Not Possible***account will contain at least 500tk to contiue<br/>";
								else
								{
									$query1="UPDATE information SET Balance=$new_bal  WHERE ID=$_REQUEST[ID] ";	
									$q2="INSERT INTO history (date, Id, type, ammount) VALUES ('$date','$id','withdraw','$bal')";
									$result1=mysqli_query($con,$query1);
									$result1=mysqli_query($con,$q2);
									if($result1)
									{
											 echo "
											<script type=\"text/javascript\">
											alert('Sure Want to Withdraw??');
											</script>
											";
										echo "<br/>"."Withdrawn"."<br/>";			
										echo "present balance is: ".$new_bal."<br/>";
									}	
									else
										echo "Database problem<br/>";
								}
							}
							else
								echo "Withdrawal balance is greater than main balance<br/>";
						}
					
				}
					
			}
			else
				echo "Balance must be a number<br/>";
		}
		else
			echo "All the fields are required<br/>";
	}
?>




























