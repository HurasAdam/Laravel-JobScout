<x-layout>
    <x-slot:heading>
        Jobs List
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <div class="text-blue-500 font-bold text-sm">
                {{ $job->employer->name }}
            </div>
            <a href="/jobs/{{ $job['id'] }}" class="block px-5 py-6 border border-gray-200 rounded-lg">
                <b>{{ $job['title'] }}</b>:Pays {{ $job['salary'] }}per year
            </a>
        @endforeach
    </div>

</x-layout>
