<?php

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
//  varaible   key              value
//  $name                       $image

// $people['Trump'] = 'trumpp';
// $people['Biden'] = 'joeeee';
// $people['Clinton'] = 'hillar';
// $people['Sanders'] = 'bernie';
// $people['Warren'] = 'elizab';
// $people['Harris'] = 'kamala';
// $people['Booker'] = 'correy';
// $people['Yang'] = 'yanggg';
// $people['Buttigieg'] = 'peeete';
// $people['Klobuchar'] = 'amyyyy';
// $people['Castro'] = 'julian';
//  varaible   key              value
//  $name                       $image

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7, class exercise - pictures</title>
    <style>

    table {
        border:1px solid red;
        border-collapse:collapse;

    }

    td {
        border:1px solid white;

    }


    #welcome {
        color:red;
    }

    
    #myAside {
    float: right;
    padding: 10px; /* Add padding for better appearance */
    color: #bc9e82;

 }

 #welcome, #myAside {
    display: inline-block;
    vertical-align: middle;
}

    </style>

</head>
<body>
<h2 id="welcome">Welcome to our Gallery</h2>
<aside id="myAside">
      <h2>HERE IS MY ASIDE</h2>
</aside>

<!-- when you have an array you need a foreach -->
<table>

<?php foreach($people as $name => $image)     :?> 
<tr>
<!-- give me a substring on image start at zero and only count 5 letters, give me the game -->
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_',' ', $name) ;?>"></td>
<!-- line below gets rid of underscore and replaces with a space -->
<td><?php echo str_replace('_',' ', $name) ;?></td>

<td><?php echo substr($image, 6, -1);?></td>



</tr>
<?php endforeach ;?>

</table>
</body>
</html>
