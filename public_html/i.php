<?php

$address = '127.0.0.1';
$port = 9001;
$sock = socket_create(AF_INET, SOCK_STREAM, 0);
socket_bind($sock, $address) or die('Unable to bind');

socket_connect($sock, '127.0.0.1', $port);
//socket_listen($sock);
//echo "connection established: $client";
//socket_close($client);
//socket_close($sock);

phpinfo();


