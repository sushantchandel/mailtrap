<?php

namespace App\Classes;

class ApiResponseClass
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function success($data , $message = "Success"){
        return response()->json([
            'status'=>true,
            'message'=>$message,
            'data'=>$data
        ]);
    }

    public function error($data , $message = "failer"){
        return response()->json([
            'status'=>false,
            'message'=>$message,
            'data'=>$data
        ]);
    }
}
