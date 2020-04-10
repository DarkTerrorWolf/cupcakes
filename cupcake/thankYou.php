<?php
var_dump($_POST);
/*
 * array(1) {
 * ["name"]=> Cust name
 *
 * string(0) ""cake types }
 *
 */
$valid=true;

$name = $_POST["name"];
$cake = $_POST["flavor"];
echo $cake;
if($name ==""){
    $valid = false;
    echo"Please enter a name";
}
if($cake == ""){
    $valid = false;
    echo"Please go back and choose a cupcake type";
}

if($valid == true){
  Echo "<h1>Thank You </h1>";

}