<x-layout>

    <x-hero/>

    <form action="{{route('articles.search')}}"
    method="GET">
    <input name="searched" class="form-control rounded-0  border-0" type="search">
    <button class="btn btn-accent border-0 rounded-0" type="submit"><i class="bi bi-search"></i></button>

    </form>

    <livewire:feed />
    
</x-layout>