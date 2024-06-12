<?php
echo "<h1>php with html</h1>";
echo "<h3 style='color:blue'>php with html</h3>";
?>

<!-- HTML in php -->
<?php
$name="SANDY";
$color='blue';
echo "<h1 style='color:orange'>$name</h1>";
?>


<!-- php in HTML -->



<h2 style='color:green'><?php echo "this is h2 tag<br>";?></h2>
<h2 style='color:<?php echo $color;?>'><?php echo "this is h2 tag<br>";?></h2>
<h2>Here <?php echo "this is h2 tag "; echo $name;  ?></h2>
<h2 style='color:<?php echo $color;?>'>Here is another tag <br> <?php echo "<br> and the color is "; echo $color;?></h2>
