<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class contactController extends Controller
{
    public function create(){
        return view('service');
    }
    public function store (Request $REQUEST){
        $post = new contact();
        $post->nom= $REQUEST->nom;
        $post->prenom= $REQUEST->prenom;
        $post->email= $REQUEST->email;
        $post->city= $REQUEST->city;
        $post->zip= $REQUEST->zip;
        $post->Deparetement= $REQUEST->Deparetement;
        $post->save();
        return view('enCharge');
    }
}
