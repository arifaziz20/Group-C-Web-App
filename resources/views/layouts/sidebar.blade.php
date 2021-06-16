<style>
    .sidebar {
    background: #312E81;
    background: -webkit-linear-gradient(0deg, #312E81 0%, #312E81 100%);
    background: -o-linear-gradient(0deg, #312E81 0%, #312E81 100%);
    background: -moz-linear-gradient(0deg, #312E81 0%, #312E81 100%);
    background: linear-gradient(0deg, #312E81 0%, #312E81 100%);
    width: 170px;
    position: fixed;
    top: 209px;
    left: 0;
    z-index: 99;
    background-size: cover;
    background-position: center center;
    display: block;
    box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
    border-radius: 0 20px 20px 0;
    transition: 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    text-align: left;
    padding: 20px 5px;
    }
    .sidebar ul li{
    padding-top: 10px;
    padding-left: 20px;
    }
</style>

<div class="sidebar">
    <div class="sidebar-wrapper">
        <p class="font-semibold px-3 text-xl text-white leading-tight ">
            Admin Dashboard
        </p>
        <ul class="nav">
            <li>
                <x-nav-link :href="route('User-record.index')" :active="request()->routeIs('User-record.index')">
                    <p class="text-white">User Records</p>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('CPU-record.index')" :active="request()->routeIs('CPU-record.index')">
                    <p class="text-white">CPU Records</p>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('GPU-record.index')" :active="request()->routeIs('GPU-record.index')">
                    <p class="text-white">GPU Records</p>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('Motherboard-record.index')" :active="request()->routeIs('Motherboard-record.index')">
                    <p class="text-white">Motherboard Records</p>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('PSU-record.index')" :active="request()->routeIs('PSU-record.index')">
                    <p class="text-white">PSU Records</p>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('RAM-record.index')" :active="request()->routeIs('RAM-record.index')">
                    <p class="text-white">RAM Records</p>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('Storage-record.index')" :active="request()->routeIs('Storage-record.index')">
                    <p class="text-white">Storage Records</p>
                </x-nav-link>
            </li>
        </ul>
    </div>
</div>
