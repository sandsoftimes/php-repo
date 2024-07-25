<?php
$users=array("anil","sam","peter","bruce");
?>

<?php
$users=["anil","sam","peter","bruce","john"];
?>

<?php
$users=["anil","sam","peter","bruce","john"];
echo $users[0]; //array start from zero
echo "<br>";
echo $users[1];
echo "<br>";
echo $users[2];
echo "<br>";
echo $users[3];
echo "<br>";
?>

<?php
$users=["anil","sam","peter","bruce","john"];
for ($user=0;$user<count($users);$user++){
    echo "<h1 style='color=blue'>".$users[user]"<h1/>";
    echo "<br>/";
}
?>