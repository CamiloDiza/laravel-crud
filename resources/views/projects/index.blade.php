<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="list-disc ml-8 self-center">
                        @foreach ($projects as $projectItem)
                            <li class="mt-4"><a href="{{ route('projects.show', $projectItem) }}">{{ $projectItem['title'] }}</a></li>
                            <small>{{ $projectItem['description'] }}</small>
                        @endforeach
                    </ul>
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
