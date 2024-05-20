<div>
    <div class="container-fluid">
        <div class="row">
             <div class="col-12 col-md-6">
                @foreach ($categories->sortByDesc(function ($category) {
                    return $category->acceptedArticles->count();
                })->take(4) as $category)
                <li class="bg-s">
                    <a class="" href="{{ route('categoryShow', compact('category')) }}">
                        {{__("messages." . $category->name) }}
                        ({{ $category->acceptedArticles->count() }})
                    </a>
                </li>
                @endforeach
             </div>
        </div>
    </div>
</div>
