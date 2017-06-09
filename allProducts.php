<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
<title></title>
</head>
<body>
<?php

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect(pg_connection_string_from_database_url());

 $result = pg_query($pg_conn, "SELECT sfid, Name, isactive, country__c, state__c FROM salesforce.Product2");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
  echo "<center><h2>All Products List</h2></center>";
  echo "<div class=\"container\">";
	echo "<div class=\"row\">";
  echo "<div class=\"table-responsive\">";
  echo "<table class=\"table table-striped\">";
  echo "<thead>";
  echo "<tr>";
  echo"<th>ID</th>";
  echo "<th>NAME</th>";
  echo "<th>ACTIVE</th>";
  echo "<th>COUNTRY</th>";
  echo"<th>STATE</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody id=\"prodTable\">";
while ($row = pg_fetch_row($result)) {
  echo "<tr>";
  echo "<td>$row[0]</td>". "<td>$row[1]</td>". "<td>$row[2]</td>". "<td>$row[3]</td>". "<td>$row[4]</td>";
  echo "</tr>";
}
  echo"</tbody>";
  echo "</table>";
  echo "</div>";
  echo "<div class=\"col-md-12 text-center\">";
  echo "<ul class=\"pagination pagination-lg pager\" id=\"myPager\"></ul>";
  echo "</div>";
  echo "</div>";
  
?>
</body>
</html>
