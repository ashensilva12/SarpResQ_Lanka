<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakeReportController extends Controller
{
    public function create(){
        return view('snake.report');
    }
    public function store(Request $request){
        $request->validate([
            'location'=>'required',
            'snake_type'=>'nullable|string',
            'description'=>'nullable|string',
        ]);

        
    }
}
