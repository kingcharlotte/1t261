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

<header>
<div class="inner-header">
<a href="index.php">

<img id="logo" src="images/php_logo.png" alt="logo">

</a>

<nav>
<ul>
<li><a href="home.php">Home</a></li>  
<li><a href="about.php">About</a></li>  
<!-- <li><a href="it261/website/daily.php">Daily</a></li>   -->
<li><a href="daily.php">Daily</a></li>

<li><a href="project.php">Project</a></li>  
<li><a href="contact.php">Contact</a></li>  
<li><a href="gallery.php">Gallery</a></li>  

</ul>

</nav>

</body>
</html>

<?php


echo '<h1>CONTACT PAGE</h1>';

echo '<h2>Time for our navigation that will again have both a key and a value</h2>';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',

);

echo'<ul>';

foreach ($nav as $key => $value) {
    # code...
    echo '<li><a href=" '.$key.' "> '.$value.' </a></li>';
}

echo'<ul>';


echo '<h2>Our navigation will display a different color when on the index.php page!</h2>';

// we are going to define a constant 
// if we are on the index page THIS_PAGE will be the index page
// if we are on the about page THIS_PAGE will be the about page
// ect, that is all that means

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// we are going to be adding an if statment - if we are on this_page and it is the index.php page, do something
echo '<ul>';

foreach($nav as $key => $value) {
    if (THIS_PAGE == $key) {
        echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';

    } else {
        echo '<li><a style="color:green;"  href=" '.$key.' "> '.$value.' </a></li>';

    }

} // end foreach

echo '<ul>';



?>


