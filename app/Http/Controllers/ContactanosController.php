<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


class ContactanosController extends Controller
{
    
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $correo = new ContactanosMailable($request->all());
        Mail::to('yerko.andres.e@gmail.com')->send($correo);
    
        return "Mensaje enviado";
    }
    
   
}
