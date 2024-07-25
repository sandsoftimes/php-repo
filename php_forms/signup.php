<?php 
echo "signup page";
if($_POST){
    print_r($_POST);
    echo "<br>";
    echo "User Name is: ".$_POST['user_name']."<br>";
    echo "User Password is: ".$_POST['user_password']."<br>";
    echo "User Email is: ".$_POST['user_email']."<br>";
}
?>