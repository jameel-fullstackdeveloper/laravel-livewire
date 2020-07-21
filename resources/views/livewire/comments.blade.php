<div>

 <form wire:submit.prevent="addcomment" class="my-4 flex">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" 
        placeholder="What's in your mind." wire:model.lazy="newcomment">
        <div class="py-2">
            <button class="p-2 bg-blue-500 w-20 rounded shadow text-white"
                    type="submit">Add</button>

        </div>
</form>
    
    @foreach($comments as $comment)
    <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-bold text-lg">{{$comment->creator->name}}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}</p>
            </div>
            <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer">remove</i>
        </div>
        <p class="text-gray-800">{{$comment->body}}</p>
    </div>
    @endforeach

</div>