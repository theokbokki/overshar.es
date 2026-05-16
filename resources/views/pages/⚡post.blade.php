<?php

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\On;

new class extends Component
{
    public Post $post;

    public bool $format = true;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return $this->view()->layout('layouts::app', ['post' => $this->post]);
    }

    #[On('format-toggled')]
    public function toggleFormat(bool $format)
    {
        $this->format = $format;
    }
};
?>

<div class="content">
    @if(auth()->check() && !$format)
        <livewire:editor :$post></livewire:editor>
    @else
        {!! str()->markdown($post->content) !!}
    @endif
</div>
