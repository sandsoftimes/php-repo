<?php
$x=20;
echo "before condition <br/>";

if($x==20){
    goto jump
}
$name="SANDY <br/>";
echo $name;

jump:
echo "statment is jumped on line number 15";

?>


<?php

for($i=0;$i<10;$i++){
    echo "$i <br>";  
    if($i==5){
        goto outsideLoop;
}  
}

outsideLoop:
echo "loop is break";
?>

<?php

outsideLoop:
echo "loop is break";

for($i=0;$i<10;$i++){
    echo "$i <br>";  
    if($i==5){
        goto outsideLoop;
            }  
                    }

?>