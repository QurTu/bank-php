<?php
namespace Main;
 class Currency {
    private $rate;
    public function __construct() {
        
$curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'https://api.exchangeratesapi.io/latest');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    $buffer = curl_exec($curl_handle);
    $buffer = json_decode($buffer);
    $this->rate = $buffer->rates->USD;
    }

    public function rate() {
        return $this->rate;
    }
 }