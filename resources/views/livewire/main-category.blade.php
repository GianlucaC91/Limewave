<div>
    <ul>
        @foreach ($categories as $category)
            <li class="bg-s">
                <a class="" href="{{ route('categoryShow', compact('category')) }}">
                    {{ __("messages." . $category->name) }}
                    ({{ $category->accepted_articles_count }})
                </a>
            </li>
        @endforeach
    </ul>
</div>
