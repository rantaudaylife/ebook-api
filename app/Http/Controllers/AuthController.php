<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            "nis" => "3103120127",
            "nama" => "Loka Nanta",
            "phone" => "0895334967287",
            "kelas" => "XII RPL 4"

        ];
    }
}
