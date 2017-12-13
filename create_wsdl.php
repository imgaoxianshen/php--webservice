<?php

include('Service.php');
include('SoapDiscovery.class.php');

$disc = new SoapDiscovery('Service','soap');
$disc->getWSDL();