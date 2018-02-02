<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

	<title>Project</title>

	<?php
    include_once 'connect.php';
    ?>

</head>
<body>
<header>
		<h1>Student Database</h1>


	</header>

	<?php

	  if(isset($_POST['submit']))
	{

	    $sql = "INSERT INTO please (name,address)
    VALUES ('".$_POST["dname"]."','".$_POST["daddress"]."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    

		}



	?>

	<form action="" method="post"> 
	<label id="first" hidden> Name:</label><br/>
	<input type="text" name="dname" required placeholder="Name"><br/>

	<label id="first" hidden>Address</label><br/>
	<input type="text" name="daddress" required placeholder="Address"><br/>

	<button type="submit" name="submit">Submit</button>
	</form>

</body>
</html>