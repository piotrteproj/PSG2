<?php

    $db_host="localhost";
    $db_port="5432";
    $db_name="test_1";
    $db_user="postgres";
    $db_pass="admin";

    $tekst_polaczenia= "host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_pass";

    $polaczenie=pg_connect ("$tekst_polaczenia");

    $status_polaczenia=pg_connection_status($polaczenie);
    
    if ($status_polaczenia === PGSQL_CONNECTION_OK); //echo "dziala";









