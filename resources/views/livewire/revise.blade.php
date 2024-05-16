<div class="container-fluid">
    <h2 class="text-center">Articoli in attesa di revisione</h2>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <x-status/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id Articolo</th>
                            <th scope="col">Utente</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Immagini</th>
                            <th colspan="3" scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pending_articles as $pending)
                        <tr class="text-center">
                            <th scope="row" class="p-3">{{$loop->iteration}}</th>
                            <td>{{$pending->id}}</td>
                            <td>{{Str::limit($pending->user->name, 15)}}</td>
                            <td>{{Str::limit($pending->title, 15)}}</td>
                            <td>{{Str::limit($pending->price, 15)}}</td>
                            <td>{{Str::limit($pending->body, 20)}}</td>
                            <td>
                                <i class="bi bi-card-image"></i>
                            </td>
                            <td colspan="3" class="d-flex">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#article{{$pending->id}}">
                                    Visualizza
                                </button>

                                <button wire:click='rejectArticle({{$pending}})' class="btn btn-danger"
                                    wire:confirm="Sei sicuro di voler rifiutare l'annuncio?">
                                    Rifiuta
                                </button>

                                <button wire:click='acceptArticle({{$pending}})' class="btn btn-success"
                                    wire:confirm="Sei sicuro di voler accettare l'annuncio?">
                                    Accetta
                                </button>

                            </td>
                        </tr>
                        {{-- article modal --}}
                        <div class="modal fade" id="article{{$pending->id}}" tabindex="-1"
                            aria-labelledby="articleLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$pending->title}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="card-text">Categoria: {{ $pending->category->name }}</p>
                                        <p class="card-text">Prezzo: {{ $pending->price }} €</p>
                                        <p class="card-text">{{ Str::limit($pending->body, 50) }}</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button data-bs-dismiss="modal" wire:click='rejectArticle({{$pending}})'
                                            wire:confirm="Sei sicuro di voler rifiutare l'annuncio?"
                                            class="btn btn-danger">
                                            Rifiuta
                                        </button>

                                        <button data-bs-dismiss="modal" wire:click='acceptArticle({{$pending}})'
                                            wire:confirm="Sei sicuro di voler accettare l'annuncio?"
                                            class="btn btn-success">
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
        </div>
    </div>
{{-- Rejected Announcements Table --}}
    <h2 class="text-center">Articoli Rifiutati</h2>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id Articolo</th>
                            <th scope="col">Utente</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Immagini</th>
                            <th colspan="3" scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rejected_articles as $rejected)
                        <tr class="text-center">
                            <th scope="row" class="p-3">{{$loop->iteration}}</th>
                            <td>{{$rejected->id}}</td>
                            <td>{{Str::limit($rejected->user->name, 15)}}</td>
                            <td>{{Str::limit($rejected->title, 15)}}</td>
                            <td>{{Str::limit($rejected->price, 15)}}</td>
                            <td>{{Str::limit($rejected->body, 20)}}</td>
                            <td>
                                <i class="bi bi-card-image"></i>
                            </td>
                            <td colspan="3" class="d-flex">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#article{{$rejected->id}}">
                                    Visualizza
                                </button>

                                {{-- Aggiungi bottoni Elimina definitivamente e Ripristina --}}
                                @if(Auth::user()->is_revisor || Auth::user()->is_admin)
                                <button wire:click="deleteArticle({{ $rejected->id }})" class="btn btn-danger">
                                    Elimina definitivamente
                                </button>

                                <button wire:click="restoreArticle({{ $rejected->id }})" class="btn btn-warning">
                                    Ripristina
                                </button>
                                @endif
                            </td>
                        </tr>
                        {{-- article modal --}}
                        <div class="modal fade" id="article{{$rejected->id}}" tabindex="-1"
                            aria-labelledby="articleLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$rejected->title}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="card-text">Categoria: {{ $rejected->category->name }}</p>
                                        <p class="card-text">Prezzo: {{ $rejected->price }} €</p>
                                        <p class="card-text">{{ Str::limit($rejected->body, 50) }}</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button data-bs-dismiss="modal" wire:click='rejectArticle({{$rejected}})'                                            
                                            class="btn btn-danger">
                                            Rifiuta
                                        </button>

                                        <button data-bs-dismiss="modal" wire:click='acceptArticle({{$rejected}})'                                            
                                            class="btn btn-success">
                                            Accetta
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Non ci sono annunci rifiutati.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>