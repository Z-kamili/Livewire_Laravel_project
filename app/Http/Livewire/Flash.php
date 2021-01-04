<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{

    protected $listners = ['flash'=>'setFlashMessage'];

    public function setFlashMessage($message,$type){

        $this->message = $message;
        $this->type = $type;
        $this->dispatchBrowserEvent('flash-message',['message'=>$this->message]);

    }
    public function render()
    {
        return view('livewire.flash');
    }
}
