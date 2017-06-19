<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

/**
* 
*/
class PagesController extends Controller
{
	
	public function getIndex() 
	{

        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

        return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout()
	{
		$first = 'Daniel';
		$last  = 'Darvile';
		$email = 'darvile.d@gmail.com';
		$fullname = $first . " " . $last;

		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		return view('pages.about')->withData($data);
	}

	public function getContact()
	{
		return view('pages.contact');
	}
}