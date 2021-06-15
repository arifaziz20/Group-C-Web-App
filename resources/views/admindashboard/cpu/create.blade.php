<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New CPU Records') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('CPU-record.store') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="model_name" :value="__('Model Name')" />
                                    <x-input id="model_name" class="block mt-1 w-full" type="text" name="model_name" autofocus />
                                </div>
                                <div>
                                    <x-label for="manufacturer" :value="__('Manufacturer')" />
                                    <x-input id="manufacturer" class="block mt-1 w-full" type="text" name="manufacturer" autofocus />
                                </div>
                                <div>
                                    <x-label for="price" :value="__('Price (RM)')" />
                                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Save CPU Record') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
