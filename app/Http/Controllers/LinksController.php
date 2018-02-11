<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;

class LinksController extends Controller
{
    public function index()
    {
    	return view('index');
    }


    public function create()
    {
        

    	$links = Link::where('user_id', '=', auth()->user()->id)->get();

    	return view('/home',compact('links'));
    }


	

    public function store()
    {
        
    	$this->validate(request(),[
    		'adrese'=>'required'
    	]);

    	Link::create([ 
            'adrese' => request('adrese'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/home');
    }

}
