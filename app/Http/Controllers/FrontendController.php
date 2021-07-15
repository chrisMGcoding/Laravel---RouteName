<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $frontTab = [
            (object)["nom"=>"chris", "fonction"=>"frontend", "src"=>"test.jpg"],
            (object)["nom"=>"alan", "fonction"=>"frontend", "src"=>"test.jpg"],
            (object)["nom"=>"arnaud", "fonction"=>"frontend", "src"=>"test.jpg"],
            (object)["nom"=>"gilles", "fonction"=>"frontend", "src"=>"test.jpg"], 
            (object)["nom"=>"lio", "fonction"=>"frontend", "src"=>"test.jpg"]
        ];
        return view('team/web/frontend', compact('frontTab'));
    }
}
