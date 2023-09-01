<h2> Home Work-2 </h2>
<h3> Date: 02/09/2023 </h3>
<br>

<?php
echo "<h3> Compare Two Number </h3>";
$num1= 40;
$num2= 60;


if($num1 < $num2){
    echo "Num2 Greater Than Num1";
}else{
    echo "Wrong Number";
}

echo "<h3> Equelity Check </h3>";
$number= 40;

if($number == 39){
    echo "Right Number";
}else{
    echo "Didn't Match Number";
}

echo "<h3> Conditon Check </h3>";
$mature= 18;

if($mature >= 18){
    echo "You Are Selected";
}else{
    echo "You Are Fired";
}

echo "<h3> Numaric Number Locate </h3>";
$numaric= 5786;

if(is_numeric($numaric)){
    echo "Valid Number";
}else{
    echo "Invalid Number";
}

echo "<h3> Alphabet Chek </h3>";
$dataType= 'abcdefgh';

if(ctype_alpha($dataType)){
    echo "This is Right";
}else{
    echo "Wrong Data";
}

echo "<h3> Function Value </h3>";
function data($value){
    if(ctype_alpha($value)){
        echo "It's Right Value";
    }else{
        echo "Wrong Value";
    }
}

data('abbasalirakib'); echo "<br>";
data(123688);


echo "<h3> Logical Operator Condition </h3>";
$f1= 250;
$f2= 300;
$f3= 295;

// Check- $f1>$f2
// Check- $f1>$f3

// Check2- $f2>$f1
// Check- $f2>$f3

// $f3 is greater

if($f1 > $f2 && $f1>$f3){
    echo "F1 is Bigger";
} elseif($f2 > $f1 && $f2>$f3 ){
    echo "F2 is Bigger";
}else{
    echo "F3 is Greater";
}


echo "<h3> Even And Odd Number Find </h3>";
$n1= 30;

if($n1 % 3 == 0){
    echo "$n1 is Even Number";
}elseif($n1 % 3 == 1){
    echo "$n1 is Odd Numbe";
}else{
    echo "$n1 is Invalid Number";
}


echo "<h3> Authentication System </h3>";
function auth($userEmail, $userPass){
    // Database Entry
    $demail= "aarakib.gamail.com";
    $dpass= "12356";
    // Data End
    if ($userEmail == $demail && $userPass == $dpass){
        echo "Successfully Loged In";
    }else{
        echo "Wrong Information";
    }
}

auth('aa.gamail.com', 12356); echo "<br>";
auth('aarakib.gamail.com', 356); echo "<br>";
auth('aarakib.gamail.com',12356);


echo "<h3> Garade Calculation </h3>";

$gMark= 90;

if($gMark >= 80 && $gMark <= 100){
    echo "A+";
}elseif($gMark >= 70 && $gMark < 80){
    echo "A";
}else{
    echo "Invalid Marks";
}

