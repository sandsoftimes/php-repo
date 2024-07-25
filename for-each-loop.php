<?php
$users=["anil","peter","bruce","tony"];
foreach($users as $x){
    echo $x;
    echo "<br/>";
}
?>

<?php
$users=["anil","peter","bruce","tony","sam","bhaskar"];
foreach($users as $x){
    if ($x=="peter"){
        continue;
    }
    echo "<h3>".$x."<h3>";
    if ($x=="bruce"){
        break;
    }
}
?>

//for loop complicated

//use break to break the loop


//another syntax

<?php
foreach($users as $x):
    echo $x;
    echo "<br>"
endforeach
?>
