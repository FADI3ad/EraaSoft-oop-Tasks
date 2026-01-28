<?php

require_once "Validation.php";








$validator = new Validation();

$validator->validate([
    "name" => ["required" , "min:3"],
    "email" => ["required","email"],
    "password" => ["required","min:6","max:10"],
]);

if (empty($validator->getErrors())) {
    echo "<pre>";
    print_r($validator->getErrors());
    echo "</pre>";
} else {
    echo "<pre>";
    print_r($validator->getErrors());
    echo "</pre>";
}
