<x-layout>
    <x-slot:heading>
        jobs page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id'] }}">
                    {{ $job['title'] }}: pays {{ $job['salary'] }} per year</li>
                </a>
        @endforeach
    </ul>

</x-layout>
