<?php

use Livewire\Component;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use NumberToWords\NumberToWords;

new class extends Component
{
    public Collection $posts;

    public function mount()
    {
        $this->posts = Post::whereNot('id', 1)->get();
    }
};

?>

<ol class="list">
    @foreach($posts as $post)
        <li class="list__item">
            <a
                href="{{ route('post', ['post' => $post]) }}"
                class="list__link"
                style="--background: {{ $post->color }}"
                wire:navigate
            >
                {{ ucfirst(NumberToWords::transformNumber('en', ++$loop->index)) }}
            </a>
        </li>
    @endforeach
</ol>
