<?php
function generatorePsw()
{
    // Verific che il parametro psw sia tramite GET
    if (isset($_GET["psw"])) {
        // Lunghezza della password dalla query string
        $number = $_GET["psw"];
        // Caratteri per generare la password
        $simboli = "!?&%$@#abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $passw = array();
        $simboli_length = strlen($simboli) - 1;
        // qui genero la password random con un ciclo
        for ($i = 0; $i < $number; $i++) {
            $num = rand(0, $simboli_length);
            $passw[] = $simboli[$num];
        }

        //qui restituisco la password 
        return implode($passw);
    } else {
        // Se il parametro 'psw' non è stato passato, restituisci una stringa vuota
        return "";
    }
}
