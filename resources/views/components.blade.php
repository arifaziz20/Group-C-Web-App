<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Components') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-900 border-b border-gray-200 text-center">
                    <h1 class="text-5xl text-white my-10">
                        List of Compononet Parts
                    </h1>
                    <ul class="my-10">
                        <li>
                            <x-nav-link :href="route('listofCPU')">
                                <p class="text-white text-2xl">CPU</p>
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofGPU')">
                                <p class="text-white text-2xl">GPU</p>
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofMotherboard')">
                                <p class="text-white text-2xl">Motherboard</p>
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofPSU')">
                                <p class="text-white text-2xl">PSU</p>
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofRAM')">
                                <p class="text-white text-2xl">RAM</p>
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('listofStorage')">
                                <p class="text-white text-2xl">Storage</p>
                            </x-nav-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
