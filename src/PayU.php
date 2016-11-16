<?php
namespace Hasib\PayU;

use Hasib\PayU\lib\PayUPayment;
use Exception;

class PayU {
    public function __construct() {

    }
    public static function makePayment($data) {
       
        $obj = new PayUPayment();
        
        if(!is_array($data)){
            throw new Exception("Paramenter Must be An array");
        }
        return $obj->makePayment($data);
    }
    public function getRedirectUrl($data){
        return lib\Misc::show_page($data);
    }
    public function validatePayment($data){
        $obj = new PayUPayment();
        if(!is_array($data)){
            throw new Exception("Paramenter Must be An array");
        }
        return $obj->validatePayment($data);
    }

}
