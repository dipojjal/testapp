<!DOCTYPE html>
<html>
<head>
<style>


.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 28px;
    cursor: pointer;
}

.search {

background-color: #1fa318; 
opacity: .4;
position: absolute;
top: 60%;
 left: 20%;
   box-shadow: 10px 10px 5px #888888;
  width: 200px;
  height: 200px;
  
  transform-origin: 50% 48%;
  border-radius: 43%;


} /* Green */
.search:hover {background-color: #236d1f;
}

.create {background-color: #2196F3;
opacity: .4;

position: absolute;
top: 60%;
  left: 60%;
    box-shadow: 10px 10px 5px #888888;
  width: 200px;
  height: 200px;
  
  transform-origin: 50% 48%;
  border-radius: 43%;} /* Blue */
  
.create:hover {background: #1e326d;}


.update {background-color: #ff9800;
opacity: .4;

position: absolute;
top: 20%;
  left: 60%;
    box-shadow: 10px 10px 5px #888888;
  width: 200px;
  height: 200px;
  
  transform-origin: 50% 48%;
  border-radius: 43%;} /* Orange */
  
.update:hover {background: #e2801e;}


.delete {background-color: #f44336;
opacity: .4;

position: absolute;
top: 40%;
  left: 40%;
    box-shadow: 10px 10px 5px #888888;
  width: 200px;
  height: 200px;
  
  transform-origin: 50% 48%;
  border-radius: 43%;} /* Red */ 
.delete:hover {background: #a51d1d;}


.products {background-color: #b24c8d;
opacity: .4;

position: absolute;
top: 20%;
  left: 20%;
    box-shadow: 10px 10px 5px #888888;
  width: 200px;
  height: 200px;
  
  transform-origin: 50% 48%;
  border-radius: 43%;} /* Red */ 
.products:hover {background: #510e39;}



body {color: red; align-top:20%; font-family: "Times New Roman", Georgia, Serif;  border: 1px solid red;
    outline-style: dotted;
    outline-color: #4c99b2;}
	
	


</style>
</head>
<body >
<div>
<center><h1><b><i>Product Management</i></b></h1></center>
</div>

	<form name="prod_mgmt" method="POST" action="allProducts.php">
	<button type="submit" class="btn products"><b>All Products</b></button>
	</form>
	
	<form name="prod_mgmt" method="POST" action="SearchProduct.php">
	<button type="submit" class="btn search"><b>Search</b></button>
	</form>
	
	<form name="prod_mgmt" method="POST" action="createProduct.php">
	<button type="submit" class="btn create"><b>Create</b></button>
	</form>
	
	<form name="prod_mgmt" method="POST" action="ProductUpdate.php">
	<button type="submit" class="btn update"><b>Update</b></button>
	</form>
	
	<form name="prod_mgmt" method="POST" action="DeleteProduct.php">
	<button type="submit" class="btn delete"><b>Delete</b></button>
	</form>

</body>
</html>
