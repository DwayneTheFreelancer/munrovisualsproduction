<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages/index');
    }

    // public function media() {
    //     return view('pages/media');
    // }
    
    // Music Videos, Promotional, Interviews

    public function musicVideos() {
        return view('pages/music-videos');
    }

    public function promotional() {
        return view('pages/promotional');
    }

    public function interviews() {
        return view('pages/interviews');
    }


    // public function photographyArt() {
    //     return view('pages/photography-art');
    // }

    // Photography and Graphic Art

    public function photography() {
        return view('pages/photography');
    }

    public function graphicArt() {
        return view('pages/graphic-art');
    }

    public function news() {
        return view('pages/news');
    }

    public function portfolio() {
        return view('pages/portfolio');
    }

    public function services() {
        return view('pages/services');
    }

    public function confirmation() {
        return view('pages/confirmation');
    }

    public function about() {
        return view('pages/about');
    }

    public function contact() {
        return view('pages/contact');
    }
}
