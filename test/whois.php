<?php

include 'vendor/autoloader.php';

$obj = new neoistone\api\whois_ip('1.1.1.1');

print($obj->info());
