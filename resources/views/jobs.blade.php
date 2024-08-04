<x-layout>
    <x-slot:heading>
        Jobs List
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <b>{{ $job['title'] }}</b>:Pays {{ $job['salary'] }}per year
                </a>

            </li>
        @endforeach
    </ul>

</x-layout>
