<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120146,
            'Name' => 'Muhammad Fauzil Adim',
            'Phone' => '085326717064',
            'Class' => 'XII RPL 5'
        ];
    }
}
