<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('User-record.update',$user->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" autofocus readonly />
                                </div>
                                <div>
                                    <x-label for="email_address" :value="__('Email Address')" />
                                    <x-input id="email_address" class="block mt-1 w-full" type="text" name="email_address" value="{{$user->email}}" autofocus readonly/>
                                </div>
                                <div>
                                    <x-label for="role_id" :value="__('Role')" />
                                    <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                        <option value="{{$user->role_id}}">{{$user->user_role}}</option>
                                        <?php
                                        if ($user->role_id == '1')
                                        {
                                            print '<option value="2">User</option>';
                                        }else {
                                            print '<option value="1">Admin</option>';
                                        }
                                        ?>
                                    </select>
                                    {{-- <x-input id="user_role" class="block mt-1 w-full" type="Z" name="user_role" value="{{$user->user_role}}" autofocus /> --}}
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
