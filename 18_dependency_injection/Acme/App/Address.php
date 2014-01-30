<?php

namespace Acme\App;

use Acme\App\Repositories\AddressRepositoryInterface;

class Address
{
    
    use \Acme\App\Traits\Accessible;
    
    protected $street;
    protected $city;
    protected $addresRepository;
    
    public function __construct(AddressRepositoryInterface $addresRepository) {
        
        $this->addresRepository = $addresRepository;
        
        $this->fillable[] = 'street';
        $this->fillable[] = 'city';
        $this->accessible[] = 'street';
        $this->accessible[] = 'city';
    }
    
    public function Find ($id)
    {
        // Fetch an address
        $this->addresRepository->Find($id, $this);
        return $this;
    }
}
