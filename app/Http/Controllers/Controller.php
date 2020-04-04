<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    /**
    * A function for make custom error message validation
    * Error Format
    * errors: [
    *    {
    *        "message": "error message",
    *        "field": "name of field"
    *    }
    * ]
    * @param Validator 
    */
    
    public function errorMessage(Validator $validator){
        foreach($validator->message as )
    }
}
