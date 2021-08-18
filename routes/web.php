<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('submit', function(Request $req){

    $validated = $req->validate([
        'name'     =>  'required',
        'email'  =>  'required|email',
        'message' =>  'required'
       ]);

$data = array(
  'name'      =>  $req->name,
  'message'   =>   $req->message,
  'email'     =>   $req->email,
  'subject'   =>   $req->subject
);


  Mail::to('sopuruchukwunelson9@gmail.com')->send(new ContactMail($data));
  return redirect('/')->with('success', 'Thanks for contacting us!');


});