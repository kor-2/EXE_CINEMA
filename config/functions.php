<?php

function formaterDateFr(string $date)
{
    $d = new DateTime($date);
    $day = datefmt_create('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    return datefmt_format($day, $d);
}
