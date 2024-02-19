<div>
@livewireStyles

<input class="font-inter text-left px-[2rem] w-full focus:outline-none" type="text" wire:model="IDNumber" placeholder="2021-12345">
@error('IDNumber') <span class="error">{{ $message }}</span> @enderror

@livewireScripts
@livewire('login-form')

</div>
