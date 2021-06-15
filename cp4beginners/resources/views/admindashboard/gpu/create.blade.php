<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New GPU Records') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('GPU-record.store') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" autofocus />
                                </div>
                                <div>
                                    <x-label for="chipset" :value="__('Chipset')" />
                                    <x-input id="chipset" class="block mt-1 w-full" type="text" name="chipset" autofocus />
                                </div>
                                <div>
                                    <x-label for="length" :value="__('Length')" />
                                    <x-input id="length" class="block mt-1 w-full" type="text" name="length" autofocus />
                                </div>
                                <div>
                                    <x-label for="memory_type" :value="__('Memory Type')" />
                                    <x-input id="memory_type" class="block mt-1 w-full" type="text" name="memory_type" autofocus />
                                </div>
                                <div>
                                    <x-label for="vram" :value="__('VRAM')" />
                                    <x-input id="vram" class="block mt-1 w-full" type="text" name="vram" autofocus />
                                </div>
                                <div>
                                    <x-label for="price" :value="__('Price (RM)')" />
                                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Save GPU Record') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
