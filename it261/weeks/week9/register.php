<?php

//include('server.php');
// eventually we will be connecting to our header include
include('server.php');

include('./includes/header.php');


?>

<div id="wrapper">
<h1 class="center">Register Today!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<!-- first_name, last_name, email, username, password1, password2 -->

<fieldset>
<label>First name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name']))  echo htmlspecialchars($_POST['first_name']) ;?>">



<label>Last name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name']))  echo htmlspecialchars($_POST['last_name']) ;?>">


<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email']))  echo htmlspecialchars($_POST['email']) ;?>">

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username']))  echo htmlspecialchars($_POST['username']) ;?>">


<label>Password</label>
<input type="password" name="password1" value="<?php if(isset($_POST['password1']))  echo htmlspecialchars($_POST['password1']) ;?>">

<label>Confirm your password</label>
<input type="password" name="password2" value="<?php if(isset($_POST['password2']))  echo htmlspecialchars($_POST['password2']) ;?>">

<button type="submit" name="reg_user" class="btn"> Register! </button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>' ">Reset</button>

</fieldset>
</form>
<p class="center">Already a member? <a href="login.php">Please login here!</a></p>


<?php
include('errors.php'); ?>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');

