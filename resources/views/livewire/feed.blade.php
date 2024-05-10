<div class="container-fluid">
    <div class="row justify-content-around ">
        @foreach ($articles as $article)
        <div class="col-3 mx-2 my-5">
            {{-- @dd($articles) --}}
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/20{{$article->id}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">Venduto da {{$article->user->name}}</p>
                  <p class="card-text">{{$article->body}}</p>
                  <p class="card-text">{{$article->price}}</p>
                  <a href="#" class="btn btn-primary">Dettaglio WIP</a>
                </div>
              </div>
            </div>
            @endforeach
    </div>
</div>