<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    /*public function index() {
        
    }*/
    public function post_show() {
        return view('posts.post_show');
    }
    public function post_show1() {
        return view('posts.post_show1');
    }
    public function post_show2() {
        return view('posts.post_show2');
    }
    public function post_show3() {
        return view('posts.post_show3');
    }
    public function post_show4() {
        return view('posts.post_show4');
    }
    public function post_show5() {
        return view('posts.post_show5');
    }
    public function post_show6() {
        return view('posts.post_show6');
    }
    public function post_show7() {
        return view('posts.post_show7');
    }
    public function post_show8() {
        return view('posts.post_show8');
    }
    public function post_show9() {
        return view('posts.post_show9');
    }
    public function post_create() {
        return view('posts.create_post');
    }
}
