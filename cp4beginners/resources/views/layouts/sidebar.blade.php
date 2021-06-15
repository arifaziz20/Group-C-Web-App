<style>
    .sidebar {
    background: white;
    background: -webkit-linear-gradient(0deg, white 0%, white 100%);
    background: -o-linear-gradient(0deg, white 0%, white 100%);
    background: -moz-linear-gradient(0deg, white 0%, white 100%);
    background: linear-gradient(0deg, white 0%, white 100%);
    width: 170px;
    position: fixed;
    top: 128px;
    left: 0;
    z-index: 1;
    background-size: cover;
    background-position: center center;
    display: block;
    box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
    margin-top: 80px;
    margin-left: 10px;
    border-radius: 5px;
    transition: 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    text-align: center;
    padding: 20px 5px;
    }
    .sidebar ul li{
    padding-top: 10px;
    }
</style>

<div class="sidebar">
    <div class="sidebar-wrapper">
        <p class="font-semibold text-xl text-gray-800 leading-tight ">
            Admin Dashboard
        </p>
        <ul class="nav">
            <li>
                <x-nav-link :href="route('User-record.index')" :active="request()->routeIs('User-record.index')">
                    {{ __('User Records') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('CPU-record.index')" :active="request()->routeIs('CPU-record.index')">
                    {{ __('CPU Records') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('RAM-record.index')" :active="request()->routeIs('RAM-record.index')">
                    {{ __('RAM Records') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('GPU-record.index')" :active="request()->routeIs('GPU-record.index')">
                    {{ __('GPU Records') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('PSU-record.index')" :active="request()->routeIs('PSU-record.index')">
                    {{ __('PSU Records') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('Motherboard-record.index')" :active="request()->routeIs('Motherboard-record.index')">
                    {{ __('Motherboard Records') }}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('Storage-record.index')" :active="request()->routeIs('Storage-record.index')">
                    {{ __('Storage Records') }}
                </x-nav-link>
            </li>
        </ul>
    </div>
</div>
