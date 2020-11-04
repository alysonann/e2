<?php

class Catalog
{
    #Properties
    public $products = [];
    public $name;
    public $name1 = "Jane";
    public $names =["Jane","Avi","Jamal","Natalia"];
    #public $names2 = file_get_contents("names.json");

    #Methods
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        $this->products = json_decode($json, true);
        # var_dump($products);
    }

    public function getAll()
    {
        return $this->products;
    }

    public function getById(int $id)
    {
        #var_dump("You invoked get by Id with the id of ". $id);
        return $this->products[$id];
    }

    public function searchByName(string $term)
    {
        $results = [];
        foreach ($this->products as $product) {
            if (strstr($product["name"], $term)) {
                $results[]=$product;
            }
        }
        return $results;
    }
}