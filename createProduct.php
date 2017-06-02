<html>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 8%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

input[type=reset] {
    width: 8%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #45a049;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 25px;
}

body {background-color: powderblue;}
h1   {color: blue;}
legend {color:red;}
</style>

<body>

<?php

$username = $_POST['uname'];
$password = $_POST['pwd'];



?>

<div>
<form>
<fieldset>
    <legend><b>Create Product</b></legend>
<b>Product Name</b> <input type="text" name="name"></br>

<b>Product Code</b>  <input type="text" name="id"></br>
<p><b>
Product Family</b>
<select name="family">
<option value="">Select</option>
<option value="m">Medicare</option>
<option value="c">Commercial</option>
<option value="a">Aspire</option>
<option value="e">Education</option>
</select>
</p>

<b>isActive</b>  <input type="checkbox" name="isActive"></br>
</br>
<b>Description</b>  </br><br/>
<textarea name="comment" rows="5" cols="40"></textarea>
</br></br>
<input type="submit" value="Save"></t>
<input type="reset" value="Reset">

</fieldset>

</form>
</div>
</body>
</html>