<head>
<style>
.button {
  display: inline-block;
  padding: 75px 105px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#d {
    border-radius: 5px;
    background-color: #5CE4F3;
    padding: 25px;
	
}
#d1 {
    border-radius: 5px;
 
    padding: 25px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #5CE4F3;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body style="background-color: white;">
<?php

$user = $_POST("uname");
$pwd= $_POST("pswd");

# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect(pg_connection_string_from_database_url());

$result = pg_query($pg_conn, "SELECT username, password FROM salesforce.Heroku_User__c where username=$user && password=$pwd");
print "<pre>\n";
if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
  print "Records in the Accounts:\n";
  while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
}
print "\n";

<div id="d"><center>
<h1>Product Management</h1></center></div>
<div id="d1"><center>
<button class="button">Search Product</button>
<button class="button">Create Product</button></br></br>
<button class="button">Update Product</button>
<button class="button">Delete Product</button></center>
</div>

?>

<body>
</html>
