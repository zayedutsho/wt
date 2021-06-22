<?php
 error_reporting(0);
 
$Q1=$_POST['Q1'];
$Q2=$_POST['Q2'];
$Q3=$_POST['Q3'];
  
echo "You have answerd"."<br>";

if ($Q1=='Dhaka') {
  echo"1.correct ans"."<br>";
}
else {
  echo"1.Incorrect";
}


if ($Q2=='Islamabad') {
  echo"2.correct ans"."<br>";
}
else {
  echo"2.Incorrect"."<br>";
}


if ($Q3=='Delhi') {
  echo"3.correct ans"."<br>";
}
else {
  echo"3.Incorrect";
}





?>