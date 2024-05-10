<x-layout>
    <x-hero/>
    {{-- @dd($articles) --}}
    <livewire:feed
        :articles=$articles
    />
</x-layout>