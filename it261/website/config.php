<?php

ob_start(); // prevents header errors before reading the whole page!

define('DEBUG', 'TRUE'); // we want to see our errors

//include('credentials.php');
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));



include('credentials.php'); // for project file

 

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
} 



switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home Page of our Website Project';
    $body = 'home';
    break;

    case 'about.php':
    $title = 'About Page of our Website Project';
    $body = 'about inner';
    break;

    
    case 'daily.php':
    $title = 'Daily Page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php':
    $title = 'Camera Page of our Website Project';
    $body = 'project inner';
    break;

    case 'contact.php':
    $title = 'Contact Page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php':
    $title = 'Gallery Page of our Website Project';
    $body = 'gallery inner';
    break;

    case 'camera-view.php':
        $title = 'Camera Page of our Website Project';
        // $body = 'gallery inner';
        break;


}

// our navigational array!

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'


);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
    $my_return .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
    } else {
    $my_return .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
    
    }
    } // end foreach 
    return $my_return;
    
    
    }// end function

// this is beggining of the swith for hw 3!
if(isset($_GET['today'])) {
$today = $_GET['today'];

}else {
$today = date('l');

}

switch($today) {
    case 'Friday' :
    $actDay ='pink';
    $band = '<h2>On Friday we Listen to The Beatles!</h2>';
    $pic = 'theBeatles.jpeg';
    $alt = 'The Beatles';
    $content = '<p> Today we listen to: <b>I Will</b> by the Beatles. The Beatles recorded together for a little over seven years. Between October 1962 and May 1970, they released thirteen albums and a number of tracks issued on standalone singles. The catalogue created in that short period has sold more than that of any other group in history and its commercial success continues the world\'s best selling album during the first decade of the 21st century was a collection of The Beatles\' chart-toppping singles called 1. </p>';
    break;
    
    case 'Saturday' :
    $actDay = 'orange';
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


// my form's PHP



$first_name ='';
$last_name ='';
$email ='';
$gender = '';
$phone = '';
$comments = '';
$privacy = '';
$wines = '';
$regions = '';



$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$comments_err = '';
$privacy_err = '';
$wines_err = '';
$regions_err='';

// if server request method = post we will have php in between that if statement
if($_SERVER['REQUEST_METHOD'] == "POST") {
// if inputs are empty we will declare a statment else we will assign the $_POST to a varaible
// $wines = $_POST['wines']


if(empty($_POST['wines'])) {
// say something or do something
$wines_err = 'What... no wines?';

} else {
// defining the variable
$wines = $_POST['wines'];
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


if(empty($_POST['gender'])) {
// say something or do something
$gender_err = 'Please check your gender';

} else {
    // defining the variable
    $gender = $_POST['gender'];
}


if(empty($_POST['phone'])) {
// say something or do something
$phone_err = 'Please fill in your phone number';

} else {
// defining the variable
$phone = $_POST['phone'];
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

if($_POST['regions'] == NULL) {

    $regions_err = 'Please choose your region';
} else {
    $regions = $_POST['regions'];
}


function my_wines($wines) {
$my_return='';
if(!empty($_POST['wines'])) {
    $my_return = implode(', ' , $_POST['wines']);
}
return $my_return;
} // end  my_wines function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'kinggcharr@gmail.com';
$subject = 'Test email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.' '.PHP_EOL.'
Last Name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Wines: '.my_wines($wines).' '.PHP_EOL.'
Regions: '.$regions.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'

';

$headers = array(
    'From' => 'noreply@mystudentswa.com'

);

// we will be adding an if statement - that this email form will work only if all the fields are filled out

if(!empty(
    $first_name && $last_name && $email && $gender && $wines && $regions && $phone && $comments )) {

    mail($to, $subject, $body, $headers);
    header('Location:thx.php');
}

// dont forget, you must upload your form onto the server to recive an email


} // end isset
} // closing server request method


?>