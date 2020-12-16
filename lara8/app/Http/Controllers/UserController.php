<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
         public function send(Request $req)
        {
         $nama =    $req->input('nama');
         $pass =   $req->input('password');

            if ($nama !== 'admin' && $pass !== 'admin') {
                return "Gagal Login ! ";
            }else{
                return 'Berhasil Login &nbsp;'.$nama.'&nbsp;'.$pass.'';

            }
        }
}
