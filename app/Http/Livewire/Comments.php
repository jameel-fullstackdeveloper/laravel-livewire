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
        $this->validate(['newcomment' => 'required|max:255' ]);

        $createdcomment = Comment::create([
            'body' => $this->newcomment,
            'user_id' => 1,
            'support_ticket_id' => 2
        ]);

       $this->comments->prepend($createdcomment);

       $this->newcomment = '';


    }

    public function remove($commentid)
    {

        $comment = Comment::find($commentid);

        $comment->delete();

        $this->comments = $this->comments->except($commentid);

    }


    public function render()
    {
        return view('livewire.comments');
    }
}
