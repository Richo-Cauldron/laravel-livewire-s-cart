<?php

/**
 * formatting integer as a floating poin
 * $number/100 -> factory $price >100<5000 
 */
if (! function_exists('int_to_decimal')) {
    function int_to_decimal($number)
    {
        return number_format($number/100, 2, );
    }
}