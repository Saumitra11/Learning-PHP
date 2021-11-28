<?php 
    // for($i=1; $i<=5; $i++){
    //     echo 'Hello' . '<br>';
    // }
    $peopleOne = ['Saumitra', 'Piyush', 'Shivam'];
    $peopleTwo = array('Maurya', 'Rishab');
    $friends = array_merge($peopleOne, $peopleTwo);
    // for($i=0; $i<count($friends); $i++){
    //     echo $friends[$i] . '<br>';
    // }
    // foreach($friends as $friend){
    //     echo $friend . '<br>';
    // }
	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];
    // foreach($products as $product){
    //     echo $product['name'] . ' - ' . $product['price'] . '<br>';
    // }
    // $i = 0;
    // while($i<count($products)){
    //     echo $products[$i]['name'];
    //     echo '<br>';
    //     $i++;
    // }



?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            <?php 
                foreach($products as $product) {?> 
                <h3>
                    <?php 
                        echo $product['name'] . '<br>';
                    ?>
                </h3>
                <p>
                    <?php
                        echo $product['price'] . '<br>';
                    ?>
                </p>
                
            <?php } ?>
        
        </ul>
    </body>
</html>