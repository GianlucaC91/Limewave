<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <x-status/>
            {{-- div per classe table responsive --}}
            <div class="table-responsive">
            <table class="table">
                
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Articolo</th>
                        <th scope="col">Utente</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Immagini</th>                
                        <th colspan="3" scope="col">Azioni</th>                
                    </tr>
                </thead>
                <tbody>
                    @foreach ($article_to_check as $pending)
                    <tr class="text-center">                        
                        <th scope="row" class="p-3">{{$loop->iteration}}</th>
                        <td>{{$pending->id}}</td>
                        <td>{{Str::limit($pending->user->name, 15)}}</td>
                        <td>{{Str::limit($pending->title, 15)}}</td>
                        <td>{{Str::limit($pending->price, 15)}}</td>
                        <td>{{Str::limit($pending->category->name, 15)}}</td>
                        <td>{{Str::limit($pending->body, 20)}}</td>
                        <td>
                            
                            <i class="bi bi-card-image"></i>
                            
                        </td>
                        <td colspan="3" class="d-flex">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#article{{$pending->id}}">
                            Visualizza
                            </button>

                            <button 
                            wire:click='rejectArticle({{$pending}})'
                            wire:confirm="Sei sicuro di voler rifiutare l'annuncio?"
                            class="btn btn-danger"
                            >
                            Rifiuta
                            </button>

                            <button 
                            wire:click='acceptArticle({{$pending}})'
                            wire:confirm="Sei sicuro di voler accettare l'annuncio?"
                            class="btn btn-success"
                            >
                            Accetta
                            </button>

                        </td>
                        
                        
                    </tr>                        
                    {{-- article modal --}}
                    <div class="modal fade" id="article{{$pending->id}}" tabindex="-1" aria-labelledby="articleLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$pending->title}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="card-text">Categoria: {{ $pending->category->name }}</p>
                                    <p class="card-text">Prezzo: {{ $pending->price }} €</p>
                                    <p class="card-text">{{ Str::limit($pending->body, 50) }}</p>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button 
                                    data-bs-dismiss="modal"
                                    wire:click='rejectArticle({{$pending}})'
                                    wire:confirm="Sei sicuro di voler rifiutare l'annuncio?"
                                    class="btn btn-danger"
                                    >
                                    Rifiuta
                                    </button>
        
                                    <button 
                                    data-bs-dismiss="modal"
                                    wire:click='acceptArticle({{$pending}})'
                                    wire:confirm="Sei sicuro di voler accettare l'annuncio?"
                                    class="btn btn-success"
                                    >
                                    Accetta
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
            </div>
            {{-- div per classe table responsive --}}
        </div>
    </div>
</div>
