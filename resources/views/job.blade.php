<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p class="text-gray-500">
        This job pays{{ $job['salary'] }} per year.
    </p>
</x-layout>
