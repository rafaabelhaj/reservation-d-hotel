<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function index(){
    //     return 'C\'est mon premier controlleur IndexController';
    // }

    // public function __invoke(){
    //     return view('welcome');
    // }

    // public function __invoke(){
    //     return view('layouts.master');
    // }

    public function __invoke(){
        return view('index');
    }
}
