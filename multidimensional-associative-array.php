<?php
$users=[
    ["name"=>"anil","age"=>"29","city"=>"noida"],
    ["name"=>"sam","age"=>"30","city"=>"guargaon"],
    ["name"=>"bhasker","age"=>"32","city"=>"delhi"],
    ["name"=>"peter","age"=>"34","city"=>"noida"],
];

foreach($users as $user){
    foreach($user as $key=>$item){
        echo "$key is $item";
        echo "<br/>";
    }
    echo "<br/>"; echo "<br/>";
}
?>