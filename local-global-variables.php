<?php
$name="anil";
function getName(){
    $name="peter";
    global $name;
    $name="peter";
    echo "local var: $name";
}


getName();
echo "<br/>";
echo $name;
?>

<?php
$name="anil";
function test(){
    $name="peter";
    echo $name;

    function innerTest(){
        global $name;
        echo $name;
    }
}

test();
echo "<br>/";
innerTest();
echo "<br>/";
echo $name;;
?>
