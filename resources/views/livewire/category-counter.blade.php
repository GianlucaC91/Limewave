<div>
    @foreach ($categories as $category)
    <li class="bg-s ">
        <a class="dropdown-item link-custom-2 text-white" href="{{ route('categoryShow', compact('category')) }}">
            {{ $category->name }}
            ({{ $category->articles->count() }})
        </a>
    </li>    
    @endforeach
</div>