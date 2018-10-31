<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;
use App\Message;
use DB;


class PagesController extends Controller
{
    /*
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}
	*/
    public function home(){
    	return view('home');
        
    }

    public function saludo($nombre = "Invitado"){
        
    	return view('saludo', compact('nombre'));
    }

    public function contacto(){
    	return view('contacto');
    }

    public function mensaje(CreateMessageRequest $request){


    	$data = $request->all();

    	return redirect()->route('contacto')->with('info',"Recibimos tus datos!");
    }
    
}

