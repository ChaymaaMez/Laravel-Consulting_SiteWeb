<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class aboutController extends Controller
{
    public function create(){
        return view('contact');
    }
    public function store (Request $REQUEST){
        $post = new about();
        $post->nom= $REQUEST->nom;
        $post->email= $REQUEST->email;
        $post->subject= $REQUEST->subject;
        $post->message= $REQUEST->message;
        $post->save();
        return view('enCharge');
    }
}

