<?php
setcookie("fruit","apple",time()+(86400));
setcookie("color","red",time()+(86400));

if(isset($_COOKIE['fruit'])){
    echo "current cookie is ".$_COOKIE['fruit'];
}
else{
    echo "no fruit set";
}
echo "<br>";
if(isset($_COOKIE['color'])){
    echo "current cookie is ". $_COOKIE['color'];
}
else{
    echo "no color set";
}
?>