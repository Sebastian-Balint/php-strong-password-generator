<?php
function randomPassword()
{
    $number = $_GET["numero"];
    $simboli = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!?&%$@#";
    $pass = array();
    $simboli_length = strlen($simboli) - 1;
    for ($i = 0; $i < $number; $i++) {
        $n = rand(0, $simboli_length);
        $pass[] = $simboli[$n];
    }
    return implode($pass);
}
