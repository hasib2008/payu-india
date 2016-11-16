<?php

namespace Hasib\PayU\Facades;
use Illuminate\Support\Facades\Facade;
class PayU extends Facade {
    protected static function getFacadeAccessor() {
        return 'Hasib\PayU\PayU';
    }

}
