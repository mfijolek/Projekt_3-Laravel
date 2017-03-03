<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function contact(){
    	$header = 'to jest nagłówek strony kontakt';
    	$date = '02/03/2017';
    	$visited = 3042;
    	return view('pages.contact', compact('header', 'date', 'visited'));
    }

    public function about(){
    	return view('pages.about');
    }
}
