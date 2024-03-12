<?php
// this is my server page that will be communicating to the data base

// 0ur session - this is where we will start our session - it is a way to store information
// we could like into that is inputed via our registration from to land in ur databse

session_start();

include('config.php');

// we will eventually have a header include
// include('./includdes/header.php');
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// we wull ask if reg_user isset
// we will use new fucntion which is mysqli)real_esacpe_String

if(isset($_POST['reg_user'])) {

$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
$password2 = mysqli_real_escape_string($iConn, $_POST['password2']);


// what msg do we wanr to dispaly to enduser if they are notinputtig  info 

// if empty, we say
// introducing an array push function 

if(empty($first_name)) {
    array_push($errors, 'First name is required');
}

if(empty($last_name)) {
    array_push($errors, 'Last name is required');
}

if(empty($email)) {
    array_push($errors, 'Email is required');
}

if(empty($username)) {
    array_push($errors, 'Username is required');
}

if(empty($password1)) {
    array_push($errors, 'Password is required');
}

// ask if password1 = password2 


if($password1 !== $password2) {

    array_push($errors, 'Passwords do not match!');
}


// we now have to slect from table where username= username and pw = pw 


$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// we canonly have one unique email, or one unique username
// if there is a username in our databse then end userr cannot use thst username
// same if but with email

if($rows) {

if($rows['username'] === $username) {
    array_push($errors, 'Username already exists!');

}

if($rows['email'] === $email) {
    array_push($errors, 'Email already exists!');

}
} // test brace
// debug
// echo '**';
// echo (int)$errors;
// echo '**';
// debug


if((int)$errors == 0) {

$password = md5($password1);

// lociaclly we have to insertthe info into our databse 




$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

mysqli_query($iConn, $query);

$_SESSION['username'] = $username; 
$_SESSION['success'] = $success; 

header('Location:login.php');

} // end if errors
//} /// end big if statments


} // closed if isset reg_user

// debug
// echo $first_name;
// echo $last_name;
// echo $email;
// echo $username;
// echo $password1;
// echo $password2;

// debug

if(isset($_POST['login_user'])) {
    // our login page  will only have input fields - one for username and one for pw
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);


if(empty($username)) {
    array_push($errors, 'Username name is required');
}


if(empty($password)) {
    array_push($errors, 'Password name is required');
}

// we are coutning our erros, and if we have no erros - we will cotinue the same way

if(count($errors) == 0) {

$password = md5($password);

// we are going to query users table to make sure username and pw match
$query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
$results = mysqli_query($iConn, $query);

if(mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;
    // if above it sucessful we will be directed to index page

    header('Location:index.php');

} else {
    array_push($errors, 'Wrong username/password combo!!!');


}



} // end count errors
} // close if isset login _user