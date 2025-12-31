<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * 会社情報ページを表示
     */
    public function index()
    {
        return view('about');
    }
}
