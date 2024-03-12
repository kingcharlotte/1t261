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




$people2['_Trump_'] = '... present defendant... future resident of the "poky".';
$people2['_Biden_'] = 'and will probably run in \'24.';
$people2['_Clinton_'] = '.';
$people2['_Sanders_'] = '.';
$people2['_Warren_'] = '.';
$people2['_Harris_'] = '.';
$people2['_Booker_'] = '.';
$people2['_Yang_'] = '.';
$people2['_Buttigieg_'] = '.';
$people2['_Klobuchar_'] = '.';
$people2['_Castro_'] = '.';
//  varaible   key              value
//  $name2                       $image2


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
        border:1px solid red;

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
<!-- line below displays thier names only from first set of images -->
<td><?php echo substr($image, 6, -1);?></td>

<!-- line below should display the other images in the array -->





</tr> 


<?php endforeach ;?>


<!-- line below should display the other images in the array -->
<?php foreach($people2 as $name2 => $image2)     :?> 
<tr>
<td><img src="images/<?php echo substr($image2, 0, 6);?>.jpeg" alt="<?php ;?>"></td>
<!-- line below displays thier names only from first set of images -->
<td><?php echo substr($image2, 0, strlen($image2));?></td>
</tr>
<?php endforeach ;?>



</table>
</body>
</html>
