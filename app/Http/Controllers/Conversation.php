<?php

namespace App\Http\Controllers;

use App\Models\Conversation as ModelsConversation;
use Facade\Ignition\ErrorPage\Renderer;
use Illuminate\Http\Request;

class Conversation extends Controller
{
    public function index(){


        $conversations = auth()->user()->conversations()->latest()->get();
        $id = auth()->user()->id;
       return view('conversations.index',['conversations'=>$conversations,'id'=>$id]);

    }

    public function show(ModelsConversation $conversation)
    {
        
        return view('conversations.show', compact('conversation'));
    }
}
