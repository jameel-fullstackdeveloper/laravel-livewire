<?php

namespace App\Http\Livewire;

use App\Comment;
use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{

    public $comments;
    public $newcomment;

  
    public function mount() {

        $initalcomments = Comment::latest('id')->get();
        $this->comments = $initalcomments;
    }


    public function addcomment()
    {
       
        if($this->newcomment == '') {
            return ;
        }

        $createdcomment = Comment::create([
            'body' => $this->newcomment,
            'user_id' => 1,
            'support_ticket_id' => 2
        ]);

       $this->comments->prepend($createdcomment);

       $this->newcomment = '';


    }


    public function render()
    {
        return view('livewire.comments');
    }
}
