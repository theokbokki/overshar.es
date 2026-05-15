<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    #[Computed]
    public function posts() {
        return Post::whereNot('id', 1)->get();
    }
};

?>

<div>
    <header>
        <a href="{{ route('index') }}" wire:navigate>Index</a>
        <a href="#" wire:navigate>About</a>
    </header>
    <ol>
        @foreach($this->posts() as $post)
            <li>
                <a href="#" wire:navigate>{{ ++$loop->index }}</a>
            </li>
        @endforeach
    </ol>
</div>
