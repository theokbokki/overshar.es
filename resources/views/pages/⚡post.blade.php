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
    <livewire:editor :$post></livewire:editor>
</div>
