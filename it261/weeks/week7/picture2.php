<?php

$people['Donald_Trump'] = array(
    'description' => 'Former President... present defendant.. <b>future resident of the "poky".</b>',
    'image1' => 'trump',
    'image2' => 'trumpp'
);

$people['Joe_Biden'] = array(
    'description' => 'Present from PA and <b>is running in \'24.</b>',
    'image1' => 'biden',
    'image2' => 'joeeee'
);

$people['Hillary_Clinton'] = array(
    'description' => 'Secretary from NY.',
    'image1' => 'clint',
    'image2' => 'hillar'
);

$people['Bernie_Sanders'] = array(
    'description' => 'Senator from VT.',
    'image1' => 'sande',
    'image2' => 'bernie'
);

$people['Elizabeth_Warren'] = array(
    'description' => 'Senator from MA.',
    'image1' => 'warre',
    'image2' => 'elizab'
);

$people['Kamala_Harris'] = array(
    'description' => 'Vice President from CA.',
    'image1' => 'harri',
    'image2' => 'kamala'
);

$people['Cory_Booker'] = array(
    'description' => 'Senator from NJ.',
    'image1' => 'booke',
    'image2' => 'correy'
);

$people['Andrew_Yang'] = array(
    'description' => 'Entrepreneur from NY.',
    'image1' => 'ayang',
    'image2' => 'yanggg'
);

$people['Pete_Buttigeig'] = array(
    'description' => 'Secretary from IN.',
    'image1' => 'butti',
    'image2' => 'peeete'
);

$people['Amy_Klobuchar'] = array(
    'description' => 'Senator from MN.',
    'image1' => 'klobu',
    'image2' => 'amyyyy'
);

$people['Julian_Castro'] = array(
    'description' => 'Housing/Urban from TX.',
    'image1' => 'castr',
    'image2' => 'julian'
);


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
// //  varaible   key              value
//  $name                       $image

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7, class exercise - 2 pictures</title>
    <style>

    table {
        border:1px solid red;
        border-collapse:collapse;

    }

    td {
        border:1px solid white;
    }

    tr {
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


<?php foreach ($people as $name => $data) : ?>
    <tr>
        <!-- First cell: Display the first image -->
        <td><img src="images/<?php echo $data['image1']; ?>.jpeg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
        
        <!-- Second cell: Display the candidate's name -->
        <td><?php echo str_replace('_', ' ', $name); ?></td>
        
        <!-- Third cell: Display the candidate's description -->
        <td><?php echo $data['description']; ?></td>
        
        <!-- Fourth cell: Display the second image -->
        <td><img src="images/<?php echo $data['image2']; ?>.jpeg" alt="<?php echo str_replace('_', ' ', $name) . '_image'; ?>"></td>
    </tr>
<?php endforeach; ?>


</table>
</body>
</html>
