<?php
include('config.php');
include('./includes/header.php'); ?>

<!-- start picutres file -->

<?php

$people['Flamingo_at_Woodland_Park_Zoo'] = 'flamg  I took this photo years ago leaning over the railing at the zoo in Seattle!';
$people['New_York_from_the_Empire_State_Building'] = 'cityy I took this on film from atop the Empire State Building, it\'s a magical place where you can hear so many languages in one place from everyone visiting!';
$people['Big_Island\'s_Laupahoehoe_Point'] = 'waves There is a sad story behind this beautiful place. One of the most destructive tsunamis occured at Laupahoehoe point where I took this photo.';
$people['Flowers_with_a_prism_by_the_lens'] = 'flowe I took this photo many years ago through a prism so I would get a rainbow effect! This is a digital photo.';
$people['Monstera_Leaves'] = 'leafs I took this photo on a digital camera, hiking somewhere on the Big Island!';
$people['River_Fun'] = 'river Years ago my friend wanted me to take his senior photos but after awhile we got bored and just played in the river!';
$people['Flowers_in_Fremont'] = 'garde This is a local plant store in Fremont, real close to Theo\'s chocolate factory, and that dinosour bush!';
$people['Fun_in_a_river'] = 'shoes No regrets! Taken with a Nikon FG with 35mm Porta 400';
$people['New_York_outside_the_Met_Musuem'] = 'nyork If you walk directly out of the Met in New York you will see this street, likely with a hotdog stand somewhere close by.';
$people['Palms_in_Hawaii'] = 'palms I took this photo at Laupahoehoe point where a school in 1946 was sadly damaged causing the loss of 24 students and teachers.';
$people['Bamboo'] = 'bambo This photo is probably 8 years old now! Taken with a digital camera.';
//  varaible   key              value
//  $name                       $image


?> 

<main>
<h2 id="welcome">Welcome to our Gallery</h2>

</main>
<aside id="myAside">
      <h2>Here are some random photos I have taken over the years!</h2>
      <p>I have provided a small description of the photo as well.</p>
      <p>The cameras I used to capture these images are a Nikon FG (film), and a Nikon D5600 (Digital).</p>

</aside>

<!-- when you have an array you need a foreach -->
<table>

<?php foreach($people as $name => $image)     :?> 
<tr>
<!-- give me a substring on image start at zero and only count 5 letters, give me the game -->
<td><img src="images/<?php echo substr($image, 0, 5);?>.JPG" alt="<?php echo str_replace('_',' ', $name) ;?>"></td>
<!-- line below gets rid of underscore and replaces with a space -->
<td><?php echo str_replace('_',' ', $name) ;?></td>

<td><?php echo substr($image, 6, strlen($image));?></td>
</tr>

<?php endforeach ;?>

</table>

<!-- end gallery file -->

<?php

include('includes/footer.php'); ?>