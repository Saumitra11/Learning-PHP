<?php
    // constants
    define('NAME', 'RONALDO');
    // $name = 'Bale';
    // $age = 31;
    // $stringOne = "My name is ";
    // $stringTwo = "Messi <br>";

    // echo $stringOne . $stringTwo;
    $name = 'Neymar';
    // echo 'Hello my name is: ' . $name . '<br>';

    // echo "Ninja screamed \"whaaa\"";
    // echo $name[1];

    echo strlen($name) . '<br>';
    echo strtoupper($name) . " $name <br>";
    echo strtolower($name) . " $name <br>";
    echo str_replace('N', 'w', $name) . " $name <br>";
?>
<html>
    <head>
        <title>My First PHP file</title>
    </head>
    <body>
        <h1>Hello <?php echo NAME ?></h1>
    </body>
</html>