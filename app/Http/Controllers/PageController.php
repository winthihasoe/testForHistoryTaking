<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function historytaking(){
        return view('historytaking');
    }

    function patientlist(){
        return view('patientlist');
    }
}
