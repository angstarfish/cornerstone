<x-jet-form-section submit="updateTeamDomain">
    <x-slot name="title">
        {{ __('Organization Name') }}
    </x-slot>

    <x-slot name="description">
        {{ __('The Organization\'s domain.') }}
    </x-slot>

    <x-slot name="form">

        <!-- Organization Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="domain" value="{{ __('Organization Domain') }}" />

            <div class="inline-flex flex-row items-center w-full space-x-2">

                <x-jet-input id="domain" type="text" class="block w-full mt-1" wire:model.defer="state.domain"
                    :disabled="! Gate::check('update', $team)" />
                @isset($this->state['domain'])
                <a target="_blank" href="{{ $team->url }}">
                    @svg('fas-arrow-up-right-from-square', 'h-5 w-5 text-indigo-500')
                </a>
                @endisset
            </div>

            <x-jet-input-error for="domain" class="mt-2" />
        </div>
    </x-slot>

    @if (Gate::check('update', $team))
    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
    @endif
</x-jet-form-section>
