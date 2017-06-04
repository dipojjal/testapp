<html>
<head>
<title>The database connection file</title>
</head>
<body>
<?php
$dsn = "pgsql:"
    . "host=ec2-50-19-218-160.compute-1.amazonaws.com;"
    . "dbname=d1vaup90suifim;"
    . "user=qlrdqqoimqwffm;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=b2987c12187c41f2054ed19441d973424761bf5d67b34eec665381d0e3c9deb2";

$db = new PDO($dsn);
      
      $query = "select Id, Name from salesforce.Account";
      
      $result = $db->query($query);

      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
          echo "<tr>";
    
          echo "<td>" . $row["salesforce.Account.Id"] . "</td>";
    
          echo "<td>" . htmlspecialchars($row["salesforce.Account.Name"]) . "</td>";
   
          echo "</tr>";
      }
$result->closeCursor();
     
# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());
# Now let's use the connection for something silly just to prove it works:
$result = pg_query($pg_conn, "SELECT Name FROM salesforce.Account");
print "<pre>\n";
if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
  print "Tables in your database:\n";
  while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
}
print "\n";
   
?>
</body>
</html>
