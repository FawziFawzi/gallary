<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {


    try{
        $newsletter->subscribe(request('email'));

       }catch(\Exception $e){
           throw ValidationException::withMessages([
               'email' => 'This email cannot be added'
           ]);
       }
       return redirect('/')->with('success','email has been sent');
    }
}
