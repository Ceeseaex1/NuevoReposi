<?php

class conexiondb {
    public function conectar (){
        $databaseHost = 'sql212.epizy.com';
        $databaseName = 'epiz_32621710';
        $databaseUser = 'epiz_32621710_XXX';
        $databasePassword = '4ZPkgankaBliTlE';
        $dsn = "mysql:host=".$databaseHost.";dbname=".$databaseName;
        $link = new PDO($dsn, $databaseUser, $databasePassword);
        return var_dump($link);
    }
}

$obj = new conexiondb ();
$obj -> conectar();
?>