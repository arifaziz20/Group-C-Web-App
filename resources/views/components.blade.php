<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Components') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @auth
                    You're logged in as a user!
                    <br>

                    @else
                    You're a guest.
                    <br>

                    @endauth

                    <ul>
                        <li>
                            <x-nav-link :href="route('listofCPU')">
                                {{ __('CPU') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofGPU')">
                                {{ __('GPU') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofMotherboard')">
                                {{ __('Motherboard') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofPSU')">
                                {{ __('PSU') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofRAM')">
                                {{ __('RAM') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofStorage')">
                                {{ __('Storage') }}
                            </x-nav-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
