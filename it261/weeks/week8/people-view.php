<?php

// do not call out the header include yet!!
// the following information is abov the doctype so we cannot echo anyhting
include('config.php');


// is get set???

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//whn everything is connected. assingn everyhting to result (sql table)
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
$first_name = stripslashes($row['first_name']);
$last_name = stripslashes($row['last_name']);
$email = stripslashes($row['email']);
$birthdate = stripslashes($row['birthdate']);
$occupation = stripslashes($row['occupation']);
$blurb = stripslashes($row['blurb']);
$details = stripslashes($row['details']);
// will i add a column?

$feedback = '';

    } // close while loop

} else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?> 

<main>
<h1>Welcome to our People View Page</h1>
<h2>Introducing: <?php echo $first_name;?></h2>

<ul>
<?php
echo '
<li><b>First Name: </b>'.$first_name.'</li>
<li><b>Last Name: </b>'.$last_name.'</li>
<li><b>Email: </b>'.$email.'</li>
<li><b>Birthdate: </b>'.$birthdate.'</li>
<li><b>Occupation: </b>'.$occupation.'</li>
';
?>
</ul>
<p><?php echo $details; ?></p>
<p>Return to our <a href="people.php">people page!</a></p>

</main>

<aside>
<h3>Aside information that will disaply person's image!</h3>

<figure>
<img src="./images/people<?php echo $id;?>.jpeg" alt="<?php echo $first_name;?>">
<figcaption>
    <?php echo $blurb ;?>
</figcaption>

</figure>
</aside>

</div> 
<!-- end wrapper -->


<?php 

// we are going to release the server

@mysqli_free_result($result);

// closing the connection
@mysqli_close($iConn);

include('./includes/footer.php');