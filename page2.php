<!DOCTYPE html>
<html>
<head>
    <title>Form Page 2</title>
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
		input[type="text"],input[type="number"]{
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
    <?php
    // Retrieve data from the first page
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format. Please go back and try again.";
        exit;
    }
    ?>
    <div class="container">
    <form method="POST" action="page3.php">
        <label for="location" >Location:</label>
        <input type="text" name="location" pattern="[A-Z a-z]{1,10}" placeholder="Location" required><br><br>
        
        <label for="age">Age:</label>
        <input type="number" name="age" placeholder="Age" min="10" max="100"><br><br>
        
        <label for="university">University:</label>
        <input type="text" name="university" pattern="[A-Z a-z]{1,10}" title="Only alphabets are allowed"placeholder="University" required ><br><br>
        
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="phone" value="<?php echo $phone; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        
        <input type="submit" name="submit" value="Next" style="cursor: pointer; margin-top: 1px; margin-bottom: 15px; ">
    </form>
</div>
</body>
</html>

