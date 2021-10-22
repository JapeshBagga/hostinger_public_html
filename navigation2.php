<?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>
ul,li,a{
    font-family: 'Poppins','Open Sans', sans-serif;
    
}



h1 {
    font-family: 'Poppins','Open Sans', sans-serif;
color: white;
font-size: 1.2rem;
    font-weight: 500;
text-align: center;
}




ul {
margin-left: 0%;
left:-0.5;
margin-right: 0%;
margin-top: 0%;
font-weight: bolder;
list-style-type: none;
margin: 0;
padding: 0;
box-shadow: 14px 7px 20px #ccc;
height:80px;

top: 0;
width: 100%;
overflow: hidden;
background-color: white;
position: fixed;
}

li {
float: right;
margin-right:20px;
font-weight: bolder;
}

 li a, .dropbtn {
display: inline-block;
color: black;
font-weight: bolder;
text-align: center;

padding: 14px 16px;
font-size: 1.2rem;

text-decoration: none;
}

li a:hover, .Soccer:hover .dropbtn {
color: orange;
}
li.Soccer {
display: inline-block;
}

.Soccer-content {
display: none;
font-size: 1.2rem;

position: fixed;
font-weight: bolder;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.Soccer-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
font-size: 1.2rem;
   
    font-weight: 500;
display: block;
text-align: left;
}

.Soccer-content a:hover {color: orange}

.Soccer:hover .Soccer-content {
display: block;
}
.button-demo{
    background-color: orangered;
    width:170px;
   
    color:white;
    font-size: 1.03rem;
    padding: 10px;
    border-radius:5px;
}
.left{
    float:left;
}
.img-fluid{
    margin:25px;
}
.drop-space{
    margin-top:15px;
}
.drop-space-1{
    margin-top:20px;
    
  
}
</style>
<body>

  
<div class="right">
<ul>
<a class="navbar-brand" href="index.php" >
            <img src="images/jobaskit4.png" class="img-fluid" height="40">
        </a>
<li><a href="brokenlink.html" class="button-demo drop-space-1">Get Instant Demo</a></li>
<li><a href="brokenlink.html " class="drop-space">Contact Us</a></li>
<li class="Soccer">
     <a href="" class="dropbtn drop-space">For company</a>
     <div class="Soccer-content">
  <a href="#">Features</a>
  <a href="#">Guide</a>
 
</div>
</li>
<li class="Soccer">
     <a href="" class="dropbtn drop-space">For School</a>
     <div class="Soccer-content">
  <a href="#">Features</a>
  <a href="#">Guide</a>
</div>
</li>
<li><a href="brokenlink.html" class="drop-space">Why us</a></li>
</ul>
</div>
</div>
</nav>

</body>
</html>