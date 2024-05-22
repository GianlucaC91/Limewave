
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
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pending_articles as $pending)
                            <tr class="text-center">
                                <th scope="row" class="p-3">{{$loop->iteration}}</th>
                                <td>{{$pending->id}}</td>
                                <td>{{$pending->category->name}}</td>
                                <td>{{Str::limit($pending->user->name, 14)}}</td>
                                <td>{{Str::limit($pending->title, 14)}}</td>
                                <td>{{Str::limit($pending->price, 14)}}</td>
                                <td>{{Str::limit($pending->body, 14)}}</td>
                                <td>
                                    <button type="button" class="btn py-2 mt-1 btnViewImg" data-bs-toggle="modal" data-bs-target="#articleImages{{$pending->id}}">
                                        <i class="bi bi-image"></i>
                                    </button>
                                </td>                                   
                                <td>
                                    <button type="button" class="btn py-2 mt-1 btnView" data-bs-toggle="modal"
                                    data-bs-target="#article{{$pending->id}}">
                                    {{__("messages.view")}}
                                    </button>
                                </td>
                                <td>
                                    <button wire:click='rejectArticle({{$pending}})' class="btn py-2 mt-1 btnDelete"
                                    wire:confirm="Sei sicuro di voler rifiutare l'annuncio?">
                                    {{__("messages.refuse")}}
                                </button>
                                </td>
                                <td>
                                    <button wire:click='acceptArticle({{$pending}})' class="btn py-2 mt-1 btnAccept"
                                    wire:confirm="Sei sicuro di voler accettare l'annuncio?">
                                    {{__("messages.accept")}}
                                </button>
                                </td>
                            </tr>
                                    <!-- Modal Images-->
                                    
                                    <div class="modal fade" id="articleImages{{$pending->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$pending->title}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{-- modal body  --}}
                                                    <div class="container">
                                                        <div class="row">
                                                            {{-- carosello immagini articolo  --}}
                                                            <div class="col-12">
                                                                
                                                                <div id="carouselExampleIndicators" class="detailCarousel carousel slide w-100">
                                                                    <div class="carousel-indicators">
                                                                        @foreach($pending->images as $index => $image)
                                                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="carousel-inner">
                                                                        
                                                                        
                                                                        @forelse($pending->images as $index => $image)
                                                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                                            <img src="{{ $image->getCropUrl(720, 720) }}" class="d-block w-100" alt="...">
                                                                            <div class="row pb-5">
                                                                                
                                                                                {{-- Google vision --}}
                                                                                <div class="col-4 my-2 pe-0">
                                                                                    <h5>Ratings:</h5>
                                                                                    <div class="d-flex">
                                                                                        <p>Contenuti per adulti</p>
                                                                                        <span class="{{$image->adult}} mx-2"></span>
                                                                                    </div>
                                                                                    <div class="d-flex">
                                                                                        <p>Contenuti violenti</p>
                                                                                        <span class="{{$image->violence}} mx-2"></span>
                                                                                    </div>
                                                                                    <div class="d-flex">
                                                                                        <p>Contenuti ingannevoli</p>
                                                                                        <span class="{{$image->spoof}} mx-2"></span>
                                                                                    </div>
                                                                                    <div class="d-flex">
                                                                                        <p>Contenuti ammicanti</p>
                                                                                        <span class="{{$image->racy}} mx-2"></span>
                                                                                    </div>
                                                                                    <div class="d-flex">
                                                                                        <p>Contenuti medici</p>
                                                                                        <span class="{{$image->medical}} mx-2"></span>
                                                                                    </div>
                                                                                    {{-- Labels --}}
                                                                                    <div>
                                                                                        <?php
                                                                                        $image->labels = trim($image->labels,"[]");
                                                                                        $labels = explode(',' , $image->labels);
                                                                                        $labels= array_map(function($word) {
                                                                                            return str_replace('"', '', $word);
                                                                                        }, $labels);
                                                                                        ?>
                                                                                        {{-- End Labels Logic --}}
                                                                                        @foreach ($labels as $label)
                                                                                        <p>{{$label}}</p>
                                                                                        @endforeach
                                                                                    </div>
                                                                                    {{-- End Labels --}}
                                                                                </div>
                                                                                {{-- Fine google vision --}}
                                                                                
                                                                                {{-- Altro google vision --}}
                                                                                <div class="col-8">
                                                                                    
                                                                                </div>
                                                                                {{--Fine altro google vision --}}
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        @empty
                                                                        <div class="carousel-item active">
                                                                            <img src="/media/logo2024.png" class="d-block w-100" alt="...">
                                                                        </div>
                                                                        @endforelse
                                                                        
                                                                        
                                                                    </div>
                                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                                        <span class="visually-hidden">{{ __("messages.previous") }}</span>
                                                                    </button>
                                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                                        <span class="visually-hidden">{{ __("messages.next") }}</span>
                                                                    </button>
                                                                </div>
                                                                
                                                            </div>
                                                            {{-- fine carosello immagini articolo  --}}
                                                        </div>
                                                    </div>                                               
                                                    
                                                    {{-- fine modal body  --}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btnView" data-bs-dismiss="modal">Chiudi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                
                                    {{-- Modal Images End --}}
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
                                                    class="btn btnDelete">
                                                    {{__("messages.refuse")}}
                                                </button>
                                                
                                                <button data-bs-dismiss="modal" wire:click='acceptArticle({{$pending}})'
                                                wire:confirm="Sei sicuro di voler accettare l'annuncio?"
                                                class="btn btnAccept">
                                                {{__("messages.accept")}}
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                    
                                    
                            </div>
                                               
                            @empty
                            <tr>
                                <td colspan="11" class="text-center">{{__("messages.adsReject")}}</td>
                            </tr>                                        
                            @endforelse
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
                            <th scope="col">{{__("messages.category")}}</th>
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
                            <td>{{$rejected->category->name}}</td>
                            <td>{{Str::limit($rejected->user->name, 15)}}</td>
                            <td>{{Str::limit($rejected->title, 15)}}</td>
                            <td>{{Str::limit($rejected->price, 15)}}</td>
                            <td>{{Str::limit($rejected->body, 20)}}</td>
                            <td>
                                <button type="button" class="btn py-2 mt-1 btnViewImg" data-bs-toggle="modal" data-bs-target="#rejectedArticleImages{{$rejected->id}}">
                                    <i class="bi bi-image"></i>
                                </button>
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
                        
                    </tr>
                    
                    {{--rejected article view modal--}}
                    
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
                                    class="btn btnDelete">
                                    {{__("messages.refuse")}}
                                </button>
                                
                                <button data-bs-dismiss="modal" wire:click='acceptArticle({{$rejected}})'                                            
                                class="btn btnAccept">
                                {{__("messages.accept")}}
                            </button>
                        </div>
                    </div>
                </div>
                    </div>
                    {{-- Modale carosello immagine articoli rifiutati --}}
                    <div class="modal fade" id="rejectedArticleImages{{$rejected->id}}" tabindex="-1"
                        aria-labelledby="articleLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$rejected->title}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- <p class="card-text">{{__("messages.category")}}: {{ $rejected->category->name }}</p>
                                    <p class="card-text">{{__("messages.price")}}: {{ $rejected->price }} €</p>
                                    <p class="card-text">{{ Str::limit($rejected->body, 50) }}</p> --}}
                                    
                                    {{-- modal body  --}}
                                    <div class="container">
                                        <div class="row">
                                            {{-- carosello immagini articolo  --}}
                                            <div class="col-12">
                                                
                                                <div id="carouselExampleIndicatorsRejected" class="detailCarousel carousel slide w-100">
                                                    <div class="carousel-indicators">
                                                        @foreach($rejected->images as $index => $image)
                                                        <button type="button" data-bs-target="#carouselExampleIndicatorsRejected" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                                        @endforeach
                                                    </div>
                                                    <div class="carousel-inner">
                                                        
                                                        
                                                        @forelse($rejected->images as $index => $image)
                                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                            <img src="{{ $image->getCropUrl(720, 720) }}" class="d-block w-100" alt="...">
                                                            <div class="row pb-5">
                                                                
                                                                {{-- Google vision --}}
                                                                <div class="col-4 my-2 pe-0">
                                                                    <h5>Ratings:</h5>
                                                                    <div class="d-flex">
                                                                        <p>Contenuti per adulti</p>
                                                                        <span class="{{$image->adult}} mx-2"></span>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p>Contenuti violenti</p>
                                                                        <span class="{{$image->violence}} mx-2"></span>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p>Contenuti ingannevoli</p>
                                                                        <span class="{{$image->spoof}} mx-2"></span>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p>Contenuti ammicanti</p>
                                                                        <span class="{{$image->racy}} mx-2"></span>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p>Contenuti meidici</p>
                                                                        <span class="{{$image->medical}} mx-2"></span>
                                                                    </div>
                                                                </div>
                                                                {{-- Fine google vision --}}
                                                                
                                                                {{-- Altro google vision --}}
                                                                <div class="col-8">
                                                                    
                                                                </div>
                                                                {{--Fine altro google vision --}}
                                                                
                                                            </div>
                                                        </div>
                                                        @empty
                                                        <div class="carousel-item active">
                                                            <img src="/media/logo2024.png" class="d-block w-100" alt="...">
                                                        </div>
                                                        @endforelse
                                                        
                                                        
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsRejected" data-bs-slide="prev">
                                                        <span class="visually-hidden">{{ __("messages.previous") }}</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsRejected" data-bs-slide="next">
                                                        <span class="visually-hidden">{{ __("messages.next") }}</span>
                                                    </button>
                                                </div>
                                                
                                            </div>
                                            {{-- fine carosello immagini articolo  --}}
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button data-bs-dismiss="modal" wire:click='rejectArticle({{$rejected}})'                                            
                                    class="btn btnDelete">
                                    {{__("messages.refuse")}}
                                </button>
                                
                                <button data-bs-dismiss="modal" wire:click='acceptArticle({{$rejected}})'                                            
                                class="btn btnAccept">
                                {{__("messages.accept")}}
                            </button>
                        </div>
                    </div>
        </div>
    </div>
    @empty
    <tr>
        <td colspan="11" class="text-center">{{__("messages.adsReject")}}</td>
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