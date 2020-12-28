<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function req()
    {
        return view("daftar");
    }


    public function daftarSubmit(Request $request)
    {
        $Fname = $request->input('firstname');
        $Lname = $request->input('lastname');
        return '<h1>Selamat Datang &nbsp;'.$Fname. '&nbsp;'.$Lname.'</h1> <br>

        <h2>Terimakasih telah bergabung di sanberbook. Social media kita bersama!</h2>
        
        ';
        // return $request->all();
    }
  
}
