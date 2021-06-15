<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit CPU Records') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('PSU-record.update',$cpu->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$psu->name}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="efficiency_rating" :value="__('Efficiency Rating')" />
                                    <x-input id="efficiency_rating" class="block mt-1 w-full" type="text" name="efficiency_rating" value="{{$psu->efficiency_rating}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="form_factor" :value="__('Form Factor')" />
                                    <x-input id="form_factor" class="block mt-1 w-full" type="text" name="form_factor" value="{{$psu->form_factor}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="modular" :value="__('Modular')" />
                                    <x-input id="modular" class="block mt-1 w-full" type="text" name="modular" value="{{$psu->modular}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="wattage" :value="__('Wattage')" />
                                    <x-input id="wattage" class="block mt-1 w-full" type="text" name="wattage" value="{{$psu->wattage}}" autofocus />
                                </div>
                                <div>
                                    <x-label for="price" :value="__('Price (RM)')" />
                                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{$psu->price}}" autofocus />
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
