<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($p = 0){
        $t = 'Harry Potter and the Phillosopher\'s Stone';
        return view('movie/index', array(
            'title' => $t,
            'page' => $p
        ));
    }
    public function details($year = null){
        return view('movie.details');
    }
    public function redirection(){
        return redirect()->action('MovieController@details');
    }
    public function form(){
        return view('movie.form');
    }
    public function receive(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');

        return "el nombre es: <strong>$name</strong> y el email es: <strong>$email</strong>";
    }
}
