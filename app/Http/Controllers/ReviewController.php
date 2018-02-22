<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
class ReviewController extends Controller
{
    /*
    * Stores the review as per the Request
    * @return view
    */ 
    public function store(Request $request) {
        $this->validate($request,['id'=>'required','title'=>'required','body'=>'required']);
        $review = new Review;
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->id = $request->input('id');
        //$review->stars = $request->input('stars');
        $review->user_id = auth()->id();
        $review->save();
        return back()->with('success','Your review has been sent for moderation. It will be posted if deemed suitable. Thank you!');
    }
    //edit
    //delete
    //update
}
