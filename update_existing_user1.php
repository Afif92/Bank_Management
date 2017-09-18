<html>
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

	session_start(); 

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['ID'];
		$name = $_POST['Name'];
		$fname = $_POST['FatherName'];
		$dob = $_POST['DOB'];
		$phone = $_POST['Phone'];
		$bal = $_POST['Balance'];
		
			
		
		$query = "UPDATE information SET Name='$name', FatherName='$fname', DOB='$dob',phone='$phone', Balance='$bal' WHERE id=$id";
		$con = mysqli_connect("localhost", "root", "", "bank_project");	
		$result = mysqli_query($con, $query);	
		if($result)
	{
			 echo "
            <script type=\"text/javascript\">
             alert('Sure Want to Update??');
            </script>
        ";
		echo "<br/>"."Updated"."<br/>";
		
		
				echo '<form method="post">
			ID:'.$id.'
			<input type="hidden" name="ID" value=""/>	
			<br/>Name:<br/>
			<input name="Name" value=""/>
			<br/>FatherName:<br/>
			<input name="FatherName" value=""/>
			<br/>DOB:<br/>
			<input name="DOB" value=""/>
			<br/>PhoneNo:<br/>
		    <input name="Phone" value=""/>
			<br/>Balance<br/>
			<input name="Balance" value=""/>
			<br/><br/>
			<input type="submit" value="Submit" />
		</form>';
	}

		
	}
		
		
		
	
?>