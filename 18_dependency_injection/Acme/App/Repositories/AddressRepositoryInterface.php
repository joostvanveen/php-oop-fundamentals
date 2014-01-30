<?php

namespace Acme\App\Repositories;

interface AddressRepositoryInterface
{

    public function Find($id, \Acme\App\Address $address);
}
