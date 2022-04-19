<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //return view('pages.index');
        return view('pages.index');
        }
        public function crawl(Request $request){
            //return view('pages.index');
            return "Crwlit methd";
            }
            public function store(Request $request){
                //return view('pages.index');
                return "Crwlit methd";
                }
            
}
