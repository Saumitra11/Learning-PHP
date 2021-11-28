<?php
    // function sayHello($name="Ronaldo"){
    //     echo 'Hello '. $name . '<br>';
    // }
    // sayHello();
    // sayHello('Bale');
    function formatProduct($product){
        return "{$product['name']} costs ₹{$product['price']} to buy <br>";
    }
    $products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];
    foreach($products as $product){
        $formatted = formatProduct($product);
        echo $formatted;
    }
?>