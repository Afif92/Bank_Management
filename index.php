<html>
     <center>
	<head>
		<title>Home</title>
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
			.np1{text-decoration:none;}
			
		</style>
		
		<script type="text/javascript">
		var images=["Bankpic.jpg","2.jpg","3.jpg"];
        var caption=["Bankpic for slide1","caption for Money Transfer ", "caption for Money withdraw"];
		var imageNumber=0;
		var imageLength=images.length-1;
		function changeimage(n)
		{ 
            imageNumber+=n;  
		
		if(imageNumber > imageLength)
		{ imageNumber=0;  }
		if(imageNumber<0)
		     {  imageNumber= imageLength;      }
			 
			 document.getElementById("first").src=images[imageNumber];
			  document.getElementById("cap").innerHTML=caption[imageNumber];
		return false;
		}
	function autofrun(){
	
	 setInterval("changeimage(1)", 3000);
	}
   </script>
	</head>
	<body align="center"  onload="autofrun()" >
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
		
		<img src="Bankpic.jpg"  id="first" width="500" height="500" /><br/>	
			<div id="cap">
			Bankpic for slide1
			</div>
			<table border="0"  cellpadding="" cellspacing="16" width="500">
			<tr>
			<td width="0"><a class=np1 href="#" onclick="changeimage(-1); return false; ">Previous slide</a></td>
			<td align="right"><a class=np1  href="#" onclick="changeimage(1); return false;">Next slide</a></td>
			</tr>	
	</body>
	</center>
</html>	