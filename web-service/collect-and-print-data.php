<?php

function collectArray($type){
    global $products;

    $collect = [];

    if(count($products) > 0){
        foreach($products as $item){
            if($item["type"] === $type){
                array_push($collect, $item);
            }
        }

        if(count($collect) > 0){
            return $collect;
        }
    }

    return [];
}

function printHTML(){
    global $products;

    if(isset($_GET["type"])){
        $collectedData = collectArray($_GET["type"]);
    } else {
        $collectedData = $products;
    }

    if(count($collectedData) > 0){

        foreach($collectedData as $item){

            echo '
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <figure class="product-card">
                    <img src="'.$item["img"].'" alt="'.$item["name"].'">
                    <figcaption>
                        <ul>
                            <li>'.$item["name"].'</li>
                            <li>$'.$item["price"].'</li>
                        </ul>
                    </figcaption>
                </figure>
            </div>';

        }

    } else {
        echo "<p>No such product in our store</p>";
    }
}