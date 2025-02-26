<?php 
    echo "Hello world!<br>";
    $name ="Yuven\n";
    $email ="carldrak@gmail.com\n";
    $is_tall =true ."\n";
    $age =18 . "\n";
    $balance = 18.1 ."\n";

    echo $name. $email . $is_tall . $age . $balance;

    // math operators

    $x = 12;
    $y = 13;

    $sum = $x + $y;
    $product = $x * $y;
    $quotient = $x / $y;

    echo  "<br>The sum of " . $x . " and " . $y . " is: " . $sum;
    echo  "<br>The product of " . $x . " and " . $y . " is: " . $product;
    echo  "<br>The quotient of " . $x . " and " . $y . " is: " . $quotient;

    if($age>18){
        echo "<br>Kenzo is greater than 18";
    }
    else{
        echo "<br>Kenzo is less than 18";
    }

    $num = 3;

    if($num>=1){
        echo "<br>positive number";
    }
    else{
        echo "<br>negative number";
    }

    if($num/2){
        echo "<br>even number";
    }
    else{
        echo "<br>odd number";
    }
    // loops

    for($t=1; $t<5; $t++){
        echo  $t . "</br>";
    }
    // while loop
    $t = 1;
    while($t<10){
        echo $t . "</br>";
        $t++;
    }

    do{
        echo $t . "</br>";
        $t++;
    }
    while($t<=10);
    // for each loop
    $fruits = array("mango", "apple", "banana", "orange");
    foreach($fruits as $fruit){
        echo $fruit . "</br>";
    }
?>