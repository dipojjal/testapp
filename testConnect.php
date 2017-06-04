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
  
  if($db){
  echo "Connection successful";
      
      $query = "select * from salesforce.Account";
      
      $result = $db->query($query);

      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
          echo "<tr>";
    
          echo "<td>" . $row["Id"] . "</td>";
    
          echo "<td>" . htmlspecialchars($row["Name"]) . "</td>";
   
          echo "</tr>";
}
$result->closeCursor();
      
  }
  
  else{
  echo "Connection failed";
  }
    
}

?>
</body>
</html>
