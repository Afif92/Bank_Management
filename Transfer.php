<html>
	<head>
		<title>Transfer</title>
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
			<table>
				<tr>
				<td width="200">
				<fieldset>
				<legend><b>Bal_transfer</b></legend>
				From <br/>
				<input type="text" name="fid"/><br/>	
				To <br/>
				<input type="text" name="tid"/><br/>			
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
			if((!empty($_REQUEST['fid']) && !empty($_REQUEST['tid'])) && !empty($_REQUEST['BALANCE']))
			{
				if(is_numeric($_REQUEST['BALANCE']) && $_REQUEST['BALANCE']>0)
				{
					include 'connect.php';
					$fid = $_REQUEST['fid'];
					$tid = $_REQUEST['tid'];
					$bal = $_REQUEST['BALANCE'];
					$query  =    "select Balance from INFORMATION where ID=$fid ";	
					$res    =    mysqli_query($con,$query);
					if($res==false)
						echo "From ID doesn't exist<br/>";
					else
					{
							if($row=mysqli_fetch_assoc($res))
						{
							$fid_bal=$row['Balance'];							
							if($bal<$fid_bal)
							{
								$query1  =    "select Balance from INFORMATION where ID=$tid ";	
								$res1    =    mysqli_query($con,$query1);
								if($res1==false)
									echo "To ID doesn't exist<br/>";
								else
								{
									if($row1=mysqli_fetch_assoc($res1))
									{
										$fid_bal=$fid_bal-$bal;
										$tid_bal=$row1['Balance'];
										$new_bal=$tid_bal+$bal;
										$query2="UPDATE information SET Balance=$fid_bal  WHERE ID=$fid ";
										$query3="UPDATE information SET Balance=$new_bal  WHERE ID=$tid ";
										$result1=mysqli_query($con,$query2);
										$result2=mysqli_query($con,$query3);
										if($result1)
										{
											echo "
											<script type=\"text/javascript\">
											alert('Sure Want to Transfer??');
											</script>
											";
											echo "<br/>"."Transfered"."<br/>";									
											echo "Current balance is: ".$fid_bal."<br/>";
										}
									}
									
								}
									
							}
								
						}
						
						
					}
					
				}
				else
					echo "Not a number or less than zero<br/>";
			}
			else
				echo "All the fields are required<br/>";
	}
	
?>