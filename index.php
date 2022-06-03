<?php
function validation($data)
	{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
	if ($_SERVER["REQUEST_METHOD"] =="POST")
	{
	$usernameVar=Validation($_POST["username"]);
	echo $usernameVar;
	}
?>
<html>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
Username:<input type="text" name="username"/> <br/>
<input type="submit"/>
</form>
</body>
</html> 
