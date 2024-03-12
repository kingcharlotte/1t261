<?php     // adder-corrected.php

$title = "My Adder Assignment";

$error = ""; // Added: Variable to store error message

if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (empty($num1) || empty($num2)|| !is_numeric($num2) ) { // Added: Error message for non-numeric input
        $error = "Please fill out your numbers"; // Added: Error message for empty input
    } else {
        $myTotal = $num1 + $num2;
    }
}
?>
<html>
<head>
    <title>My Adder Assignment</title>
    <style>

    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <form action="" method="POST"> <!-- Fixed: Added method="POST" and fixed the opening form tag -->
        <label>Enter the first number:</label><input type="text" name="num1"><br> <!-- Fixed: Changed name="Num1" to name="num1" -->
        <label>Enter the second number:</label><input type="text" name="num2"><br> <!-- Fixed: Changed name="num2" to name="num2" -->
        <input type="submit" value="Add Em!!"> <!-- Fixed: Added missing > after "Add Em!!" -->
    </form>

    <?php
    if (isset($myTotal)) {
        echo '<h2>You added ' . $num1 . ' and ' . $num2 . '</h2>';
        echo '<p style="color:red;"> and the answer is <br>' . $myTotal . '!</p>';
        echo '<p><a href="">Reset page</a></p>';
    } elseif (!empty($error)) {
        echo '<p style="color:red;">' . $error . '</p>'; // Added: Display error message in red
    }
    ?>

</body>
</html>  <!-- Removed unnecessary symbols and misplaces php tag line 44 -->


<!-- Cbanges: -->
<!-- 

I noticed in your example site non-numerical values can be put in without throwing an exception so I added this becuase I beleive that is a behavioral error:

ln5: $error = ""; // Added: Variable to store error message
 lns 11-12   if (empty($num1) || empty($num2)|| !is_numeric($num2) ) { // Added: Error message for non-numeric input
        $error = "Please fill out your numbers"; // Added: Error message for empty input


ln 27     
<form action="" method="POST"> Fixed: Added method="POST" and fixed the opening form tag 


ln 30 
<input type="submit" value="Add Em!!">  Fixed: Added missing > after "Add Em!!" 

ln 39
 echo '<p style="color:red;">' . $error . '</p>'; // Added: Display error message in red

ln 44
Removed unnecessary symbols and misplaces php tag

I also moved some of the php around so that the order in which headers were displayed would match your example site
-->


