<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my Portfolio</h1>
    <h1>server programming language php</h1>
    <?php
    echo "hello php this code is printed by php";

    ?>
    <?php
    define('Pi', 3.14);
    echo "hello php again";

   echo "<br>";

    //operators in php
    //arithmetic operators, assignment, increment, logical
     $var1 = 23;
     $var2 =23;
    echo "the value of var1+var2 is ";
   
    echo $var1 + $var2;
    echo "<br>";
    echo "the value of var1+var2 is ";
    
    echo $var1 - $var2;
    echo "<br>";
    echo "the value of var1+var2 is ";
    
    echo $var1 * $var2;
    echo "<br>";
    echo "the value of var1+var2 is ";
    
    echo $var1 / $var2;

    echo "<br>";
    echo " <h1>this is boolean</h1>";
    echo "<br>";
    echo "the value of 1==4 is ";
    echo var_dump(1==4);

    echo "<br>";
    echo $var1++;
    echo "<br>";
    echo $var1--;
    echo "<br>";

    echo ++$var1;
    echo "<br>";
    echo --$var1;

    echo "<br>";
    echo "logic operators";
    echo "<br>";
    $var3 = (true and true);
    echo $var3;
    echo "<br>";
 //datatypes

 //string, integer, float, boolean, array, object
     $var22 = "this is string";
     echo var_dump($var22);


     echo "<br>";
     echo "constant in php";
     echo "<br>";
     echo Pi;

     

    

    


    
    ?>
</body>
</html>