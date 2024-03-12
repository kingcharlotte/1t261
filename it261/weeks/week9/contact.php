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
<a href="index.php"> Index</a>
<a href="contact.php"> Contact</a>

<!-- </div> -->
<!-- end wrapper -->


<!-- end -->


<!-- <div id="wrapper"> -->

<main>
    <h1>Welcome to my Contact Page!</h1>

    <p>Want to be friends?</p>
    <p>Buisness Inquiries?</p>
    <p>Have any questions?</p>

<?php
ob_start(); // why 

$first_name ='';
$last_name ='';
$email ='';
$phone='';
$gender = '';
$comments = '';
$privacy = '';
$interest = '';
$userFrom = '';



$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err='';
$gender_err = '';
$comments_err = '';
$privacy_err = '';
$interest_err = '';
$userFrom_err='';



// if server request method = post we will have php in between that if statement
if($_SERVER['REQUEST_METHOD'] == "POST") {
// if inputs are empty we will declare a statment else we will assign the $_POST to a varaible


if(empty($_POST['interest'])) {
// say something or do something
$interest_err = 'What... no interests?';

} else {
// defining the variable
$interest = $_POST['interest'];
}


if(empty($_POST['first_name'])) {
// say something or do something
$first_name_err = 'Please fill in your first name';

} else {
    // defining the variable
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
// say something or do something
$last_name_err = 'Please fill in your last name';

} else {
    // defining the variable
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
// say something or do something
$email_err = 'Please fill in your email';

} else {
    // defining the variable
    $email = $_POST['email'];
}


if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

if(empty($_POST['gender'])) {
// say something or do something
$gender_err = 'Please check your gender';

} else {
    // defining the variable
    $gender = $_POST['gender'];
}


if(empty($_POST['comments'])) {
// say something or do something
$comments_err = 'We value your input';

} else {
    // defining the variable
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
    // say something or do something
    $privacy_err = 'You must agree to recieve spam email!';
    
    } else {
        // defining the variable
        $privacy = $_POST['privacy'];
    }

if($_POST['userFrom'] == NULL) {

    $userFrom_err = 'Please choose an option';
} else {
    $userFrom = $_POST['userFrom'];
}


function my_contact($interest) {
$my_return='';
if(!empty($_POST['interest'])) {
    $my_return = implode(', ' , $_POST['interest']);
}
return $my_return;
} // end  my_contact function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['interest'],
$_POST['userFrom'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.' '.PHP_EOL.'
Last Name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Interest: '.my_contact($interest).' '.PHP_EOL.'
From: '.$userFrom.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'

';

$headers = array(
    'From' => 'noreply@mystudentswa.com'

);

// we will be adding an if statement - that this email form will work only if all the fields are filled out

    if(!empty($first_name &&
    $last_name &&
    $email &&
    $gender &&
    $interest &&
    $userFrom &&
    $comments &&
    $phone &&
    $privacy) && 
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        
    mail($to, $subject, $body, $headers);
    header('Location:thx.php');
}

// dont forget, you must upload your form onto the server to recive an email


} // end isset
} // closing server request method

?>


<h1>Please fill out the form below to contact me</h1>
<!-- <form> -->
<form  style="background-color:#E6E6FA" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method ="post">
<fieldset>
<legend>
Contact Charlotte
</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])    ;?>">
<span><?php echo $first_name_err  ;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])    ;?>">
<span><?php echo $last_name_err  ;?></span>

<label>Email </label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])    ;?>">
<span><?php echo $email_err  ;?></span>


<label>Gender </label>
<ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female' ) echo 'checked= "checked"'    ;?>>Female</li>

<li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male' ) echo 'checked= "checked"'    ;?>>Male</li>

<li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither' ) echo 'checked= "checked"'    ;?>>Neither</li>
</ul>
<span><?php echo $gender_err  ;?></span>


<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone']))  echo htmlspecialchars($_POST['phone']);?>">
<span><?php echo $phone_err  ;?></span>

<label>I am interested in:</label>
<ul>
<li><input type="checkbox" name="interest[]" value="friend" <?php if(isset($_POST['interest']) && in_array('friend', $interest)) echo 'checked="checked"' ;?>> Being Friends</li>

<li><input type="checkbox" name="interest[]" value="business" <?php if(isset($_POST['interest']) && in_array('business', $interest)) echo 'checked="checked"' ;?>> Business Inquiry</li>

<li><input type="checkbox" name="interest[]" value="general" <?php if(isset($_POST['interest']) && in_array('general', $interest)) echo 'checked="checked"' ;?>> General Question</li>

<li><input type="checkbox" name="interest[]" value="web" <?php if(isset($_POST['interest']) && in_array('web', $interest)) echo 'checked="checked"' ;?>> Website Question</li>

<li><input type="checkbox" name="interest[]" value="talk" <?php if(isset($_POST['interest']) && in_array('talk', $interest)) echo 'checked="checked"' ;?>> Just want to talk</li>

</ul>


<span><?php echo $interest_err  ;?></span>


<label>Where are you from? :</label>
<select name="userFrom">
<option value="" <?php if(isset($_POST['userFrom']) && is_null($_POST['userFrom'])) echo 'selected="unselected"';?>>Select One!</option>   

<option value="NA" <?php if(isset($_POST['userFrom']) && $_POST['userFrom'] == "NA") echo 'selected="selected"';?>>North America</option>   

<option value="SA" <?php if(isset($_POST['userFrom']) && $_POST['userFrom'] == "SA") echo 'selected="selected"';?>>South America</option>   

<option value="AS" <?php if(isset($_POST['userFrom']) && $_POST['userFrom'] == "AS") echo 'selected="selected"';?>>Asia</option>   

<option value="EU" <?php if(isset($_POST['userFrom']) && $_POST['userFrom'] == "EU") echo 'selected="selected"';?>>Europe</option>   

<option value="AF" <?php if(isset($_POST['userFrom']) && $_POST['userFrom'] == "AF") echo 'selected="selected"';?>>Africa</option> 

<option value="AU" <?php if(isset($_POST['userFrom']) && $_POST['userFrom'] == "AU") echo 'selected="selected"';?>>Australia</option>   

<option value="N" <?php if(isset($_POST['userFrom']) && $_POST['userFrom'] == "N") echo 'selected="selected"';?>>Rather not say</option>   
</select>

<span><?php echo $userFrom_err  ;?></span>


<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
<span><?php echo $comments_err  ;?></span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"';?>>Yes</li>

</ul>
<span><?php echo $privacy_err  ;?></span>


<input type="submit" value= "Send it">

<p><a href="">Reset</a></p>
</fieldset>
</form>
</main>

<aside>
    <h3>Thanks for visiting my website!</h3>
    <p>FAQ: </p>
    <p>Where are you from? - I am from Washington</p>
    <p>What is this website for? - To showcase my programming skills and to show personal photography</p>
    <p>How do I get in contact with you? - Please fill out my contact form</p>
    <p>What are you studying? - I am studying computer science</p>
</aside>
</div>



<?php

include('includes/footer.php'); ?>