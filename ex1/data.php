<?php

function get_currency($name)
{
    $str_currencies = file_get_contents("database.json");
    $json_currencies = json_decode($str_currencies);

    foreach ($json_currencies as $currency => $currency_data) {
        if ($currency == $name) {
            return $currency_data;
            break;
        }
    }
}
