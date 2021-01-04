<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Job extends Component
{
    public $job;
    public function render()
    {
        return view('livewire.job');
    }

    public function addLike(){

        if(auth()->check()){

            auth()->user()->likes()->toggle($this->job->id);

        }else {

            $this->emit('flash','Merci de vous connecter pour ajouter une mission a vos favoris','error');

        }

      

    }


}
