<?php
$left = $_GET['accumulator'];
$right = $_GET['display'];

function calc($left, $right)
{
    $op = $right[0];
    $right = substr($right, 1);

    switch ($op) {
        case "add":
            return $left + $right;
        case "mul":
            return $left * $right;
        case "sub":
            return $left - $right;
        case "div":
            return $left / $right;
    }
}
