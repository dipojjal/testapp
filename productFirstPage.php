<head>
<style>
.button {
  display: inline-block;
  padding: 75px 105px;
  font-size: 27px;
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
    padding: 20px;
	
}
#d1 {
    border-radius: 5px;
 
    padding: 20px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #5CE4F3;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

form {
    display: inline;
}

</style>
</head>
<body style="background-color: white;">

<div id="d"><center>
<h1>Product Management</h1></center></div>
<div id="d1"><center>

<form name= "Search" method= "POST" action= "SearchProduct.php">
<button type="Submit" class="button" >Search Product</button>
</form>

<form name="Create" method="POST" action="createProduct.php">
<button type="Submit" class="button">Create Product</button></br></br>
</form>

<form name= "Update" method="POST" action="ProductUpdate.php">
<button type="Submit" class="button">Update Product</button>
</form>

<form name= "Delete" method="POST" action="DeleteProduct.php">
<button type="Submit" class="button">Delete Product</button></center>
</form>

</div>

<body>
</html>
