<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudViewController extends Controller {
   public function index() {
    $urls = DB::table('Images')->orderByRandom()->limit(1)->get();
    $rand = random_int(0, 3);
    $title = "hello madifaki";  
    return view("dbconn", array("urls"=>$urls, "title"=>$title));
   }
}