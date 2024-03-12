<?php

// understanding the logic!!
// 1 ruble = 0.017 dollars




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic Exercise</title>

    <style>
* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

#wrapper {
    width:500px;
    margin:30px auto;

}

table {
    border:1px solid orange;
    border-collaspse:collapse;
    width:500px;
}

th, td {
    border:1px solid orange;
}
h1, h2, h3 {
    text-align:center;

}

    </style>

</head>
<body>
<div id="wrapper">
<h1>After our world-wind travels, we have returned home with the following currencies</h1>
<ul>
<li>Rubles</li>
<li>Pound sterling</li>
<li>Canadian Dollar</li>
<li>Euros</li>
<li>Yens</li>
</ul>

<h2>What ever shall we do?</h2>

<table>
<tr>
<th colspan="2">Currency</th>
<th>Dollars</th>

</tr>
<tr>
<th>Rubles</th>
<td><?php   ?></td>
<td><?php  ?></td>
</tr>
<tr>
<th>Pround Sterling</th>
<td><?php   ?></td>
<td><?php  ?></td>
</tr>
<tr>
<th>Canadian Dollars</th>
<td><?php   ?></td>
<td><?php  ?></td>
</tr>
<tr>
<th>Euros</th>
<td><?php   ?></td>
<td><?php  ?></td>
</tr>
<tr>
<th>Yens</th>
<td><?php   ?></td>
<td><?php  ?></td>
</tr>

</table>

</div>
<!-- end wrapper -->
</body>
</html>