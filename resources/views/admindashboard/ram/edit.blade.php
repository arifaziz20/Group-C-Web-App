<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit CPU Records') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-900 border-b border-gray-200">
                    <form method="POST" action="{{ route('RAM-record.update',$ram->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$ram->name}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="module" :value="__('Module')" />
                                    <x-input id="module" class="block mt-1 w-full" type="text" name="module" value="{{$ram->module}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="speed" :value="__('Speed')" />
                                    <x-input id="speed" class="block mt-1 w-full" type="text" name="speed" value="{{$ram->speed}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="price" :value="__('Price (RM)')" />
                                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{$ram->price}}" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
