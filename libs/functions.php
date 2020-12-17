<?php

function debug($var, $die = false)
{
    echo "<pre>" . print_r($var, true) . "</pre>";

    if($die) {
        die;
    }
}