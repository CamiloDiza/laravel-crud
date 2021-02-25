<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('projects.update', $project) }}" method="POST">
                        @csrf @method('PATCH')
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Title</label>
                                        <input type="text" name="title" value="{{ $project->title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Title">
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Description</label>
                                        <textarea name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Description">{{ $project->description }}</textarea>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Content</label>
                                        <textarea name="content" rows="6" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Content">{{ $project->content }}</textarea>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 inline-flex">
                                        <x-button>
                                            {{ __('Update') }}
                                        </x-button>
                                        <button class="ml-2 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            <a href="{{ redirect()->route('projects.index') }}"> {{ __('Cancel') }}</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
