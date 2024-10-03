<?php

class greet{

    var $name = "testing";
    var $student = array("aditya", "levin", "habibie", "fj", "tino");

}


require_once 'variables.php';  

$person2 = new greet();

$person = new Variable();

echo "hello, {$person->getName()}";
echo "<br>";
echo "hello, {$person2->name}";
echo "<br>";

$students = $person2->student;
for ($i = 0; $i < count($students); $i++) {
    echo "{$students[$i]}<br>"; 
}
