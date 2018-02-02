<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUs;
use Mail;

class PageController extends Controller
{
    public function home() 
    {
        return view('home');
    }
    public function blog()
    {
        return view('blog');
    }
    public function resume()
    {
        return view('resume');
    }
    public function contact()
    {
        return view('contact');
    }
		public function contactUsPost(Request $request)
		{
			$this->validate($request, [
				'name'=>'required', 
				'email'=>'required|email', 
				'message'=>'required'
			]);
			ContactUs::create($request->all());

			Mail::send('email',
				array(
					'name'=>$request->get('name'),
					'email'=>$request->get('email'),
					'user_message'=>$request->get('message')
				), function($message)
				{
					$message->from('micobb@outlook.com');
					$message->to('micobb10@gmail.com', 'Admin')->subject('Portfolio Contact');
				});

			 return back()->with('success', 'Thanks for contacting us!');
		}
}
