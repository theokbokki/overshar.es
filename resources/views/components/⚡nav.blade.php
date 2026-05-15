<?php

use Livewire\Component;

new class extends Component
{
    public bool $format = true;

    public function toggleFormat()
    {
        $this->format = !$this->format;

        $this->dispatch('format-toggled', $this->format);
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
                <button wire:click="toggleFormat">
                    {{ $format ? 'Show editor' : 'Show formatted' }}
                </button>
            </div>
        @endauth()
    </nav>
</header>
