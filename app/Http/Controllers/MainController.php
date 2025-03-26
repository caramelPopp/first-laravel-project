<?php 

namespace App\Http\Controllers; 
//garante que não haja confusão caso haja outro arquivo de mesmo nome

use Illuminate\Http\Request;

class MainController extends Controller {
    public static function main() {
        return view('pages.main');
    }

    public static function aboutus() {
        return view('pages.aboutus');
    }

    public static function contact() {
        return view('pages.contact');
    }

    public static function help() {
        return view('pages.help');
    }

    public static function congrats() {
        return view('pages.congrats');
    }
}
