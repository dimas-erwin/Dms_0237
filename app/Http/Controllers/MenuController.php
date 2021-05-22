<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu0237(){
        return view("menu0237");
    }
    public function home(){
        return view("home");
    }
    public function artikel0237(){
        return view("artikel0237");
    }
    public function kontak0237(){
        return view("kontak0237");
    }
}
?>