<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
class registerUser extends Controller
{
    //

    function registerUser(Request $req)
    {

       
        
        DB::insert('insert into users (Full_name, email, gender, city, country, language,typeofservice, password) values (?,?,?,?,?,?,?, ?)', 
        [$req->FullName, 
        $req->Email, 
        $req->Gender, 
        $req->City, 
        $req->Country, 
        $req->Language, 
        $req->TypeOfService,
        $req->Password
        ]);

    }

   
}
