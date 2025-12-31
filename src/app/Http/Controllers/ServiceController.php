<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * サービス紹介ページを表示
     */
    public function index()
    {
        return view('services');
    }
}
