<?php

include("./hello-world1.php");
for ($i=0;$i<10;$i++){
    include_once("./hello-world.php");
}
require("./hello-world1.php");

for($i=0;$i<10;$i++){
    require_once("./hello-world.php");
}
?>