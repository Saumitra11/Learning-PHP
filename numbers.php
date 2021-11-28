<?php
    // $radius = 25;
    // $pi = 3.14;
    // echo $radius*$pi**2 . '<br>';
    // echo ++$pi . '<br>';
    // echo floor($pi) . '<br>';
    // echo ceil($pi) . '<br>';
    // echo pi() . '<br>';
    
    // Indexed Arrays
    $peopleOne = ['Saumitra', 'Piyush', 'Shivam'];
    $peopleTwo = array('Maurya', 'Rishab');
    echo $peopleOne[0] . '<br>';
    echo $peopleTwo[1] . '<br>';
    $ages = [10, 20, 30, 40, 50];
    // echo print_r($ages) . '<br>';
    $ages[1] = 25;

    $ages[] = 60;

    echo print_r($ages) . '<br>';

    array_push($ages, 23);
    echo print_r($ages) . '<br>';

    echo count($ages) . '<br>';

    $friends = array_merge($peopleOne, $peopleTwo);
    echo print_r($friends) . '<br>';


    // Associative Arrays
    $realBallers = ['Gareth' => 'Bale', 'Cristiano' => 'Ronaldo', 'Sergio' => 'Ramos'];
    echo $realBallers['Gareth'] . '<br>';

    echo print_r($realBallers) . '<br>';

    $realBallers['Toni'] = 'Kroos';
    print_r($realBallers) . '<br>';
    echo '<br>';
    //Multidimensional Arrays
    $clubs = [
        ['ClubName' => 'Real Madrid', 'Captain' => 'Marcelo', 'Star' => 'Benzema', 'UCL' => 13],
        ['ClubName' => 'AC Milan', 'Captain' => 'Zlatan', 'Star' => 'Brahim', 'UCL' => 7],
        ['ClubName' => 'Bayern Munich', 'Captain' => 'Neuer', 'Star' => 'Lewandowski', 'UCL' => 6]
    ];
    print_r($clubs[0]['Captain']);
    echo '<br>';

    array_push($clubs, ['ClubName' => 'Liverpool', 'Captain' => 'Henderson', 'Star' => 'Salah', 'UCL' => 6]);
    print_r($clubs);
    echo '<br>';

    $popped = array_pop($clubs);

    print_r($popped);
    echo '<br>';

    print_r($clubs);
    echo '<br>';
?>