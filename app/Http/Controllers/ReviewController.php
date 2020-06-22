<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'comment'=>'required',
        ]);

        $input = $request->all();
        $input['author'] = auth()->user()->id;

        Comment::create($input);

        return back();
    }


}