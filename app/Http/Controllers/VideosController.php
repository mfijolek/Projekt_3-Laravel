<?php

namespace App\Http\Controllers;
use Request;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;
use App\Video;


class VideosController extends Controller
{	
	/**
	*Pobieramy listę filmów
	*/
    public function index(){
    	$videos = Video::latest()->get();
    	return view('videos.index')->with('videos', $videos);
    }

    public function show($id){
    	$video = Video::findOrFail($id);
    	return view('videos.show')->with('video', $video);
    }

    /**
    * Wyświetla formularz dodawania filmu
    */
    public function create(){
        return view('videos.create');
    }

    /**
    * Zapisujemy film do bazy
    */
    public function store(){
        $input = Request::all();
        Video::create($input);
        return redirect('videos');
    }
}
