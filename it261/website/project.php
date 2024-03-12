<?php 
include('config.php');
include('./includes/header.php'); ?>


<div id="wrapper">

<div id="hero">
<!-- <img src="images/twelve.jpeg" alt="Twelve is greater than 3"> -->

<!-- </div> -->
 <!-- end hero -->


<!-- <main>
<h1>PROJECT PAGE</h1>

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

</div> -->




<!-- start camera file -->

<main>
<h1>Welcome to our Camera Page</h1>

<?php
$sql = 'SELECT * FROM cameras';

// now we need to connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//whn everything is connected. assingn everyhting to result (sql table)
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we have a row, which translates into an array
// if our eresult is greater than 0, we are happy


if(mysqli_num_rows($result) > 0) {

    // we are going to add a while loop
while($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>Information about: '.$row['camera_brand'].' '.$row['cambera_name'].'</h2>

<ul>

<li>Lens:  '.$row['lens'].'</li>
<li>Rating:  '.$row['rating'].'</li>


</ul>

<p>For more information about the '.$row['camera_brand'].' '.$row['camera_name'].', click <a href="camera-view.php?id='.$row['camera_id'].'">here</a></p>



    
    ';


}// end while loop



} else {
echo 'Nobody home!!!';

}

// we are going to release the server

@mysqli_free_result($result);

// closing the connection
@mysqli_close($iConn);
?>


 </main>
<!-- 
 <aside>

</aside> -->

</div>
<!-- end wrapper -->
<!-- // end camera file -->
</div>


<?php 

include('includes/footer.php');
?>
