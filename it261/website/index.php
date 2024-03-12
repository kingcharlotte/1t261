<?php
include('config.php');
include('./includes/header.php'); 
echo '<h1>HOME PAGE</h1>';
?>


<?php

echo '<h1>We are going to display our images using the random function</h1>';
echo '<h2>Everytime you refresh this page you will see two random images I have captured!</h2>';
echo '<p>Enjoy!</p>';

$photos[0] = 'BEACH';
$photos[1] = 'WOODS';
$photos[2] = 'FISH';
$photos[3] = 'SF';
$photos[4] = 'CARTS';

$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpeg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';

// rand function
function random_images($photos) {
$my_return = '';
$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpeg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';
return $my_return;
} // end function 

echo random_images($photos);

?>
<!-- footer -->
<?php
    include('./includes/footer.php'); ?>



