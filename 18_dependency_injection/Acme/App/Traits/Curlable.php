<?php

namespace Acme\App\Traits;

trait Curlable
{
    
    /**
     * Perform a simple cURL request
     * @param string $url
     * @return mixed
     */
    public function curl ($url)
    {
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}