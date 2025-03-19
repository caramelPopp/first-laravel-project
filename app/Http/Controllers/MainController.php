<?php 

namespace App\Http\Controllers; 
//garante que não haja confusão caso haja outro arquivo de mesmo nome

use Illuminate\Http\Request;

class MainController extends Controller {
    public function main() {
        return view('pages.mainpage');
    }

    public function aboutus() {
        return view('pages.aboutus');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function help() {
        return view('pages.help');
    }

    public function congrats() {
        return view('pages.congrats');
    }
}
