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
        "amount" => 5,
        "comment" => "don't forget to feed them"
    ],
    [
        "name" => "Bears",
        "amount" => 2,
        "comment" => "don't hug"
    ],
    [
        "name" => "Tigers",
        "amount" => 3,
    ],
    [
        "name" => "Penguins",
        "amount" => 25,
        "comment" => "one of the is ill"
    ],
    [
        "name" => "Elephants",
        "amount" => 15,
    ],
    [
        "name" => "Leopards",
        "amount" => 2,
        "comment" => "hire a zookeeper"
    ],
];











require "index.view.php";
