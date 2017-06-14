<html>

<style>



div {
    border-radius: 5px;
   
    background: #FFFFFF;
    padding: 25px;
	background-image: url('C:\Users\an322069\Desktop\pic\i.jpg');
	margin-top: 20px;
	opacity: 0.9;
}
#s
{
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
   
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
#s:focus {
    width: 100%;
}

legend  {color: red; size: 50px;}


.button {
  border-radius: 2px;
  background-color: #ff4c4c;
  border: none;
  color: white;
  text-align: center;
  font-size: 14px;
  padding: 10px;
  width: 100px;
  transition: all 0.4s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
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


body {
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
    background-position: 0 0;
    
}


</style>

<body>
<div>
<form>
<fieldset>
    <legend><h1>Delete Product</h1></legend>
	<div>
<b>Product ID</b>
<form name="delete-prod" action="deleted.php" method="POST">
  <input type="text" name="search" placeholder="Search..">

<button class="button" type="submit"><span>Delete</span></button>
	</form>
</fieldset>

</form>
	
</div>
</body>
</html>
