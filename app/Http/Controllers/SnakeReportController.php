<?php

namespace App\Http\Controllers;

use App\Models\SnakeReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'user_id'=>Auth::id(),
            'snake_type'=>$request->snake_type,
            'location'=>$request->location,
            'description'=>$request->description,
        ]);

        return redirect()->back()->with('success','Snake report submitted successfully.');
    }
}
