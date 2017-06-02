<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=delibg7376jbnr host=ec2-23-23-234-118.compute-1.amazonaws.com port=5432 user=bmgnjpnaetiyzq password=b69bb793b59467cec59c95f212291d07d48053a91eb9e8fd40d990dee914c369 sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}

else{
echo "DB Connection successful";
}
 
?>
