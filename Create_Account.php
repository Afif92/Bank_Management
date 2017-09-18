<html>
	<head><title>Create-Account</title>
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
			//.np1{text-decoration:none;}
			
		</style>
		
	</head>
	<body align="center"   >
		<table align="center">
			<tr>
			<td>
			<p class=p1><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="About_Us.html">About us</a>&nbsp;&nbsp;&nbsp;
			<a href="Login_Page.php">Login</a>&nbsp;&nbsp;&nbsp;
			<a href="Create_Account.php">Create Account</a></p>
			</td>
			</tr>			
		</table><br/>
	
	<center>
    <form method="post"	action="">	
	<table >	
	<tr>
			
			
		<td width="200">
			<fieldset>
			<legend> User-Info</legend>
			<input type="text" Name="tName" required="1" placeholder="Name"/><br/><br/>			
			<input type="text" Name="fName" placeholder="Father Name"/><br/><br/>			
			<input type="text" Name="e-mail" placeholder="E-mail"/><br/><br/>
			<input type="password" Name="upw" placeholder="Password"/><br/><br/>
			<input type="text" Name="day" size="4" placeholder="dd"/><input type="text" Name="month" size="3" placeholder="mm"/><input type="text" Name="year" size="4" placeholder="yyyy"/><br/><br/>          
			<input type="text" Name="Mob" placeholder="Phone no"/><br/><br/>	
			<input type="text" Name="initial_balance" placeholder="initial balance"/><br/><br/>
			
		</td>
		</fieldset>
		</tr>
		
	</table>
		
		<form>
       <input type="submit" value="Submit"/>
	   </center>
</html>	


<?php
       if($_SERVER['REQUEST_METHOD']=="POST"){
		   $check=0;
			$name=$_POST['tName'];
				if(empty($name))
				{
					global $check;
					echo "Name field can not be empty<br/>";
					$check++;	
				}	
				else if(str_word_count($name)<2)
				{
					global $check;	
					echo "Name should contain at least two word<br/>";
					 $check++;
				}
				else if(is_numeric(($name[0])))
				{
					global $check;
					echo " Name Must start with a letter<br/>";
					$check++;
				}
				else
				{
					$n=0;
					for($x=0;$x<strlen($name);$x++)
					{
						if(is_numeric($name[$x]))
						{  global $n;
							global $check;
							echo " Name Can not contain digits<br/>";
							$n++;
							$check++;
							break;
						}
					}
				}
			  $fname=$_POST['fName'];
				if(empty($fname))
				{
					global $check;
					echo "Father Name field can not be empty<br/>";
					$check++;
				}		
				else if(str_word_count($fname)<2)
				{
					global $check;	
					echo "Father Name should contain at least two word<br/>";
					 $check++;
				}	
				else if(is_numeric(($fname[0])))
				{
					global $check;
					echo "Father name Must start with a letter<br/>";
					 $check++;
				}
				else
				{
					$n=0;
					for($x=0;$x<strlen($fname);$x++)
					{
						if(is_numeric($fname[$x]))
						{  global $n;
							global $check;
							echo "Father name Can not contain digits<br/>";
							$n++;
							 $check++;
							break;
							}
						}
				}			
				$email=$_POST['e-mail'];
				if(empty($email))
				{
					global $check;
					echo "Email field is required <br/>";
					 $check++;
				}
				else if (!filter_var($email, FILTER_VALIDATE_EMAIL))//=== false)
					{
						global $check;
						echo("$email is an invalid email address please give correct email address<br/>");
						 $check++;
					} 
					$pwd=" ";
					
					
					if(!empty($_REQUEST['upw']))
					{
						 if(strlen($_REQUEST['upw']) < 4 || !preg_match("/^[A-Za-z0-9]*$/",$_REQUEST['upw']))
						   {
							   global $check;
							 echo "<b>Must give  password and length at least 4 number </b><br/>";
							  $check++;
					   }
			   
						else  $pwd =$_REQUEST['upw'];
					  }
		             else { global $check;
							 echo "<b>Must give  password </b><br/>";
							  $check++; }   
				
					$date=" ";
					$month=" ";
					$year=" " ;
					if( !empty($_POST['day']) &&  !empty($_POST['month']) && !empty($_POST['year']))
					{
						if(is_numeric($_POST['day']) && is_numeric($_POST['month']) && is_numeric($_POST['year']))
					{
					if($_POST['day']>=1 && $_POST['day']<=31)
					{
						$date=$_POST['day'];
						
						if($_POST['month']>=1 && $_POST['month']<=12)
						{
							$month=$_POST['month'];
							
							 if($_POST['year']>=1900 && $_POST['year']<=2017)
							{
								$year=$_POST['year'];
							}
						}
			
		             }
				else
					{		
						global $check;
						echo "Give the correct date ,  month and year<br/>"; 
						 $check++;
					}
				}
				else
				{
					global $check;
					echo "Invalid input <br/>";
					 $check++;
				}
		  }	
	   else
	   {
		   global $check;
			echo "Date of Birth must requared <br/>";
			 $check++;
	   }	 
			
			
		
	          $phone=$_POST['Mob'];
			  if(strlen($phone)!=11)
				{
					global $check;
					echo "Must give the valid phone number_format <br/>";
					 $check++;
				}
			
			$init_bal=$_POST['initial_balance'];
			if(is_numeric($init_bal))
			{			
				if($init_bal<500)
				{
					global $check;
					echo "Initial balance must be equal or greater than 500tk"."<br/>";
					 $check++;
				}	 
			}		
			else
			{
				echo "Balance must be number"."<br/>";	
				global $check;
				 $check++;
			}
		if($check==0)
		{
			echo "<br/>"."Name: ".$name."<br/>";
			echo "FName: ".$fname."<br/>";
			echo "Email: ".$email."<br/>";
			echo "date: ".$date."month: ".$month."Year: ".$year."<br/>";	
			echo "phone: ".$phone."<br/>";	
			echo "Bal: ".$init_bal."<br/>";
			$DOB=$date."/".$month."/".$year;
			$query="INSERT INTO information(Name,FatherName,Email,DOB,Phone,Balance,password)	VALUES('$name','$fname','$email','$DOB','$phone','$init_bal','$pwd')";
			$con=mysqli_connect("localhost","root","","bank_project");
			$result=mysqli_query($con,$query);	
			if($result==true)
				echo "<b>Record added</b>"."<br/>";	
			
		}
		$id = mysqli_fetch_array(mysqli_query($con,"SELECT ID FROM information WHERE Name='".$name."' AND Email='".$email."'"));
		$id['ID'];
		$id2=$id['ID'];
		
		echo "Your account ID is : $id2<br/>";
	}  
	  //echo "<h2>your account create successful</h2>";
?>







