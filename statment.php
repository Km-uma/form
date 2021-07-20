<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: salmon;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>this is container</h1>
        <p>your party status is here</p>
        <?php
        $age =7;
        if($age>18)
        {
            echo "you can go to party";
        }
        else if($age == 7)
        {
            echo "you are 7 year old";
        }
        else{
            echo "you cant go to the party";
        }

        ?>

    </div>
    <div class="container">
        <h2>loops in php</h2>
    <?php
    $lang = array("c", "angular", "nodejs", "js");
        $a =0;
        while ($a < count($lang)) {
            echo "<br>the value of a is ";
            echo $lang[$a];
            $a++;
        }

        echo "<br>";
        foreach($lang as $value)
        {
            echo "<br> the value is ";
            echo $value;
        }



        //function 
echo "<br>";
        function print5()
        {
            echo "printed by function 5";

        }
        print5();
        ?>
    </div>
</body>
</html>