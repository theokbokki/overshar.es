<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    public Post $post;

    public function mount($post)
    {
        $this->post = $post;
    }
};
?>

<div>
    {!! str()->markdown($post->content) !!}
</div>
