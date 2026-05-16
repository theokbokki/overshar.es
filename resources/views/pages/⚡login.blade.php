<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required')]
    public string $password = '';

    public bool $remember = false;

    public function onSubmit()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials, $this->remember)) {
            session()->regenerate();

            return redirect()->intended('/');
        }

        $this->addError('email', 'The provided credentials do not match our records.');
    }
};

?>

<div>
    <form wire:submit="onSubmit">
        <div class="field">
            <label for="email" class="field__label">Email</label>
            <input type="email" id="email" name="email" wire:model="email" class="field__input">
            @error('email') <p class="field__error">{{ $message }}</p> @enderror
        </div>

        <div class="field">
            <label for="password" class="field__label">Password</label>
            <input type="password" id="password" name="password" wire:model="password" class="field__input">
            @error('password') <p class="field__error">{{ $message }}</p> @enderror
        </div>

        <div class="field field--checkbox">
            <label for="remember" class="field__label">Remember me</label>
            <input type="checkbox" id="remember" name="remember" wire:model="remember" class="field__input field__input--checkbox"/>
        </div>

        <button type="submit" class="button">Login</button>
    </form>
</div>
