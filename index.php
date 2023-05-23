
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Page 1</title>
<style>	
		
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
		}
		.container{
			width:420px;
			height:auto;
			/* margin:20px 60%; */
			border-radius:10px;
			overflow:hidden;
		}
		h1{
			margin-bottom:20px;
		}
		input[type="text"],input[type="email"],input[type="tel"]{
			border:none;
			border-bottom:1px solid gray;
			padding:8.5px;
			width:95%;
			margin:10px 0 20px 10px;
			font-size:15px;

		}
		input{
			border-radius:10px;
		}

		input[type="submit"] {
			border:none;
			border-radius:10px;
			background-color:#03FB49;
			padding:10px;
			width:95%;
			margin:15px 0 10px 10px;
			font-size:18px;
			transition:0.5s
		}
		input[type="submit"]:hover{
			background-color:#03A531;
			color:#fff;
		}
		
		
		select{
			border:none;
			border-bottom:1px solid gray;
			padding:7px;
			/*width:50%;*/
			margin:0 0 10px 10px;
			font-size:15px;
		}
		input[type="tel"]
		{
		width: 150%;
		}
		
</style>
</head>
<body>
	<div class="container">
	
		<form action="page2.php" method="POST" >
		<label for="name" >Name</label>
			
			<input type="text" placeholder="Name" name="name" required="" maxlength="10" pattern="[A-Z a-z]{1,10}" title="Only letters are allowed(not more than 10 characters)"><br>

			<label for="Email Id" >Email Id</label>
  <input type="email"   placeholder="Email Id" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

			
  <label for="Phone Number" >Phone Number</label>
<table>
		
		<tr>
			<td>
				
			 	 <select name="phoneCode" required>
		     	 <option selected hidden value=""> Code</option>
		     	 <option value="+91">+91</option>
		     	 <option value="978">978</option>
		     	 <option value="979">979</option>
		     	 </select>
			</td>
			<td>	
				 <input type="tel"  placeholder="Phone Number" required="" name="phone" maxlength="10"  pattern="[0-9]{10}" title="Only 10 digit numbers are allowed "><br>
			</td>
		</tr>
</table>

			<input type="submit" value="Next" style="cursor: pointer; margin-top: 1px; margin-bottom: 15px; ">
			<hr>
		</form>
</div>
</body>
</html>
