<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    public bool $format = true;

    public function toggleFormat()
    {
        $this->format = !$this->format;

        $this->dispatch('format-toggled', $this->format);
    }

    public function createPost()
    {
        $post = Post::create(['color' => rand(0, 359).', 100, 50']);

        return $this->redirect(route('post', ['post' => $post]), navigate: true);
    }
};
?>

<header>
    <nav>
        <h2 class="sro">Main nav</h2>
        <div>
            <a href="{{ route('index') }}" wire:navigate>Index</a>
            <a href="{{ route('about') }}" wire:navigate>About</a>
        </div>
        @auth()
            <div>
                @if(Route::currentRouteName() === 'index')
                    <button wire:click="createPost">Create</button>
                @else
                    <button wire:click="toggleFormat">
                        {{ $format ? 'Show editor' : 'Show formatted' }}
                    </button>
                @endif
            </div>
        @endauth()
    </nav>
</header>
