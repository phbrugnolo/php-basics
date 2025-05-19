<?php
define("HOST", "localhost:3307");
define("DB", "AULACRUD");
define("LOGIN", "root");
define("PASSWORD", "");

function getConn() {
    return new PDO("mysql:host=" . HOST . "; dbname=" . DB, LOGIN, PASSWORD);
}