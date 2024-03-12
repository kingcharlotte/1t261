<?php

// do not call out the header include yet!!
// the following information is abov the doctype so we cannot echo anyhting
include('config.php');
// $title = 'Project Page of our Website Project';



// is get set???

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: project.php');
}
 
$sql = 'SELECT * FROM cameras WHERE camera_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//whn everything is connected. assingn everyhting to result (sql table)
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
$camera_name = stripslashes($row['camera_name']);
$camera_brand = stripslashes($row['camera_brand']);
$rating = stripslashes($row['rating']);
$details = stripslashes($row['details']);
$lens = stripslashes($row['lens']);

// will i add a column?

$feedback = '';

    } // close while loop

} else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?> 

<main>
<h1>Welcome to our Camera View Page</h1>
<h2>Introducing: <?php echo $camera_name;?></h2>

<ul>
<?php
echo '
<li><b>Camera Name: </b>'.$camera_name.'</li>
<li><b>Cambera Brand: </b>'.$camera_brand.'</li>
<li><b>Rating: </b>'.$rating.'</li>
<li><b>Lens: </b>'.$lens.'</li>
';
?>
</ul>
<p><?php echo $details; ?></p>
<p>Return to our <a href="project.php">camera page!</a></p>

</main>

<aside>
<h3>Aside information that will disaply person's image!</h3>

<figure>
<img src="./images/camera<?php echo $id;?>.jpeg" alt="<?php echo $camera_name;?>">
<figcaption>
    <?php echo $camera_brand ;?>
</figcaption>

</figure>
</aside>

<!-- end wrapper -->


<?php 

// we are going to release the server

@mysqli_free_result($result);

// closing the connection
@mysqli_close($iConn);

include('./includes/footer.php');
?>