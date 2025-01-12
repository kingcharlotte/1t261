<?php
include('config.php');
include('./includes/header.php'); ?>

<?php


echo '<h1>DAILY PAGE</h1>';

// class coffee exercise 
// if today is Friday, it will be pumkin latte day
// INTRODUCING the isset() function 
// then we will introduce our first GLOBAL variable 
// our switch 


// starting the switch 
// if $GET['today'] is set, $today, then all is well, 
// but it is not set therefore the else is the day!

// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET


// what is the isset function - is asking if something has been set

// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';

// } else {
//     echo 'Variable has not been set!'; 
// }

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT';
// }

// Initialize variables with default values
// $coffee = '';
// $pic = '';
// $alt = '';
// $content = ''; 

// setting a timezone otherwise I beleive it defaults to EST and we want PST
date_default_timezone_set("America/Los_Angeles");
// echo date_default_timezone_get();


if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    // assigns the day of the week
    $today = date('l');
}

switch($today) {
case 'Friday' :
$actDay = 'pink';
$band = '<h2>On Friday we Listen to The Beatles!</h2>';
$pic = 'theBeatles.jpeg';
$alt = 'The Beatles';
$content = '<p> Today we listen to: <b>I Will</b> by the Beatles. The Beatles recorded together for a little over seven years. Between October 1962 and May 1970, they released thirteen albums and a number of tracks issued on standalone singles. The catalogue created in that short period has sold more than that of any other group in history and its commercial success continues the world\'s best selling album during the first decade of the 21st century was a collection of The Beatles\' chart-toppping singles called 1. </p>';
break;

case 'Saturday' :
$band = '<h2>On Saturday we Listen to Lijadu Sisters!</h2>';
$pic = 'Lijadusisters.jpeg';
$alt = 'Lijadu Sisters';
$content = '<p> Today we will listen to: <b>Come on Home</b> by Lijadu Sisters. Twins Taiwo and Kehinde were born in Jos, in northern Nigeria. In Yoruba, "Taiwo" means "the first twin to taste the world", and "Kehinde" "the second-born of the twins". One of the most popular acts in the Nigerian music scene of the 1970s! </p>';
break;

case 'Sunday':
$band = '<h2>On Sunday we Listen to The Beach Boys</h2>';
$pic = 'TheBeachBoys.jpeg';
$alt = 'The Beach Boys';
$content = '<p> Today we will listen to: <b>Girl Don\'t Tell Me</b> by The Beach Boys. The Beach Boys have been strongly engrained in American History for six decades. Founded in Hawthorne, California, The Beach Boys were originally comprised of brothers: Brain Wilson, Carl Wilson, & Dennis Wilson, their cousin Mike Love and friend Al Jardine. The Beach Boys sold 100 million records worldwide! 
</p>';
break;

case 'Monday':
$band = '<h2>On Monday we Listen to Blondie!</h2>';
$pic = 'blondie.jpeg';
$alt = 'Blondie';
$content = '<p>Today we will listen to: <b>Atomic</b> by Blondie! Blondie is perhaps the quintessential new wave band: an art-pop group who made the leap from punk to the Top 40. David Bowie and Iggy Pop were early supporters of Blondie, offering the band the opening slot for Pop\'s 1977 tour! </p>';
break;

case 'Tuesday':
$band = '<h2>On Tuesday we Listen to Elvis Presley!</h2>';
$pic = 'ElvisPresley.jpeg';
$alt = 'Elvis Presley';
$content = '<p>Today we will listen to: <b>I\'ll Never Let You Go (Little Darling)</b> Elvis Presley changed the course of popular music in the 20th century. Born to a poor Mississippi family in the heart of the Depression, Presely had moved to Memphis by his teens, where he absorbed the vibrant melting pot of Black Southern music in the form of blues, country, bluegrass, and gospel. His first single for the RCA label in 1956 was "Heartbreak Hotel", which rose to number one and, aided by some national television appearances, helped make him an instant superstar. </p>';
break;

case 'Wednesday':
$band = '<h2>On Wednesday we Listen to Joao Gilberto</h2>';
$pic = 'JoaoGilberto.jpeg';
$alt = 'Joao Gilberto';
$content = '<p>Today we will listen to: <b>Izaura</b> By Joao Gilberto. When talking about bossa nova, perhaps the signature pop music sound of Brazil, the first name that comes to mind is that of Antonio Carlos Jobim. With songs like "The Girl from Ipanema" and "Desafinado", Jobim pretty much set the standard for the creation of the bossa nova in the mid-\'50s. </p>';
break;

case 'Thursday':
    $band = '<h2>On Thursday we listen to Naked Eyes</h2>';
    $pic = 'NakedEyes.jpeg';
    $alt = 'Naked Eyes';
    $content = '<p> Today we will listen to: <b>When the Lights Go out</b> by Naked Eyes. A key presence in the synth pop movement of the early \'80s, Naked Eyes formed in Britian in 1981. Comprised of former schoolmates Pete Bryne (vocals) and Rob Fisher (keyboards), the duo debuted in March 1983 with the LP Burning Bridges. </p>';
    break;
    

    }

?>


<div id="wrapperDaily">
<main>
<h1>A song a day, just for you!</h1>
<?php
echo $band;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>

<h2>Check out our daily songs!</h2>
<ul>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>


</main>
</div>
<!-- end wrapper -->

<?php
    include('./includes/footer.php'); ?>