<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

public function index (){

}



        public function store(Request $request)
        {
            $comment = new Comment();
            $comment->user_id = \Auth::user()->id;

            $comment->product_id = $request->get('jeu');
            $comment->title = $request->get('title');
            $comment->author = Auth::user()->name;


            //$comment->note = $request->get('note');
            $comment->body = $request->get('comment');
            $comment->body = $request->get('avis');
            $comment->save();
            if( \Auth::user()->role == "Administrator")
                return redirect()->route('admin');
               // return redirect()->route('home');
            else
            return redirect()->route('products.index');
            return view('index');
        }

    public function create($gameId){
        $game = Product::where('id', $gameId)->first();
        $comment = new Review();
        return view('reviews.create', compact('game'), compact('comment'));

    }



    public function product()
    {
        return $this->belongsTo('Product');
    }


}