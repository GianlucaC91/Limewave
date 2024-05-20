<div>
    <div class="container-fluid mt-5 pt-5">
        <div class="row bg-white  justify-content-center py-5 rowMainCategories">
            @foreach ($categories->sortByDesc(function ($category) {
                return $category->acceptedArticles->count();
            })->take(4) as $category)
                <div class="col-6 col-md-3 d-flex justify-content-center">   

                    <div class="card shadow rounded-4 my-5" style="width: 18rem;">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <a class="display-6 fw-bold text-body-emphasis lh-1" href="{{ route('categoryShow', compact('category')) }}">
                                {{__("messages." . $category->name) }}
                            </a>
                            {{-- <h5 class="card-title">Card title</h5> --}}
                        </div>
                    </div>

                </div>

                {{-- <ul>
                    <li class="">
                        <a class="" href="{{ route('categoryShow', compact('category')) }}">
                            {{__("messages." . $category->name) }}
                            ({{ $category->acceptedArticles->count() }})
                        </a>
                    </li>
                </ul> --}}
                @endforeach
        </div>
    </div>
</div>
