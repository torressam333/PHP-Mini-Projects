<?php


function fToC ($fTemp)
{
    $cTemp = (5/9)*($fTemp-32);
    return ($cTemp);
}
function cToF ($cTemp)
{
    $fTemp = (9/5)*$cTemp+32;
    return ($fTemp);
}




?>