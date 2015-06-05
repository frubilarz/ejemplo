<?php

function conectar() {
    $usuario = "alo";
    $pass = "1234";
    $server = "localhost";
    $db = "alo";
    $link = mysql_connect("localhost", "alo", "1234") or die("error");
    if ($link) {
        $conxion = mysql_select_db("alo", $link);
    }
    return $conxion;
}

function desconectar() {
    $link = mysql_connect("localhost", "alo", "1234") or die("error");
    if ($link) {
        return mysql_close($link);
    }
}

?>