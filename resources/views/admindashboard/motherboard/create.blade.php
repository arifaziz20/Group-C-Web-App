<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Motherboard Records') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-900 border-b border-gray-200">
                    <form method="POST" action="{{ route('Motherboard-record.store') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" autofocus />
                                </div>
                                <div>
                                    <x-label for="form_factor" :value="__('Form Factor')" />
                                    <x-input id="form_factor" class="block mt-1 w-full" type="text" name="form_factor" autofocus />
                                </div>
                                <div>
                                    <x-label for="memory_max" :value="__('Memory Max')" />
                                    <x-input id="memory_max" class="block mt-1 w-full" type="text" name="memory_max" autofocus />
                                </div>
                                <div>
                                    <x-label for="memory_slot" :value="__('Memory Slot')" />
                                    <x-input id="memory_slot" class="block mt-1 w-full" type="text" name="memory_slot" autofocus />
                                </div>
                                <div>
                                    <x-label for="memory_type" :value="__('Memory Type')" />
                                    <x-input id="memory_type" class="block mt-1 w-full" type="text" name="memory_type" autofocus />
                                </div>
                                <div>
                                    <x-label for="socket" :value="__('Socket')" />
                                    <x-input id="socket" class="block mt-1 w-full" type="text" name="socket" autofocus />
                                </div>
                                <div>
                                    <x-label for="price" :value="__('Price (RM)')" />
                                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Save Motherboard Record') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
