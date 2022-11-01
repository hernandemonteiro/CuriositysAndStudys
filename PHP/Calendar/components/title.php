<?php
date_default_timezone_set('America/Sao_Paulo');

function title()
{
    $hour = date("H");
    if ($hour >= 7 & $hour <= 12) {
        $message = "Bom dia";
    } elseif ($hour > 12 & $hour <= 18) {
        $message = "Boa tarde";
    } else {
        $message = "Boa Noite";
    }
    echo "<h1>$message, esse é um calendário de 2022</h1>";
}
