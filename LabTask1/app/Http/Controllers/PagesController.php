<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Http\Requests\StorePagesRequest;
use App\Http\Requests\UpdatePagesRequest;

class PagesController extends Controller
{
    public function index()
    {
        $message = "Welcome";
        return View('home')->with('message', $message);
    }
    public function product()
    {
        $names=array("Existing accout", "Create accout", "Current accout", "Saving accout");
        return view('product')
        ->with('names', $names);
    }
    public function contact(){
        $phone = ": +88-09678555000";
        $fax=": +880-2-58814290";
        $email = ": info@abbl.com";
        return view('contact')
        ->with('phone', $phone)
        ->with('fax', $fax)
        ->with('email', $email);
    }
    public function about(){
        return view('about');
    }
    public function team(){
        $person1=array("Name: Mr. Reaz", "Phone: 01733901774", "Email: Mehadi@gmail.com");
        $person2=array("Name: Mr. Mehadi", "Phone: 01733901774", "Email: Mehadi@gmail.com");
        $person3=array("Name: Mr. Hasan", "Phone: 01733901774", "Email: Hasan@gmail.com");
        return view('team')
        ->with('person1', $person1)
        ->with('person2', $person2)
        ->with('person3', $person3);
    }
}
