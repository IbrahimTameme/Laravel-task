<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testCon extends Controller
{
    public function show ()
    {
   
        return View('About');
    }

    public function candy ()
    {
   
        return View('Candy');
    }

    public function contact ()
    {
   
        return View('Contact');
    }

    public function show1 ($id,$name)
    {
   
        return 'id: '.$id.'<br>'.'name: '.$name;
    }
}
