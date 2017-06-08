<html>
<head>
<title></title>
</head>
<body>
<?php

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect(pg_connection_string_from_database_url());

 $result = pg_query($pg_conn, "SELECT Name, sfid, isactive, country__c, state__c FROM salesforce.Product2");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_row($result)) {
  echo "Name: $row[0] ". "Id: $row[1] ". "Active: $row[2] ". "Country: $row[3] ". "State: $row[4]";
  echo "<br />\n";
}
 
print "\n"; 

?>
</body>
</html>
