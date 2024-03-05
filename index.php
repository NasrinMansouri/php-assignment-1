<?php

// zookeepers details
$zookeepers = [
    [
        "name" => "Jean Nys",
        "experience" => 7,
        "specialization" => ["Lions", "Bears", "Tigers"]
    ],
    [
        "name" => "Sarah Nys",
        "experience" => 20,
        "specialization" => ["Penguins", "Bears", "Tigers"]
    ],
    [
        "name" => "Herald Overbeeck",
        "experience" => 15,
        "specialization" => ["Penguins", "Elephants", "Fishes"]
    ],
];


//  animals details

$animals = [
    [
        "name" => "Lions",
        "Amount" => 5,
        "comment" => "don't forget to feed them"
    ],
    [
        "name" => "Bears",
        "Amount" => 2,
        "comment" => "don't hug"
    ],
    [
        "name" => "Tigers",
        "Amount" => 3,
    ],
    [
        "name" => "Penguins",
        "Amount" => 25,
        "comment" => "one of the is ill"
    ],
    [
        "name" => "Elephants",
        "Amount" => 15,
    ],
    [
        "name" => "Leopards",
        "Amount" => 2,
        "comment" => "hire a zookeeper"
    ],
];











require "index.view.php";
