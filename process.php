<!DOCTYPE html>
<html>
<head>
	<title>Perform administrative tasks</title>
</head>
<body>



<?php

$uName = $_POST['uName'];
$pwd = $_POST['pwd'];
$loggedIn = false;

$host = "host=ec2-23-23-234-118.compute-1.amazonaws.com";
$port = "port=5432";
$dbname = "dbname=delibg7376jbnr";
$credentials = "username=bmgnjpnaetiyzq password=b69bb793b59467cec59c95f212291d07d48053a91eb9e8fd40d990dee914c369";

$db=pg_pconnect($host, $port, $dbname, $credentials);

if (!$db) {
	echo "Connection failed";
}
else{

echo "Connection established";

if(($uName='dipojjal') && ($pwd='heroku1234')){
	
$loggedIn= true;
	echo "Login successful!";

$accts =<<< EOF
Select * from postgresql-transparent-57730; 
EOF;

if(!$accts){
	echo "failed to list accounts";
}

else{
	echo "Command executed successfully";

	while($row = pg_fetch_row($accts)) {
      echo "ID = ". $row[0] . "\n";
      echo "NAME = ". $row[1] ."\n";
      echo "ADDRESS = ". $row[2] ."\n";
      echo "SALARY =  ".$row[4] ."\n\n";
   }
   echo "Operation done successfully\n";
   pg_close($db);
	
}



}

else{
	
	echo "User not found!";

}

}


?>

<form name="createProduct" action="createProduct.php" method="POST">
	
<input type="submit" name="create" label="Create Product" />

</form>

</body>
</html>