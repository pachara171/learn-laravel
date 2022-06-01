<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Post') }} 
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('posts.show', $post) }}">
                        @csrf
                        @method('PUT')
                        
                        <!-- User and Message -->
                        <div class="p-5">
                            <div class="flex">
                                <x-label for="body" :value="__('User =>')"/>
                                <x-label for="body" :value="old('body', $post->owner->name)"/>
                            </div>
                            <div class="flex">
                                <x-label for="body" :value="__('Message =>')"/>
                                <x-label for="body" :value="old('body', $post->body)"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>