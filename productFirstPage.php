<head>
    <meta charset="utf-8" />

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel = "stylesheet" type = "text/css" href = "myfile1.css" />
    <style>
 
body{
background-image:url("bg.jpg");
 -moz-background-size: 100% 100%;           
         -o-background-size: 100% 100%;           
    -webkit-background-size: 100% 100%;           
            background-size: 100% 100%;              
}

.button {
  border-radius: 20px;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 38px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
 box-shadow: 10px 10px 5px #888888;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: ;
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    
    form{
    display:inline;
    }
</style>
</head>

<body>
    
    <?php
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1);
}
    $username = $_POST['uname'];
    $password = $_POST['pwd'];
    
  $pg_conn = pg_connect(pg_connection_string_from_database_url());
  $searchedUser = pg_query($pg_conn, "SELECT Id FROM salesforce.Heroku_User__c where (username__c='$username' AND password__c='$password')");
    
    if(pg_num_rows($searchedUser)==0){
    
    $searchedUser= pg_query($pg_conn, "SELECT Id FROM salesforce.Heroku_User__c where username__c='$username' ");
        
    };
    
    $rows=pg_num_rows($searchedUser);

    if($rows==0){
        
    echo "<center> <h1>User not found</h1> </center><br /><br />";
        echo "<form name=\"goBack\" action=\"index.php\" method=\"POST\">";
        echo "<button type=\"submit\" class=\"btn btn-danger\">Go Back</button>";
        echo"</form>";
    exit;
    }
    
    ?>
    
<center>
<h1>Product Management</h1>
<br /><br />
    
    <form name="all-prods" action="allProducts.php" method="POST"><button class="button"  style="background-color: #62E4CE;">
    <span> <i class="fa fa-th-list" aria-hidden="true"></i> All Products </span>
    </button>
    </form>

    <form name="search-prods" action="SearchProduct.php" method="POST">
    <button class="button"  style="background-color: #A489F5;">
    <span> <i class="fa fa-search" aria-hidden="true"></i> Search </span>
    </button>
    </br></br>
    </form>

    <form name="create-prods" action="Product_Entry.php" method="POST">
    <button class="button" style="background-color: #FB648A;">
        <span> <i class="fa fa-plus" aria-hidden="true"></i> Create </span>
    </button>
    </form>

    <form name="update-prods" action="ProductUpdate.php" method="POST">
        <button class="button"  style="background-color: #F98086;">
        <span> <i class="fa fa-retweet" aria-hidden="true"></i>  Update </span>
    </button></br></br>
    </form>

    <form name="delete-prods" action="DeleteProduct.php" method="POST">
        <button class="button"  style="background-color: #CBEB6A;">
        <span> <i class="fa fa-trash" aria-hidden="true"></i> Delete </span>
    </button>
    </form>

    <form name="pricebook-prods" action="priceBookProduct.php" method="POST">
        <button class="button"  style="background-color: #CBEB6A;">
        <span> <i class="fa fa-usd" aria-hidden="true"></i> Catalogue</span>
    </button></br></br>
    </form>

</center>
</body>
</html>

