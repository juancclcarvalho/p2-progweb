<?php
header("Content-Type:application/json");
require "data.php";

if (!empty($_GET['currency-name'])) {
    $currency_name = $_GET['currency-name'];
    $currency_name = strtoupper($currency_name);
    $currency_data = get_currency($currency_name);

    if (empty($currency_data)) {
        response(200, "Moeda nao encontrada", NULL);
    } else {
        response(200, "Moeda encontrada", $currency_data);
    }
} else {
    response(400, "Requisicao invalida", NULL);
}

function response($status, $status_message, $data)
{
    header("HTTP/1.1 " . $status);
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
    $json_response = json_encode($response);
    echo $json_response;
}
