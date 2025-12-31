<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    /**
     * 導入事例・実績ページを表示
     */
    public function index()
    {
        return view('cases');
    }
}
