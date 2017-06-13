<head>
    <meta charset="utf-8" />

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style>
 
body{
background-image:url("bg.jpg");
 -moz-background-size: 100% 100%;           /* Gecko 1.9.2 (Firefox 3.6) */
         -o-background-size: 100% 100%;           /* Opera 9.5 */
    -webkit-background-size: 100% 100%;           /* Safari 3.0 */
            background-size: 100% 100%;           /* Gecko 2.0 (Firefox 4.0) and other CSS3-compliant browsers */

       -moz-border-image: url("bg1.jpg") 0;    /* Gecko 1.9.1 (Firefox 3.5) */
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
</style>
</head>

<body>
<center>
<h1>Product Management</h1>
<br /><br />
<button class="button"  style="background-color: #62E4CE;"><span> <i class="fa fa-th-list" aria-hidden="true"></i> All Products </span></button>
<button class="button"  style="background-color: #A489F5;"><span> <i class="fa fa-search" aria-hidden="true"></i>  Search </span></button></br></br>
<button class="button" style="background-color: #FB648A;"><span> <i class="fa fa-plus" aria-hidden="true"></i>  Create </span></button>
<button class="button"  style="background-color: #F98086;"><span> <i class="fa fa-retweet" aria-hidden="true"></i>  Update </span></button></br></br>
<button class="button"  style="background-color: #CBEB6A;"><span> <i class="fa fa-trash" aria-hidden="true"></i>  Delete </span></button>
<button class="button"  style="background-color: #CBEB6A;"><span> <i class="fa fa-usd" aria-hidden="true"></i>  Price Book</span></button></br></br>
</center>
</body>
</html>

