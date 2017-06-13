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
    background-color: #ff4c4c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #ff4c4c;
}
div{
    border-radius: 5px;
    background: #FFFFFF;
    padding: 25px;
	background-image: url('C:\Users\an322069\Desktop\pic\i.jpg');
	margin-top: 20px;
	opacity: 0.9;
	}

h1   {color: red;}
legend {color:red;}


body {
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
    background-position: 0 0;
    
}

</style>

<body>

<div>

<form>
<fieldset class="textt">
    <legend><h1>Create Product</h1></legend>
<b>Product Name</b> <input type="text" name="name" placeholder="Enter Product Name"></br>

<b style="opacity: 1;">Product Code</b>  <input type="text" name="id" placeholder="Enter Product Name"></br>
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