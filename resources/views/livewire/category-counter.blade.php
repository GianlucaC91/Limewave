<div>
    @foreach ($categories as $category)
    <li>
        <a class="dropdown-item link-custom-2" href="{{ route('categoryShow', compact('category')) }}">
            {{ $category->name }}
            ({{ $category->articles->count() }})
        </a>
    </li>    
    @endforeach
</div>