<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;

    public $newcomment;
    public $ticketId ;

  
    public function addcomment()
    {
        $this->validate(['newcomment' => 'required|max:255' ]);

        $createdcomment = Comment::create([
            'body' => $this->newcomment,
            'user_id' => 1,
            'support_ticket_id' => 2
        ]);

      // $this->comments->prepend($createdcomment);

       $this->newcomment = '';

       session()->flash('message', 'Comment successfully added.');


    }

    public function remove($commentid)
    {

        $comment = Comment::find($commentid);

        $comment->delete();

       // $this->comments = $this->comments->except($commentid);

        session()->flash('message', 'Comment successfully deleted.');
    }


    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::where('support_ticket_id', 2)->latest()->paginate(2),
        ]);
    }
}
