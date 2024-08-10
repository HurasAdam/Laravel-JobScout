<x-layout>
    <x-slot:heading>
        <h1>Job</h1>
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <span>This job pays:{{ $job['salary'] }}</span>
</x-layout>
