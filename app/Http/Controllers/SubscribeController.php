<?php

namespace App\Http\Controllers;
use Illuminate\support\Str;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use App\Http\Requests\postrequest;
class SubscribeController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store (Request $request){
        $post = new NewsletterSubscriber();
        $post->email= $request->email;
        $post->save();
        return view('DoneSubscribe');

    }
}
