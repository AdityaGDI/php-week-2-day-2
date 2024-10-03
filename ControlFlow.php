<?php
require_once 'variables.php';  

$person = new Variable("Aditya", 20, "male", 3.77, true, "2004-06-25"); 

echo "Name: " . $person->getName();   
echo "<br>";
echo "Age: " . $person->getAge();    
echo "<br>";
echo "Sex: " . $person->getSex();
echo "<br>";
echo "GPA: " . $person->getGpa();
echo "<br>";
echo "Is Student: " . ($person->getIsStudent() ? "Yes" : "No");
echo "<br><br>";

echo $person->calculateAge();
echo "<br><br>";

if ($person->getAge() < 18) {
    echo "Anda masih remaja.";
} elseif ($person->getAge() >= 18 && $person->getAge() < 20) {
    echo "Anda sudah dewasa tetapi masih di bawah 20 tahun.";
} else {
    echo "Anda sudah dewasa.";
}
