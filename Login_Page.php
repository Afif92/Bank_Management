<?php 
session_start();
?>

<html>
	<head>
		<title>Login</title>
		<style>
				body {
				background-color: lightblue;
				}
			.p1 a{
				padding:10px;
				border-radius:3px;
				background-color:orange;
				text-decoration:none;
				color:black;
			}
			.p1 a:hover{
				background-color:black;
				color:white;
			}
			
			.form1{
				background-color:#ddd;
				width:200px;
				padding:10px;
				font-family:Verdana;
				border-radius:3px;
				box-shadow:0px 2px 3px #000;
				border:1px solid #5a5a5a;
				//position:absolute;
				//top:50%;
				//left:50%;
				//transform:translateX(-50%) translateY(-50%);
			}
			.form1header1{
				display:block;
				width:100%;
				font-weight:bold;
				font-size:16px;
				text-align:center;
				color:#c80063;
			}
			.form1field1{
				width:100%;
				margin-top:5px;
				margin-bottom:5px;
				padding:5px;
			}
			.form1link1{
				width:100%;
				display:block;
				text-align:center;
			}
			.l1{ color:#e41330;		}
		</style>
		<script>
			function from1submit(){
				var idInputElement=document.getElementById('formId');
				var idInputElementValue=idInputElement.value;
				if(isNaN(parseInt(idInputElementValue))){
					alert("ID must be number");
					return false;
				}
				if(parseInt(idInputElementValue)+""!=idInputElementValue){
					alert("ID must be number");
					return false;
				}
			}
		</script>
	</head>	
	
	<body align="center"   >
		<table align="center">
			<tr>
			<td>
			<p class=p1 ><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="About_Us.html">About us</a>&nbsp;&nbsp;&nbsp;
			<a href="Login_Page.php">Login</a>&nbsp;&nbsp;&nbsp;
			<a href="Create_Account.php">Create Account</a></p>
			</td>
			</tr>			
		</table><br/>
		<center>
		<form class=form1 method="post" action="login_script.php" onsubmit="return from1submit()">		
			<table align="center">
				<tr>
				<td width="200">
				<span class=form1header1 >Login</span>
				<br/>	
				Id <br/>
				<input class=form1field1 type="text" name="ID" id=formId /><br/>			
				Password <br/>
				<input class=form1field1 type="password" name="PASSWORD"/><br/>
				<br/>	
				<input class=l1 type="submit" value="Login" name="Login"/>
				<br/>	<br/>	<a class=form1link1 href="Create_Account.php">CreateAccount</a>
				</td>
				</tr>
				
			</table>
			
			</form></center>
	</body>
</html>


			
		

 
