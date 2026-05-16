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
        $post = Post::create(['color' => rand(0, 359).', 100%, 50%']);



        return $this->redirect(route('post', ['post' => $post]), navigate: true);
    }
};
?>

<header>
    <nav class="nav">
        <h2 class="sro">Main nav</h2>
        <div class="nav__links">
            <a href="{{ route('index') }}" class="nav__link" wire:navigate>Index</a>
            <span>/</span>
            <a href="{{ route('about') }}" class="nav__link" wire:navigate>About</a>
        </div>
        @auth()
            <div class="nav__actions">
                @if(Route::currentRouteName() === 'index')
                    <button wire:click="createPost" class="nav__action">Create</button>
                @else
                    <button wire:click="toggleFormat"  class="nav__action">
                        {{ $format ? 'Show editor' : 'Show formatted' }}
                    </button>
                @endif
            </div>
        @endauth()
    </nav>
</header>
