<div>

    <div class="container-fluid my-5">
        <div class="row rowMainCategories">
            @foreach ($categories as $category)
    
            <div class="col-6 col-md-3 my-5 d-flex justify-content-center">   
    
                <div class="card shadow rounded-4 my-2 my-md-5" style="width: 18rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body p-0">
                        <a class="display-6 fw-bold text-body-emphasis lh-1" href="{{ route('categoryShow', compact('category')) }}">
                            <img src="/categoryLogos/real-estate.png" class="w-100" alt="">
                            {{-- {{__("messages." . $category->name) }} --}}
                        </a>
                        {{-- <h5 class="card-title">Card title</h5> --}}
                    </div>
                </div>
    
            </div>
    
                {{-- <li class="bg-s">
                    <a class="" href="{{ route('categoryShow', compact('category')) }}">
                        {{ __("messages." . $category->name) }}
                        ({{ $category->accepted_articles_count }})
                    </a>
                </li> --}}
            @endforeach

        </div>
    </div>
</div>
