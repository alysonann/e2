<?php
require "Catalog.php";
$catalog = new Catalog("products.json");
#var_dump(gettype($catalog));
$product = $catalog->getById(9);
#var_dump($catalog->products);
#var_dump($catalog->getAll());
#var_dump($catalog->searchByName("ee"));

$example = (5 > 10) ? 9 : 10;
#var_dump($example);



function vowelCount($word)
{
    #$vowels = ["a,","e","i","o","u"];


    $results=str_split($word);

    // foreach ($results as $loopdata) {
    //   echo "My name is ".$loopdata."<br>";
    //}

    if (in_array("a", $results)) {
        echo "Got Irix";
    }
    #return $results;
}



$word = vowelCount("alyson");
#var_dump(vowelCount("word"));
#var_dump($word);