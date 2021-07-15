<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index () {
        $backTab = [
            (object)["nom"=>"Seif", "fonction"=>"backend", "src"=>"test.jpg"],
            (object)["nom"=>"Elvis", "fonction"=>"backend", "src"=>"test.jpg"],
            (object)["nom"=>"Kevin", "fonction"=>"backend", "src"=>"test.jpg"],
            (object)["nom"=>"ali", "fonction"=>"backend", "src"=>"test.jpg"], 
        ];
        return view('team/web/backend', compact('backTab'));
    }
}
