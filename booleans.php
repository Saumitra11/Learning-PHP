<?php
    // echo true . '<br>';
    // echo false . '<br>';
    // echo false . '<br>';
    // $price = -10;
    // if ($price < 10){
    //     echo 'Poor Fuck' . '<br>';
    // } else if($price < 30){
    //     echo 'Normal Fuck' . '<br>';
    // } else {
    //     echo 'Rich Fuck' . '<br>';
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
    //     // if($product['price'] < 15 && $product['price'] > 2){
    //     //     echo $product['name'] . '<br>';
    //     // }
    //     if($product['price'] > 20 || $product['price'] < 10){
    //         echo $product['name'] . '<br>';
    //     }
    // }
    foreach($products as $product){
        if($product['name'] == 'lightning bolt'){
            break;
        }
        if($product['price'] > 15){
            continue;
        }
        echo $product['name'] . '<br>';
    }
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <ul>
                <!-- <?php
                    foreach($products as $product){
                ?>
                <?php
                    if($product['price'] > 15){ ?>
                    <li>
                        <?php
                            echo $product['name']; 
                        ?>
                    </li>
                    <?php }?>
                <?php }?> -->
            </ul>
        </div>
    </body>
</html>