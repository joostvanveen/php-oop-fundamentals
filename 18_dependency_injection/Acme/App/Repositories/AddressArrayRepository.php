<?php

namespace Acme\App\Repositories;

class AddressArrayRepository implements AddressRepositoryInterface
{
    protected $addresses;
    
    public function __construct() {
        $this->addresses = $this->getAddressess();
    }
    
    /*
     * @see \Acme\App\Repositories\AddressRepositoryInterface::Find()
     */
    public function Find ($id, \Acme\App\Address $address)
    {
        if (isset($this->addresses[$id])) {
            foreach ($this->addresses[$id] as $key => $value) {
                $address->$key =$value;
            }
        }
        
        return $address;
    }
    
    protected function getAddressess ()
    {
        return array(
            1 => array(
                'street' => '1 Capitol Hill', 
                'city' => 'Washington'),
            2 => array(
                'street' => '1 Euston Road', 
                'city' => 'London'),
            3 => array(
                'street' => 'Dam 1', 
                'city' => 'Amsterdam'));
    }
}

