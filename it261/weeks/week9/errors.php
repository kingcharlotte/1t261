<?php
// our errors file that we will be using a foreach loop

// array_push - diff msgs for diff erros

// if we have errors we will dispaly them
if(count($errors) > 0) : ?>

<div class="errors">
<?php foreach($errors as $error) : ?>
<p>

<?php echo $error; ?>
</p>
<?php endforeach; ?>
</div>
<!-- end div -->

<?php endif ;?>

