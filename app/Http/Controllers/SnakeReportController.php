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

        SnakeReport::create([
            'user_id'=>auth()->id(),
            'snake_type'=>$request->snake_type,
            'location'=>$request->location,
            'description'=>$request->description,
        ]);
    }
}
