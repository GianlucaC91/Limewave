
<div>



        <div class="container-fluid">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-10 my-5 bg-white p-5 shadow-sm">
                    <p class="">     
                        <a href="{{ route('user.profile', ['user' => Auth::user()->id]) }}"><img src="{{Storage::url(Auth::user()->img)}}" class="card-img avatars mb-2"></a>
                        <span class="ps-2 fs-3">{{__("messages.welcome")}} {{Auth::user()->name}}</span>
                    </p>
                    <h2 class="display-6 fw-bold text-body-emphasis ps-3 lh-1 mb-3 underline-colors">{{__("messages.adsToBeApproved")}} </h2>
                </div>
        

                <div class="col-12 col-md-10">
                    <x-status/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">{{__("messages.idArticle")}}</th>
                                    <th scope="col">{{__("messages.category")}}</th>
                                    <th scope="col">{{__("messages.user")}}</th>
                                    <th scope="col">{{__("messages.title")}}</th>
                                    <th scope="col">{{__("messages.price")}}</th>
                                    <th scope="col">{{__("messages.description")}}</th>
                                    <th scope="col">{{__("messages.image")}}</th>
                                    <th scope="col"></th>
                                    <th scope="col">{{__("messages.actions")}}</th>
                                    <th scope="col"></th>
                                    {{-- <th colspan="3" scope="col">Azioni</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pending_articles as $pending)
                                <tr class="text-center">
                                    <th scope="row" class="p-3">{{$loop->iteration}}</th>
                                    <td>{{$pending->id}}</td>
                                    <td>{{$pending->category->name}}</td>
                                    <td>{{Str::limit($pending->user->name, 14)}}</td>
                                    <td>{{Str::limit($pending->title, 14)}}</td>
                                    <td>{{Str::limit($pending->price, 14)}}</td>
                                    <td>{{Str::limit($pending->body, 14)}}</td>
                                    <td>
                                        <i class="bi bi-card-image"></i>
                                    </td>
                                    {{-- <td colspan="3" class="d-flex" height="65px;">
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

                                    </td> --}}
                                    <td><button type="button" class="btn py-2 mt-1 btnView" data-bs-toggle="modal"
                                        data-bs-target="#article{{$pending->id}}">
                                        {{__("messages.view")}}
                                    </button></td>
                                    <td><button wire:click='rejectArticle({{$pending}})' class="btn py-2 mt-1 btnDelete"
                                        wire:confirm="Sei sicuro di voler rifiutare l'annuncio?">
                                        {{__("messages.refuse")}}
                                    </button></td>
                                    <td><button wire:click='acceptArticle({{$pending}})' class="btn py-2 mt-1 btnAccept"
                                        wire:confirm="Sei sicuro di voler accettare l'annuncio?">
                                        {{__("messages.accept")}}
                                    </button></td>

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
                                                <p class="card-text">{{__("messages.category")}}: {{ $pending->category->name }}</p>
                                                <p class="card-text">{{__("messages.price")}}: {{ $pending->price }} €</p>
                                                <p class="card-text">{{ Str::limit($pending->body, 50) }}</p>

                                            </div>
                                            <div class="modal-footer">
                                                <button data-bs-dismiss="modal" wire:click='rejectArticle({{$pending}})'
                                                    wire:confirm="Sei sicuro di voler rifiutare l'annuncio?"
                                                    class="btn btn-danger">
                                                    {{__("messages.refuse")}}
                                                </button>

                                                <button data-bs-dismiss="modal" wire:click='acceptArticle({{$pending}})'
                                                    wire:confirm="Sei sicuro di voler accettare l'annuncio?"
                                                    class="btn btn-success">
                                                    {{__("messages.accept")}}
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
        </div>
        {{-- fine primo container  --}}
            {{-- Rejected Announcements Table --}}
            <div class="container-fluid">
                <div class="row justify-content-center ">

                    <div class="col-12 col-md-10 my-5 bg-white p-5 shadow-sm">
                        <h2 class="display-6 fw-bold text-body-emphasis ps-3 lh-1 mb-3 underline-colors"> {{__("messages.adsRejected")}}</h2>
                    </div>

                        <div class="col-12 col-md-10">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">#</th>
                                            <th scope="col"> {{__("messages.idArticle")}}</th>
                                            <th scope="col"> {{__("messages.user")}}</th>
                                            <th scope="col"> {{__("messages.title")}}</th>
                                            <th scope="col">{{__("messages.price")}}</th>
                                            <th scope="col">{{__("messages.description")}}</th>
                                            <th scope="col"> {{__("messages.image")}}</th>
                                            <th scope="col"></th>
                                            <th class="text-center" scope="col"> {{__("messages.actions")}}</th>
                                            <th scope="col"></th>
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

                                            <td>
                                                <button type="button" class="btn py-2 mt-1 btnView" data-bs-toggle="modal"
                                                    data-bs-target="#article{{$rejected->id}}">
                                                    {{__("messages.view")}}
                                                </button>
                                            </td>

                                            @if(Auth::user()->is_revisor || Auth::user()->is_admin)
                                            <td>
                                                <button wire:click="deleteArticle({{ $rejected->id }})" class="btn py-2 mt-1 btnDelete">
                                                    {{__("messages.delete")}}
                                                </button>
                                            </td>
                                            <td>
                                                <button wire:click="restoreArticle({{ $rejected->id }})" class="btn py-2 mt-1 btnAccept">
                                                    {{__("messages.restore")}}
                                                </button>
                                            </td>
                                            @endif


                                            {{-- <td colspan="3" class="d-flex">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#article{{$rejected->id}}">
                                                    Visualizza
                                                </button> --}}

                                                {{-- Aggiungi bottoni Elimina definitivamente e Ripristina --}}
                                                {{-- @if(Auth::user()->is_revisor || Auth::user()->is_admin)
                                                <button wire:click="deleteArticle({{ $rejected->id }})" class="btn btn-danger">
                                                    Elimina definitivamente
                                                </button>

                                                <button wire:click="restoreArticle({{ $rejected->id }})" class="btn btn-warning">
                                                    Ripristina
                                                </button>
                                                @endif
                                            </td> --}}


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
                                                        <p class="card-text">{{__("messages.category")}}: {{ $rejected->category->name }}</p>
                                                        <p class="card-text">{{__("messages.price")}}: {{ $rejected->price }} €</p>
                                                        <p class="card-text">{{ Str::limit($rejected->body, 50) }}</p>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-bs-dismiss="modal" wire:click='rejectArticle({{$rejected}})'                                            
                                                            class="btn btn-danger">
                                                            {{__("messages.refuse")}}
                                                        </button>

                                                        <button data-bs-dismiss="modal" wire:click='acceptArticle({{$rejected}})'                                            
                                                            class="btn btn-success">
                                                            {{__("messages.accept")}}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <tr>
                                            <td colspan="8" class="text-center">{{__("messages.adsReject")}}</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                </div>
            </div>
            {{-- fine secondo container  --}}


</div>