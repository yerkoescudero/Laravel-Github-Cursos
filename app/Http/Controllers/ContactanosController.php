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

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        //se manda información al constructor de mailable
        $correo = new ContactanosMailable($request->all());
        Mail::to('yerko.andres.e@gmail.com')->send($correo);
    
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
    
   
}
