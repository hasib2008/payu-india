<?php

namespace Hasib\PayU;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;
class PayUController extends Controller {

    public function index() {
        $data = Request::all();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}

?>