<?php

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\On;

new class extends Component
{
    public Post $post;

    public bool $format = true;

    public function mount()
    {
        $this->post = Post::first();
    }

    #[On('format-toggled')]
    public function toggleFormat(bool $format)
    {
        $this->format = $format;
    }
};
?>

<div>
    @if(auth()->check() && !$format)
        <livewire:editor :$post></livewire:editor>
    @else
        {!! str()->markdown($post->content) !!}
    @endif
</div>
