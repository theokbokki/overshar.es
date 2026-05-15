<?php

use Livewire\Component;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

new class extends Component
{
    public Collection $posts;

    public function mount()
    {
        $this->posts = Post::whereNot('id', 1)->get();
    }
};

?>

<div>
    <ol>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('post', ['post' => $post]) }}" wire:navigate>{{ ++$loop->index }}</a>
            </li>
        @endforeach
    </ol>
</div>
