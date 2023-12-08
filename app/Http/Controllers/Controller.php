<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController


{
    public function index(){
        return view('index');
    }

    public function follow(){
        return view('follow');
    }

    public function likes(){
        return view('likes');
    }

    public function support(){
        return view('support');
    }

    public function view(){
        return view('view');
    }

    public function comment(){
        return view('comment');
    }

    public function shares(){
        return view('shares');
    }

    public function live(){
        return view('live');
    }


}