<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                     <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data" >
                        @csrf
                
                        <!-- Email Address -->
                        <div class="mt-4">
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="nom" class="block mt-1 w-full" type="nom" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                       
                        <div class="mt-4">
                            <x-input-label for="message" :value="__('Message')" />
                            <x-text-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')" required autofocus />
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        </div>

                 
                
                        <div class="flex items-center justify-end mt-4">
                          
                            <x-primary-button class="ml-3">
                                {{ __('Soumettre') }}
                            </x-primary-button>
                        </div>
                    </form> 

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
