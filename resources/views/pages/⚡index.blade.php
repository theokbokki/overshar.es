<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    #[Computed]
    public function posts() {
        return Post::all();
    }
};

?>

<div>
    @foreach($this->posts() as $post)
        {{ $post->id }}
    @endforeach
</div>
