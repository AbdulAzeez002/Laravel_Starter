<x-layout>
    <x-slot:heading>
        jobs page
    </x-slot:heading>

    <h2>{{ $job['title'] }}</h2>
    <p>This job pays {{$job['salary'] }}</p>

</x-layout>
