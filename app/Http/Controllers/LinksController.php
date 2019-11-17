<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;

class LinksController extends Controller
{
    public function index(){
        return view('/home');
    }
    
	public function create(){
    	$links = Link::where('user_id', '=', auth()->user()->id)->get();
        
    	return($links);
    }


    public function store(){
        $adrese = new Link;
        $adrese->adrese = request('adrese');
        $adrese->user_id = auth()->user()->id;
        $adrese->save();
    	
        return($adrese);
    }
    
}
