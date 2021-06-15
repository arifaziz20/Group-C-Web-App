<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @auth
            {{ __('Home for user') }}
            @else
            {{ __('Home for guest') }}
            @endauth
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @auth
                    You're logged in as a user!
                    <button type="button">Save Preset</button>
                    @else
                    You're a guest.
                    <button type="button" disabled>Save Preset</button>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>