
<div class="container-fluid my-5">
  <div class="row justify-content-center ">
    <div class="col-12 col-md-11 col-xl-8  bg-white shadow ">
      <div class="container-fluid">
        <div class="col-12 col-lg-6 pt-5 ps-5">
          <h2 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 underline-colors">Annunci Recenti</h2>
          <p class="lead">Più di 100 nuovi annunci ogni ora</p>            
        </div>
        {{-- OLD FEED --}}
        <div class="row justify-content-around ">
          @foreach ($articles as $article)
          <div class="col-12 col-md-4 mx-1 m-md-0 my-5">
            {{-- @dd($articles) --}}
            <div class="card" style="width: 18rem;">
              <img src="https://picsum.photos/20{{$article->id}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">Venduto da {{$article->user->name}}</p>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($article->body, 40) }}</p>
                <p class="card-text">{{$article->price}}</p>
                <a href="{{route('article.detail', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{-- OLD FEED END --}}
      </div>       
    </div>
  </div>
</div>