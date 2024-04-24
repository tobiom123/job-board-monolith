<x-layout heading="Job">
    <h2>{{ $job->title }}</h2>
    <p>This job pays {{ $job->salary }} per year.</p>
    @can('update', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan
</x-layout>