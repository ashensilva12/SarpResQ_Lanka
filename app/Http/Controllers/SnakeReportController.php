<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakeReportController extends Controller
{
    public function create(){
        return view('snake.report');
    }
    
}
