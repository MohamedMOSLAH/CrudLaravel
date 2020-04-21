<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Mark;
use App\Picture;


class MarksController extends Controller
{
    public function index()
    {
        $marks = Mark::paginate(10);
        return view('marks.index',compact('marks'));
    }

    public function create()
    {
        $mark = new Product();
        return view('marks.create',compact('mark'));
    }

    public function store(){
        
        Mark::create($this->validator());
        return back();
    }
    
    private function validator()
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }


    public function show(Mark $mark){
        return view('marks.show',compact('mark'));
    }

    public function edit(Mark $mark)
    {
        return view('marks.edit',compact('mark'));
    }

    public function update(Mark $mark){
        $mark->update($this->validator());
        return redirect('marks/'.$mark->id);
    }
    
    public function destroy(Mark $mark)
    {
        $mark->delete();
        return redirect('marks');
    }



   
}

