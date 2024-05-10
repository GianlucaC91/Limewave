<x-layout>


<div class="container">
    <div class="row">
         <div class="col-12 col-md-6">
        
            <h1>Categoria {{$category->name}}</h1>
            @forelse ($category->articles as $article)
                <div class="col-12 col-6">
                    <h4>{{$article->title}}</h4>
                    <p>Creato il: {{$article->created_at->format("d/m/Y")}}</p>
                    <p>Creato da: {{$article->user->name ?? ""}}</p>
                </div>
            @empty
            <p>Non sono presenti annunci</p> 
            <p><a href="{{route("article.create")}}">Pubblicane uno</a></p>

            @endforelse
         </div>
    </div>
</div>



</x-layout>