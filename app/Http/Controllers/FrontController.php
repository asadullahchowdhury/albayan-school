<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        return view('front.pages.home');
    }
}
