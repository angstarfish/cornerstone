<x-jet-form-section submit="updateTeamName">
    <x-slot name="title">
        {{ __('Company Name') }}
    </x-slot>

    <x-slot name="description">
        {{ __('The company\'s name and owner information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Company Owner Information -->
        <div class="col-span-6">
            <x-jet-label value="{{ __('Company Owner') }}" />

            <div class="flex items-center mt-2">
                <img class="object-cover w-12 h-12 rounded-full" src="{{ $team->owner->profile_photo_url }}" alt="{{ $team->owner->name }}">

                <div class="ml-4 leading-tight">
                    <div>{{ $team->owner->name }}</div>
                    <div class="text-sm text-gray-700">{{ $team->owner->email }}</div>
                </div>
            </div>
        </div>

        <!-- Company Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Company Name') }}" />

            <x-jet-input id="name"
                        type="text"
                        class="block w-full mt-1"
                        wire:model.defer="state.name"
                        :disabled="! Gate::check('update', $team)" />

            <x-jet-input-error for="name" class="mt-2" />
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
