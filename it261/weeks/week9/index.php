<?php //this is our index.php which is the big picture, it represents the home page of a website
session_start();
include('config.php');


// if the username has NOT been set, you will not see the index.php file, but will be directed back to the login page

if(!isset($_SESSION['username'])) {
    header('Location:login.php');

}


if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location:login.php");
}

include('./includes/header.php'); ?>
<header>

<?php
// if our session for the username is succesfful, we will dispaly a msg

if(isset($_SESSION['success'])) :?>

<div class="success">

<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>

</div>
<!-- end success -->

<?php endif;

if(isset($_SESSION['username'])) :?>

<div class="welcome-logout">
<h3> Hello
<?php echo $_SESSION['username'];?>

</h3>
<a href="index.php?logout='1' "> Log out </a>

</div>

<!-- end welcome-logout -->

<?php endif ;?>
</header>
<!-- my wrapper starts here! -->
<div id="wrapper">
<h1>Welcome to the home page of our website!!!</h1>
<a href="index.php"> Index</a>
<a href="contact.php"> Contact</a>

</div>
<!-- end wrapper -->

<?php include('./includes/footer.php');?>