<?php 
include('config.php');
include('./includes/header.php');

echo '<h1>HOME PAGE</h1>';
?>

<?php

include('includes/footer.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>
* {
    margin:0;
    padding:0;
    box-sizing: border-b0x;

}

body {
    background-color:green;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

header {
    background:yellow;
padding:20px 0;
}

.inner-height {
    max-width:120px;
margin:0px auto;
overflow:hidden;
}

#logo {
    width:200px;
    float:left;
}

nav ul {
    float:right;
    margin-top:30px;
    /* get rid of bullet pts. */
    list-style-type: none;
}

/* remove underline */
nav a {
    text-decoration: none;
}
nav li {
    float:left;
    margin-left: 30px;
}

#wrapper {
max-width:1200px;
margin:20px auto;
clear:both;
/* our magin bottom will not show becuase we have floated elements  */
/* to fix this add the line below: */
overflow: hidden;
}


#hero {
/* height:400px; */
background:red;
margin-bottom:20px;

}

main {
width:62%;
background:lightblue;
float:left;

}
/* 62 + 35 = 97 which = 3% of gutter space aka ~= 20px */
aside {
width:35%;
/* height:300px; */
background:salmon;
/* makes this box display on the right */
float:right;

}


footer {
    height:60px;
    line-height: 60px;
    background:#ddd;
    clear:both;
}

footer ul {
    display: flex;
    justify-content: center;
    list-style-type:none;
}

footer li {
    justify-content: center;
    margin:0 15px;
}

img {
    max-width: 100%;
}

/* typography */
p {
    margin-bottom: 20px;
    line-height: 1.4;

}

h1 {
    font-size: 2.5em;

}

h2 {
    font-size: 2em;
}

h3 {
    font-size: 1.5em;
}

h1, h2, h3 {
    margin-bottom: 10px;
    font-family: serif;
}
    </style>
</head>

<body>

<!-- <header> -->
<h1>HOME PAGE</h1>
<!-- <div class="inner-header"> -->
<a href="index.php">

<!-- <img id="logo" src="images/php_logo.png" alt="logo"> -->

</a>
<!-- 
<nav>
<ul>
<li><a href="home.php">Home</a></li>  
<li><a href="about.php">About</a></li>   -->
<!-- <li><a href="it261/website/daily.php">Daily</a></li> do not uncomment  -->
<!-- <li><a href="daily.php">Daily</a></li>

<li><a href="project.php">Project</a></li>  
<li><a href="contact.php">Contact</a></li>  
<li><a href="gallery.php">Gallery</a></li>  

</ul>

</nav> -->




<!-- </div> -->
<!-- end inner header -->
<!-- </header> -->

<div id="wrapper">

<div id="hero">
<img src="images/twelve.jpeg" alt="Twelve is greater than 3">

</div>
 <!-- end hero -->


<main>
<h1>Welcome to our Web App Programming Class</h1>

<h2>We are going to learn PHP!</h2>
<p>Parapgraph</p>
<h2>Another Headline 222!</h2>
<p>another paragraph</p>
</main>


<aside>
<h3>This is our headline three in our beautiful aside</h3>
<p>paragraph</p>
</aside>

</div>
<!-- end wrapper -->

<!-- <footer>
 <ul>
<li>Copyright &copy;
    2024</li>
<li>All Rights Reserved</li>
<li><a href="../index.php">Web Design by Charlotte King</a></li>
<li><a id="html-checker" href="#">HTML Validation</a></li>
<li><a id="css-checker" href="#">CSS Validation</a></li>
</ul>
    
<script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>
    
</footer> -->
    
</body>

</html>



