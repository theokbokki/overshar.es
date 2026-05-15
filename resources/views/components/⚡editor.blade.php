<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    public Post $post;

    public string $content = '';

    public function mount()
    {
        $this->content = $this->post->content;
    }

    public function updatedContent()
    {
        if ($this->content === $this->post->content) return;

        $this->post->update(['content' => $this->content ?? '']);
    }
};
?>

<textarea
    x-data="{
        resize() {
            const scrollTop = window.pageYOffset;
            this.$el.style.height = 'auto';
            this.$el.style.height = this.$el.scrollHeight + 'px';
            window.scrollTo({ top: scrollTop });
        },

        onInput() {
            this.resize();
            $wire.$set('content', $el.value);
        },
    }"
    x-init="resize()"
    @input.debounce.500ms="onInput()"
    x-resize.document="resize()"
    class="editor"
    wire:ignore
>{{ $content }}</textarea>
