<?php

// Require psr-0 autoloader
require 'autoload.php';

$addressRepository = new \Acme\App\Repositories\AddressArrayRepository();
$addressModel = new Acme\App\Address($addressRepository);
$address = $addressModel->Find(3);

echo '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=' . rawurlencode($address->street . ' ' . $address->city) . '&amp;output=embed"></iframe>';
echo '<h1>' . $address->city . '</h1>';
echo '<p>' . $address->street . '</p>';