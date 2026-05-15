<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    public Post $post;

    public function mount()
    {
        $this->post = Post::first();
    }
};
?>

<div>
    {!! str()->markdown($post->content) !!}
</div>
