<div>
    @foreach ($categories as $category)
    <li class="bg-s">
        <a class="dropdown-item link-custom-2 text-p" href="{{ route('categoryShow', compact('category')) }}">
            {{ $category->name }}
            ({{ $category->acceptedArticles->count() }})
        </a>
    </li>
    @endforeach
</div>